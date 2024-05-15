<?php

namespace App\Http\Controllers\API;

use App\Helpers\CommonHelpers;
use App\Http\Controllers\API\AppBaseController;
use App\Mail\WelcomeToSwiftedgeVA;
use App\Models\ArtisanGallery;
use App\Models\ArtisanServices;
use App\Models\AwardsAndCertificates;
use App\Models\BusinessCategory;
use App\Models\CustomerRating;
use App\Models\Education;
use App\Models\EmployerJobs;
use App\Models\Experience;
use App\Models\JobApplications;
use App\Models\JobMerging;
use App\Models\Locals;
use App\Models\States;
use App\Traits\ResponseCode;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController
{

    use ResponseCode;


    public function allUsers(): JsonResponse
    {
        $users = User::where('role',"Artisan")->paginate(10);
        return $this->sendSuccess($users);
    }




    public function Profile(Request $request): JsonResponse
    {
        $users = User::where("id", $request->user_id)->get();
        return $this->sendSuccess($users);
    }



    public function updateProfile(Request $request): JsonResponse
    {

        $post = User::find($request->user_id);
        $post->compensation_type = $request->compensation_type;
        $post->service_description = $request->service_description;
        $post->website_address = $request->website_address;
        $post->phone = $request->phone;
        $post->date_of_birth = $request->date_of_birth;
        $post->business_name = $request->business_name;
        $post->street_address = $request->street_address;
        $post->job_preference = $request->job_preference;
        $post->min_amount = $request->min_amount;
        $post->max_amount = $request->max_amount;
        $post->city = $request->city;
        $post->state = $request->state;
        $post->update();

        return $this->sendSuccess($post);


    }


    public function allUsersByCategory(Request $request): JsonResponse
    {
        $users = User::where('Role', $request->type)->get();
        return $this->sendSuccess($users);
    }


    public function deleteUser(Request $request): JsonResponse
    {
        $user = User::find($request->id);
        $user->delete();
        return $this->sendSuccess($user,"user deleted");

    }


    private function checkingifHasEmail($email) {

        $parent = User::select('id')->where('email', $email)->get();
        foreach ($parent as $row) {
            return $row['id'];
        }
        return $this->sendSuccess($parent);
    }


    public function RatingByArtisan(Request $request): JsonResponse
    {
        $id = $request['id'];
        $rating = CustomerRating::where('artisanID', $id)->get();
        return $this->sendSuccess($rating);

    }

    public function CreateRating(Request $request): JsonResponse
    {
        $data = CommonHelpers::StoreReviews($request);
        return $this->sendSuccess($data);

    }

    public function CreateReview(Request $request): JsonResponse
    {
        try{
            $data = CommonHelpers::StoreReviews($request);
            return $this->sendSuccess($data);
        } catch (\Exception $exception) {

            return $this->errorResponse($exception->getMessage(), "error occurred");
        }


    }

    public function AllReviews(): JsonResponse
    {
        $reviews = CustomerRating::all();
        return $this->sendSuccess($reviews);

    }

    public function AllReviewsByUser(Request  $request): JsonResponse
    {
        $reviews = CustomerRating::where('user_id',$request->identity)->get();
        return $this->sendSuccess($reviews);

    }

    public function DeleteReview(Request $request){

        $data = CustomerRating::find($request->id);
        $data->delete();

        return $this->sendSuccess($data);
    }


    public function AllServices(): JsonResponse
    {
        $data =  ArtisanServices::all();
        return $this->sendSuccess($data);
    }


    public function CreateServices(Request $request){


    }

    public function addProfileSections(Request $request): JsonResponse
    {

        $user_id = $request->user_id;
        switch ($request->type) {
            case  "awards" :
                $post = new AwardsAndCertificates;
                $post->user_id = $user_id;
                $post->title = $request->title;
                $post->purpose = $request->purpose;
                $post->desc = $request->service_description;
                $post->year = $request->year;
                $post->save();
                break;
            case  "education" :
                $post = new Education;
                $post->user_id =$user_id;
                $post->title = $request->title;
                $post->purpose = $request->course_name;
                $post->desc = $request->service_description;
                $post->year = $request->year;
                $post->save();
                break;
            case  "experience" :
                $post = new Experience;
                $post->user_id = $user_id;
                $post->title = $request->title;
                $post->purpose = $request->role;
                $post->desc = $request->service_description;
                $post->year = $request->start_year. '-'.$request->end_year;
                $post->save();
                break;
            default:
                return $this->errorResponse(null, "no operations");


        }

        return $this->sendSuccess($post);
    }


    public function DeleteServices(Request $request): JsonResponse
    {
        $data = ArtisanServices::find($request->id);
        $data->delete();

        return $this->sendSuccess($data);
    }


    public function AllJobRequest(): JsonResponse
    {
        $data =  JobApplications::all();
        return $this->sendSuccess($data);

    }


    public function getBusinessCategory(): JsonResponse
    {
        $cat = BusinessCategory::all();
        return $this->sendSuccess($cat);

    }


    public function search(Request $request): JsonResponse {

        if(!empty($request->keyword) && empty($request->city) && empty($request->job_category)){
            $results = EmployerJobs::select('*')->where('job_title','LIKE','%'.$request->keyword.'%')->where('status', 1)->paginate(40);

        }else{
            $results = EmployerJobs::select('*')->where('job_title','LIKE','%'.$request->keyword.'%')
                ->where('state','LIKE','%'.$request->city.'%')->where('business_category_name','LIKE','%'.$request->job_category.'%')->where('status', 1)->paginate(40);
        }

        return $this->sendSuccess($results);

    }


    public function DeleteJobRequest(Request $request): JsonResponse
    {

        $data = JobApplications::find($request->id);
        $data->delete();

        return $this->sendSuccess($data);
    }


    public function ArtisanToClient(Request $request): JsonResponse
    {

        $rating = JobMerging::where('user_id', $request->artisan_id)->get();
        return $this->sendSuccess($rating);

    }

    public function ClientToArtisan(Request $request): JsonResponse
    {
        $rating = JobMerging::where('employer_id', $request->user_id)->get();
        return $this->sendSuccess($rating);

    }

    public function getArtisanCategory(Request $request): JsonResponse
    {
        $data = BusinessCategory::all();
        return $this->sendSuccess($data);
    }

    public function CreateCategory(Request $request): JsonResponse
    {

        $post = new BusinessCategory;
        $post->title = $request->cat_name;
        $post->url =  CommonHelpers::create_unique_slug($request->cat_name,"business_categories","url",NULL,NULL);
        $post->save();
        return $this->sendSuccess($post);

    }

    public function deleteCategory(Request $request): JsonResponse
    {
        $user = BusinessCategory::find($request->id);
        $user->delete();
        return $this->sendSuccess($user,"Category deleted");

    }

    public function allState(): JsonResponse {
        $data = States::all();
        return $this->sendSuccess($data);

    }

    public function allStateArea() : JsonResponse {
        $data = Locals::all();
        return $this->sendSuccess($data);
    }

    public function byStateArea(Request $request) : JsonResponse {
        $data = Locals::where('state_id', $request->state_id)->get();
        return $this->sendSuccess($data);
    }

    public function createState(Request $request) : JsonResponse {
        $check = States::where('name', $request->cat_name)->count();

        if($check > 0){
            return $this->errorResponse(null,"Already exist");
        }
        $post = new States;
        $post->name = $request->cat_name;
        return $this->sendSuccess($post);
    }

    public function createStateArea(Request $request) : JsonResponse {
        $check = Locals::where('local_name', $request->cat_name)->count();
        if($check > 0){
            return $this->errorResponse(null,"Already exist");
        }
        $post = new Locals;
        $post->state_id =  $request->state_id;
        $post->local_name = $request->cat_name;
        return $this->sendSuccess($post);
    }



    public function registerArtisan(Request $request) : JsonResponse {

        if(!empty( $request["email"])){
            $check = User::where('email', $request["email"])->count();
            if($check > 0){
                return $this->errorResponse(null,"Email Address already exist");
            }
        }
        if(!empty($request["phone"])){

            $check = User::where('phone', $request["phone"])->count();
            if($check > 0){
                return $this->errorResponse(null,"Phone Number already exist");
            }
        }


        $identity               = CommonHelpers::generateCramp("user");
        $verify                 = CommonHelpers::code_ref(6);

        $state                  = States::where('id',$request["state_id"])->value('name');
        $post                   = new User();
        $post->role             = "Artisan";
        $post->full_name        = $request["fullname"];
        $post->email            = $request["email"];
        $post->password         = bcrypt($request["password"]);
        $post->phone            = $request["phone"];
        $post->date_of_birth    = $request["DateOfBirth"];
        $post->street_address   = $request["StreetAddress"];
        $post->city             = $request["state_area"];
        $post->state            = $state;
        $post->work_experience  = $request->WorkExperience;
        $post->business_category = $request->BusinessCategory;
        $post->website_address  = $request->WebsiteAddress;
        $post->service_description = $request->ServiceDescription;
        $post->identity         = $identity;
        $post->verify_code      = $verify;

        $post->save();

        if(!empty($step_one["email"])){
            $details    =   [
                'name'=>$step_one["fullname"],
                'email'=>$step_one["email"],
                'link' => url('verify-account/'.$identity.'/'.$verify)
            ];
            Mail::to($step_one["email"])->send(new WelcomeToSwiftedgeVA($details));
        }

        return $this->sendSuccess($post);
    }


    public function UpdateProfilePhoto(Request $request): JsonResponse
    {

        $user_id = $request->user_id;

        $image = $request->file('picture');
        $filename = time().".".$image->getClientOriginalExtension();
        // Create directory if it does not exist
        if(!is_dir("profile/photo/".$user_id ."/")) {
            $path = "profile/photo/". $user_id ."/";
            File::makeDirectory(public_path().'/'.$path,0777,true);
        }

        $location = public_path('profile/photo/'. $user_id .'/');
        $image->move($location, $filename);

        // update account information
        $post = User::find($user_id);
        $post->profile_image = $filename;
        $post->save();

        return $this->sendSuccess($post);
    }


    public function UpdateGalleryPhoto(Request $request): JsonResponse
    {

        $user_id = $request->user_id;
        $files = $request->file('post_image1');

        if (!is_dir("profile/gallery/" . $user_id . "/")) {
            $path = "profile/gallery/" . $user_id . "/";
            File::makeDirectory(public_path() . '/' . $path, 0777, true);
        }

        foreach ($files as $file) {
            $filename = "SwiftedgeVA-" . CommonHelpers::generateCramp("post") . "." . $file->getClientOriginalExtension();
            // Create directory if it does not exist
            $location = public_path('profile/gallery/' . $user_id . '/');

            $file->move($location, $filename);

            // update account information
            $post = new ArtisanGallery();
            $post->images = $filename;
            $post->user_id = $user_id;
            $post->save();
        }
        $artisan_gallery = ArtisanGallery::where('user_id', $user_id)->get();
        return $this->sendSuccess($artisan_gallery);

    }

    public function getGallery(Request $request): JsonResponse
    {

        $artisan_gallery = ArtisanGallery::where('user_id', $request->user_id)->get();
        return $this->sendSuccess($artisan_gallery);
    }


    public function saveMergingRequest(Request $request): JsonResponse
    {

        /**
         * Check if Job is already Assign to Candidate
         */
        $job_id = $request->job_id;
        $candidate_id = $request->candidate_id;
        $employer_id = EmployerJobs::where('id', $job_id)->value('user_id');

        $check = JobMerging::where('job_id', $job_id)->where('user_id',$candidate_id)->count();

        if($check > 0){
            return $this->errorResponse(null,"Job can't be Merged the second time.");
        }

        $post = new JobMerging();
        $post->job_id =  $job_id;
        $post->user_id = $candidate_id;
        $post->employer_id = $employer_id;
        $post->status = 2;
        $post->save();
        return $this->sendSuccess($post);
    }



}
