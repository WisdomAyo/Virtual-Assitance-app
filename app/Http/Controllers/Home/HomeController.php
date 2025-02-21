<?php

namespace App\Http\Controllers\Home;

use App\Helpers\CommonHelpers;
use App\Http\Controllers\Controller;
use App\Mail\WelcomeToSwiftedgeVA;
use App\Models\ArtisanGallery;
use App\Models\ArtisanServices;
use App\Models\AwardsAndCertificates;
use App\Models\BusinessCategory;
use App\Models\ContactUs;
use App\Models\Country;
use App\Models\CustomerRating;
use App\Models\Education;
use App\Models\EmployerJobs;
use App\Models\Experience;
use App\Models\JobApplications;
use App\Models\Locals;
use App\Models\StateAreas;
use App\Models\States;
use App\Models\User;
use App\Traits\Executable;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    use Executable;

    /**
     * @return Application|Factory|View
     */
    public function getIndex() {

        /** SEO */
        $seo = CommonHelpers::seoTemplate("home");
        /** END OF SEO */

        $artisan_services = ArtisanServices::query()->where('status', 1)->get();

        foreach ($artisan_services as $row){
            $row["profile_image"] = User::query()->where('id', $row->user_id)->value('profile_image');
        }


        $state_area = States::all();
        $category = BusinessCategory::all();
        $feature_category = BusinessCategory::query()->limit(3)->get();

        $index_cat = BusinessCategory::query()->where('parent_id', 0)->limit(10)->get();

        foreach ($index_cat as $row){
            $row["total_service"] = ArtisanServices::query()->where('business_category_id', $row->id)->count();
        }


        $listed = ['artisan_services' => $artisan_services, 'feature_category' => $feature_category,
            'state_area' =>$state_area,'category'=> $category,'index_cat'=>$index_cat];

        if (App::environment('production')) {
           $listed = array_merge($listed,$seo);
        }

        return view('home.index', $listed);
    }




    public function getServicesByCategory($business_category_id){
        $artisan_services = ArtisanServices::query()->where('business_category_id', $business_category_id)->get();
        foreach ($artisan_services as $row){
            $row["profile_image"] = User::query()->where('id', $row->user_id)->value('profile_image');
        }
       return $artisan_services;
    }


    /**
     * @return Application|Factory|View
     */
    public function allJobs(){

        /** SEO */
        $seo = CommonHelpers::seoTemplate("All Jobs");
        /** END OF SEO */

        $employers_job = EmployerJobs::orderBy('id','DESC')->where('status', 1)->paginate(20);
        $listed = ['employers_job' => $employers_job];

        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }
        return view('home.job_list', $listed);
    }





    /**
     * @return Application|Factory|View
     */
    public function allFreelancers(){

        /** SEO */
        $seo = CommonHelpers::seoTemplate("All Freelancers");
        /** END OF SEO */

        $freelancers = User::orderBy('id','DESC')->where('role','Artisan')->where('is_admin',0)->where('status', 1)->paginate(20);
        $listed = ['freelancers' => $freelancers];

        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }
        return view('home.freelancers', $listed);
    }

    /**
     * @return Application|Factory|View
     */
    public function getAboutUs(){
        /** SEO */
        $seo = CommonHelpers::seoTemplate("About Us");
        /** END OF SEO */

        $listed =[];
        if (App::environment('production')) {
            $listed = $seo;
        }
        return view('home.about',$listed);
    }

    /**
     * @return Application|Factory|View
     */
    public function getFaqs(){

        /** SEO */
        $seo = CommonHelpers::seoTemplate("FAQ");
        /** END OF SEO */
        $listed =[];

        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.faq',$listed);
    }

    /**
     * @return Application|Factory|View
     */
    public function getContactus(){

        /** SEO */
        $seo = CommonHelpers::seoTemplate("Contact Us");
        /** END OF SEO */
        $listed = [];

        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.contact-us',$listed);
    }



    /**
     * @return Application|Factory|View
     */
    public function allServices(){

        /** SEO */
        $seo = CommonHelpers::seoTemplate("All Candidates");
        /** END OF SEO */

        $artisan_services = ArtisanServices::query()->orderBy('id','DESC')->paginate(20);

        $listed = ['artisan_services' => $artisan_services];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.all_services', $listed);
    }


    /**
     * @return Application|Factory|View
     */
    public function allServicesByURL($url){

        /** SEO */
        $seo = CommonHelpers::seoTemplate("All Candidates");
        /** END OF SEO */

        $category = BusinessCategory::query()->where('url', $url)->value('id');
        $artisan_services = ArtisanServices::query()->where('business_category_id', $category)->orderBy('id','DESC')->paginate(20);

        $listed = ['artisan_services' => $artisan_services];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.all_services', $listed);
    }


    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function getCategoryJobs(Request $request){


        $business_category_id = BusinessCategory::where('url',$request->segment(3))->value('id') ?? 0;
        $employers_job = EmployerJobs::where('business_category_id', $business_category_id)->get();

        /** SEO */
        $seo = CommonHelpers::seoTemplate($request->segment(3));
        /** END OF SEO */

        $listed = ['employers_job' => $employers_job];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.all_category_jobs', $listed);
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function getSearchResult(Request $request){

        /** SEO */
        $seo = CommonHelpers::seoTemplate("Search -".$request->keyword);
        /** END OF SEO */

        $state_area = States::all();
        $category = BusinessCategory::all();

        if(!empty($request->keyword) && empty($request->city) && empty($request->job_category)){
            $results = EmployerJobs::select('*')->where('job_title','LIKE','%'.$request->keyword.'%')->where('status', 1)->paginate(40);

        }else{
            $results = EmployerJobs::select('*')->where('job_title','LIKE','%'.$request->keyword.'%')
                ->where('state','LIKE','%'.$request->city.'%')->where('business_category_name','LIKE','%'.$request->job_category.'%')->where('status', 1)->paginate(40);
        }

        $listed = ['results' => $results, 'state_area' => $state_area, 'category' => $category];

        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.search', $listed);

    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function ServicesByURL(Request $request){


        $url = $request->segment(2);

        $result = ArtisanServices::query()->where('url', $url)->get();
        $related_jobs = ArtisanServices::orderBy('id','DESC')->where('status', 1)->take(3)->get();

        /** SEO */
        $desc = "";
        $seo = [];
        /** END OF SEO */

        $listed = ['result' => $result, 'related_services' =>$related_jobs];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }
        return view('home.services_details', $listed);
    }


    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function getUserDetails(Request $request){


        if($request->status){
            $request->session()->put('status', $request->status);
        }
        $id = $request->segment(2);
        $user = User::where('identity', $id)->get();
        $awards =  AwardsAndCertificates::where('user_id', $user[0]->id)->get();
        $services = ArtisanServices::where('user_id', $user[0]->id)->get();
        $education = Education::where('user_id', $user[0]->id)->get();
        $experience = Experience::where('user_id', $user[0]->id)->get();
        $reviews = CustomerRating::where('user_id', $id)->get();
        $gallery = ArtisanGallery::where('user_id',$user[0]->id)->get();
        $status = Session::get('status');


        /** SEO */
        $seo = CommonHelpers::seoTemplate("Artisan (".$user[0]->full_name.")");
        /** END OF SEO */

        $listed = ['user' => $user, 'awards' =>$awards, 'education' => $education,
            'experience' => $experience, 'reviews' => $reviews,'gallery' =>$gallery,'status' =>$status, 'services' =>$services];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.candidates_details', $listed);

    }


    /**
     * @return Application|Factory|View
     */
    public function getBlueCollarStaffing() {

        /** SEO */
        $seo = CommonHelpers::seoTemplate("Blue Collar Staffing");
        /** END OF SEO */

        $listed = [];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.staffing-solutions', $listed);
    }


    /**
     * @return Application|Factory|View
     */
    public function getEmployerForm() {


        /** SEO */
        $seo = CommonHelpers::seoTemplate("Employer form");
        /** END OF SEO */

        $states = States::all();
        $category =  BusinessCategory::all();

        $listed = ['states' => $states, 'category' =>$category];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.employer-form', $listed);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function saveEmployerForm(Request $request): RedirectResponse
    {
          return $this->createEmployerAccount($request);
    }


    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function getThisJobApplicationForm(Request $request) {

        /** SEO */
        $seo = CommonHelpers::seoTemplate("Job form");
        /** END OF SEO */

        $url = $request->segment(2);
        $result =  EmployerJobs::where('url', $url)->where('status', 1)->get();
        $states = States::all();

        $listed = ['result' => $result, 'states' =>$states];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.apply_for_job',$listed);
    }

    /**
     * @return Application|Factory|View
     */
    public function getJobApplicationForm() {
        /** SEO */
        $seo = CommonHelpers::seoTemplate("Job form");
        /** END OF SEO */

        $states = States::all();
        $listed = ['states' =>$states];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.job-application-form',$listed);
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function saveJobApplication(Request $request): RedirectResponse
    {
        $job_id                     =  EmployerJobs::where('url',$request->job_id)->value('id');
        $employer_id                =  EmployerJobs::where('url',$request->job_id)->value('user_id');
        $post                       = new JobApplications();
        $post->job_id               = $job_id ?? null;
        $post->full_name            = Auth::user()->full_name ?? $request->fullName;
        $post->location_address     = $request->address. ",".$request->city. ",". $request->State;
        $post->email                = Auth::user()->email ?? $request->emailAddress ;
        $post->phone                =  Auth::user()->phone ?? $request->phoneNumber;
        $post->dob                  = $request->dob;
        $post->skills               = $request->skills;
        $post->skillLevel           = $request->skillLevel;
        $post->availability         = Auth::user()->availability ?? $request->availability;
        $post->certification        = $request->certification;
        $post->employer_id          = $employer_id;

        if($request->CV) {
            // Create directory if it does not exist
            if (!is_dir("JobRequest/CV/")) {
                $path = "JobRequest/CV/";
                File::makeDirectory(public_path() . '/' . $path, 0777, true);
            }


            $images = $request->CV;
            $imageName = "SwiftedgeVA-job-" . time() . "." . $images->getClientOriginalExtension();

            /** VALIDATING EXTENSIONS  */
            $allowedfileExtension = ['docx', 'pdf', 'doc', 'odt', 'xls', 'xlsx', 'ppt', 'pptx'];
            $extension = $images->getClientOriginalExtension();

            $check_more = in_array($extension, $allowedfileExtension);

            if ($check_more) {
                $directory_original = public_path("JobRequest/CV/");
                $images->move($directory_original, $imageName);

                $post->cv = $imageName;
                $post->save();
                return back()->withInput()->with('response', 'Success!! Your application has been submitted');

            } else {
                return back()->withInput()->with('response', 'image type not supported');
            }
        }else {
            $post->cv = null;
            $post->save();
            return back()->withInput()->with('response', 'Success!! Your application has been submitted');
        }

    }


    /**
     * @return Application|Factory|View
     */
    public function register() {

        /** SEO */
        $seo = CommonHelpers::seoTemplate("Registration");
        /** END OF SEO */

        $country = Country::all();

        $listed = ['country' =>$country];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }


        return view('home.register', $listed);
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|RedirectResponse
     */
    public function registerAsArtisan2(Request $request) {


        /** SEO */
        $seo = CommonHelpers::seoTemplate("Register As An Artisan");
        /** END OF SEO */

        if($request->email != null){
            $validator = Validator::make($request->all(), [
                'fullname' => 'required|string|max:25',
                'email' => 'required|string|email|max:255|unique:users',
                'phone' => 'required|numeric|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
        }else {
            $validator = Validator::make($request->all(), [
                'fullname' => 'required|string|max:25',
                'phone' => 'required|numeric|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
        }

        if ($validator->fails()) {
            return redirect()->route('index.register')->withErrors($validator)->withInput();
        }


        $details_one = $request->all();
        $category  = BusinessCategory::all();

        $listed = ['category' => $category, 'old_request' => $details_one];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.register_as_artisan_step_2', $listed);
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function saveArtisan(Request $request): RedirectResponse
    {


        $step_one       = $request->old_request;
        $fullname       = $step_one[1];
        $email          =  $step_one[2];
        $phone          = $step_one[3];
        $dob            = $step_one[4];
        $country        = $step_one[5];
        $state          = $step_one[6];
        $state_area     = $step_one[7];
        $street         = $step_one[8];
        $password       = $step_one[9];


        if(!empty( $email)){
            $check = User::where('email', $email)->count();
            if($check > 0){
                return redirect()->route('index.register.artisan')->with('error', 'Email Address already exist');
            }
        }
        if(!empty($phone)){

            $check = User::where('phone', $phone)->count();
            if($check > 0){
                return redirect()->route('index.register.artisan')->with('error', 'Phone Number already exist');
            }
        }

        $bus_category = $request->BusinessCategory;
        $check_ = BusinessCategory::where('id',$bus_category)->get();
        if($check_->count() == 0){
            return redirect()->route('index.register.artisan')->with('error', 'Invalid Category');
        }

        $identity               = CommonHelpers::generateCramp("user");
        $verify                 = CommonHelpers::code_ref(6);


        $state                  = States::where('id',$state)->value('name');
        $post                   = new User();
        $post->role             = "Artisan";
        $post->full_name        = $fullname;
        $post->email            = $email;
        $post->password         = bcrypt($password);
        $post->phone            = $phone;
        $post->date_of_birth    = $dob ?? null;
        $post->street_address   = $street;
        $post->city             = $state_area ?? null;
        $post->state            = $state ?? null;
        $post->country          = $request->country;
        $post->work_experience  = $request->WorkExperience;
        $post->business_category = $check_[0]->title;
        $post->category_id      =  $check_[0]->id;

        $post->website_address  = $request->WebsiteAddress;
        $post->service_description = $request->ServiceDescription;
        $post->identity         = $identity;
        $post->verify_code      = $verify;

        $post->save();

        if(!empty($email)){
            $details    =   [
                'name'=>$fullname,
                'email'=>$email,
                'link' => url('verify-account/'.$identity.'/'.$verify)
            ];
            Mail::to($email)->send(new WelcomeToSwiftedgeVA($details));
        }


        return redirect()->route('login')->with('response', 'Your registration was successful, please login');
    }


    /**
     * @return Application|Factory|View
     */
    public function getLogin(){

        /** SEO */
        $seo = CommonHelpers::seoTemplate("Login");
        /** END OF SEO */

        $listed = [];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }

        return view('home.login',$listed);

    }





    /**
     * @param Request $request
     * @return Collection
     */
    public function getStates(Request $request): Collection
    {
        if($request->segment(2)){
            return States::where('country_id',$request->segment(2))->get();

        }else {
            return  States::all();
        }

    }



    /**
     * @param Request $request
     * @return Collection
     */
    public function getStatesAreas(Request $request): Collection
    {
        if($request->segment(2)){
            return StateAreas::where('state_id',$request->segment(2))->get();

        }else {
            return  StateAreas::all();
        }

    }



    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function ChangeUserPassword(Request $request): RedirectResponse
    {
        $user = User::find(Auth::user()->id);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withInput()->with('response', "The current password is incorrect");
        }

        $validator = Validator::make($request->all(), [
            'new_password' => ['nullable', 'string'],
            'confirm_new_password' => ['nullable', 'required_with:new_password', 'same:new_password']
        ]);

        if ($validator->fails()) {
            return back()->withInput()->with('response', "Password didn't match or your current password is wrong");
        }

        $password                   =   $request->new_password;
        $encrypt_pass               =   bcrypt($password);
        $Users                      =   User::find(Auth()->user()->id);
        $Users->password            =   $encrypt_pass;
        $Users->save();

        return back()->withInput()->with('response','Password Updated Successfully');
    }


    /**
     * @return Application|Factory|View
     */
    public function terms(){

        /** SEO */
        $seo = CommonHelpers::seoTemplate("Login");
        /** END OF SEO */

        $listed = [];
        if (App::environment('production')) {
            $listed = array_merge($listed,$seo);
        }
        return view('home.terms', $listed);

    }

    /**
     * @return Application|Factory|View
     */
    public function Tailoring(){
        return view('home.tailoring');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function SubmitReviews(Request $request): RedirectResponse
    {
        if($request->rating_pro):
           $data = CommonHelpers::StoreReviews($request);
            if($data->id){
                return redirect()->back()->with('response','Rating was successful');
            }
        endif;
        return redirect()->back()->with('error','something went wrong');
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function SubmitContactCandidate(Request $request): RedirectResponse
    {
        $message = "Thank you for your interest in hiring ".$request->full_name." Kindly submit your job vacancy in order to hire the candidate";
        return redirect()->back()->with('response',$message);
    }

    /**
     * @return RedirectResponse
     */
    public function SubmitContactPhoneCandidate(): RedirectResponse
    {
        $message = "To view this candidate's phone number, kindly submit your job vacancy.";
        return redirect()->back()->with('response',$message);
    }


    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function storeContactus(Request $request){

        $validator = Validator::make($request->all(), [
            'name_contact'                        => 'required|string|max:255',
            'message_contact'                     => 'required|string|max:255',
            'phone_contact'                       => 'required|string|max:255',
            'email_contact'                       => 'required|string|email|max:255',
            'verify_contact'                      => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/contact-us')
                ->withErrors($validator)
                ->withInput();
        }

        $post = new ContactUs();
        $post->firstname                            = $request->name_contact;
        $post->email                                = $request->email_contact;
        $post->phone                                = $request->phone_contact;
        $post->message                              = $request->message;

        $post->save();
        return back()->withInput()->with('response','Thanks for messaging us, we will contact you soon');

    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function VerifyUserAccount(Request $request){

        $verify_code = $request->segment(3);

        $check = User::where('verify_code', $verify_code)->where('status',0)->get();
        if($check->count() > 0){
            $data = User::find($check[0]->id);

            if($check[0]->role === "Employer"){
                $data->status = 1;
            }
            $data->is_verified = 1;
            $data->update();

            return redirect('/account/login')->with('response','account verified');

        }else {
            return back()->withInput()->with('responses','Invalid code');
        }

    }


}
