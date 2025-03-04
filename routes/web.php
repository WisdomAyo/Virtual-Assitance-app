<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::namespace('App\Http\Controllers')->group(function () {

    Route::get('/clear-cache', function() {
        return "done";
    });

    Route::group(['middleware' => ['web','auth.users'], 'prefix' => 'gateway'], function ()
    {
        Route::get('/dashboard', ['uses' => 'Auth\AuthController@redirectDashboard', 'as' => 'gateway.redirect']);
    });

    /**
     * USER DASHBOARD ROUTES
     */
    Route::group(['middleware' => ['web','auth.users'], 'prefix' => 'user'], function ()
    {
        Route::get('/dashboard', ['uses' => 'User\UserController@getAdminIndex', 'as' => 'user.home']);
        Route::get('/jobs', ['uses' => 'User\UserController@getJobs', 'as' => 'user.job']);
        Route::get('/services', ['uses' => 'User\UserController@getMyServices', 'as' => 'user.service']);
        Route::get('/services/add', ['uses' => 'User\UserController@addServices', 'as' => 'user.service.add']);
        Route::get('/services/{any}', ['uses' => 'User\UserController@getEditServices', 'as' => 'user.service.edit']);
        Route::post('/services/add/save', ['uses' => 'User\UserController@saveServices', 'as' => 'user.service.save']);
        Route::post('/services/update', ['uses' => 'User\UserController@updateService', 'as' => 'user.service.update']);
        Route::get('/messages', ['uses' => 'User\UserController@getMessages', 'as' => 'user.message']);
        Route::get('/messages/{id}', ['uses' => 'User\UserController@chatMessage2', 'as' => 'user.user.message2']);
        Route::get('/profile', ['uses' => 'User\UserController@getProfile', 'as' => 'user.profile']);
        Route::get('/profile/change-password', ['uses' => 'User\UserController@getChangePassword', 'as' => 'user.change.password']);
        Route::post('/profile/password/update', ['uses' => 'Home\HomeController@ChangeUserPassword', 'as' => 'user.settings.password.update']);
        Route::get('/profile/education/add', ['uses' => 'User\UserController@getEducation', 'as' => 'user.profile.education']);
        Route::get('/profile/experience/add', ['uses' => 'User\UserController@getExperience', 'as' => 'user.profile.experience']);
        Route::get('/profile/awards/add', ['uses' => 'User\UserController@getAwards', 'as' => 'user.profile.awards']);
        Route::get('/profile/gallery/add', ['uses' => 'User\UserController@getGallery', 'as' => 'user.profile.gallery']);
        Route::post('/profile/gallery/save', ['uses' => 'User\UserController@UpdateGalleryPhoto', 'as' => 'user.profile.gallery.save']);

        Route::post('/profile/update/save', ['uses' => 'User\UserController@UpdateGalleryPhoto', 'as' => 'user.profile.update.save']);
        Route::post('/profile/basic/update/save', ['uses' => 'User\UserController@updateProfile', 'as' => 'user.basic.profile.update.save']);
        Route::post('/profile/education/experience/awards/update/save', ['uses' => 'User\UserController@saveProfileUpdates', 'as' => 'user.additional.profile.update.save']);

        Route::get('/profile/photo/add', ['uses' => 'User\UserController@getProfilePhoto', 'as' => 'user.profile.photo']);
    });


    /**
     * EMPLOYERS DASHBOARD ROUTES
     */
    Route::group(['middleware' => ['web','auth.users'], 'prefix' => 'employer'], function ()
    {
        Route::get('/dashboard', ['uses' => 'Employer\EmployerController@getAdminIndex', 'as' => 'employer.home']);
        Route::get('/jobs', ['uses' => 'Employer\EmployerController@getJobs', 'as' => 'employer.job']);
        Route::get('jobs/request', ['uses' => 'Employer\EmployerController@getAddJobs', 'as' => 'employer.job.request']);
        Route::get('jobs/request/{id}', ['uses' => 'Employer\EmployerController@editJobs', 'as' => 'employer.job.request.edit']);
        Route::post('jobs/request/save', ['uses' => 'Employer\EmployerController@createJob', 'as' => 'employer.job.save']);
        Route::post('jobs/request/edit/save', ['uses' => 'Employer\EmployerController@EditJob', 'as' => 'employer.job.edit.save']);
        Route::get('/requests', ['uses' => 'Employer\EmployerController@getRequests', 'as' => 'employer.requests']);
        Route::get('/applicant/requests', ['uses' => 'Employer\EmployerController@allApplicant', 'as' => 'employer.applicant.requests']);
        Route::get('/messages', ['uses' => 'Employer\EmployerController@getMessages', 'as' => 'employer.message']);
        Route::get('/messages/{id}', ['uses' => 'Employer\EmployerController@chatMessage2', 'as' => 'employer.user.message2']);
        Route::get('/profile', ['uses' => 'Employer\EmployerController@getProfile', 'as' => 'employer.profile']);
        Route::get('/profile/change-password', ['uses' => 'Employer\EmployerController@getChangePassword', 'as' => 'employer.change.password']);
        Route::post('/profile/password/update', ['uses' => 'Employer\EmployerController@ChangeUserPassword', 'as' => 'employer.settings.password.update']);

        Route::get('/profile/photo/add', ['uses' => 'Employer\EmployerController@getProfilePhoto', 'as' => 'employer.profile.photo']);
    });

    /**
     * GENERAL ACTION ROUTES
     */
    Route::group(['middleware' => ['web','auth.users'], 'prefix' => 'actions'], function ()
    {
        Route::post('delete', ['uses' => 'Admin\AdminController@deletingExe', 'as' => 'delete.exe']);
        Route::post('updating/user/status', ['uses' => 'Admin\AdminController@userStatusUpdate', 'as' => 'user.exe.status']);
        Route::post('profile/photo/save', ['uses' => 'Admin\AdminController@UpdateProfilePhoto', 'as' => 'profile.dp.save']);
        Route::post('message/send', ['uses' => 'Admin\AdminController@sendMessage', 'as' => 'message.send.save']);
    });

    /**
     * ADMIN DASHBOARD ROUTES
     */
    Route::group(['middleware' => ['web','auth.users'], 'prefix' => 'admin/secure'], function ()
    {

        Route::get('/dashboard', ['uses' => 'Admin\AdminController@getAdminIndex', 'as' => 'admin.home']);

        Route::get('/category/add', ['uses' => 'Admin\AdminController@createBusinessCategory', 'as' => 'admin.add.business.cat']);
        Route::post('/category/add/save', ['uses' => 'Admin\AdminController@saveBusinessCategory', 'as' => 'admin.add.business.cat.save']);

        Route::get('/location/add', ['uses' => 'Admin\AdminController@createLocation', 'as' => 'admin.add.cat']);
        Route::post('/location/add/save', ['uses' => 'Admin\AdminController@saveLocation', 'as' => 'admin.add.location.save']);

        Route::get('/request/merging', ['uses' => 'Admin\AdminController@getMergingIndex', 'as' => 'admin.request.merge']);
        Route::post('/request/merging/save', ['uses' => 'Admin\AdminController@saveMergingRequest', 'as' => 'admin.request.merge.save']);

        Route::get('/user/management', ['uses' => 'Admin\AdminController@userManagement', 'as' => 'admin.user.mgt']);
        Route::get('/user/management/create', ['uses' => 'Admin\AdminController@userManagementCreate', 'as' => 'admin.user.mgt.create']);
        Route::post('/user/management/create/save', ['uses' => 'Admin\AdminController@registerAsArtisan', 'as' => 'admin.register.artisan']);

        Route::get('/employer/jobs', ['uses' => 'Admin\AdminController@getJobs', 'as' => 'employer.job.index']);
        Route::post('/employer/jobs/updated', ['uses' => 'Admin\AdminController@ApproveEmployerJobs', 'as' => 'employer.job.index.updated']);

        Route::get('/employer/management', ['uses' => 'Admin\AdminController@employerManagement', 'as' => 'admin.employer.mgt']);
        Route::get('/employer/management/create', ['uses' => 'Admin\AdminController@employerManagementCreate', 'as' => 'admin.employer.mgt.create']);
        Route::post('/employer/management/create/save', ['uses' => 'Admin\AdminController@createEmployerAccount', 'as' => 'admin.employer.mgt.save']);
        Route::post('/user/management/update', ['uses' => 'Admin\AdminController@updateAvailability', 'as' => 'admin.user.mgt.update']);
        Route::get('/user/services', ['uses' => 'Admin\AdminController@businessServices', 'as' => 'admin.user.business.category.all']);
        Route::get('/user/service/category', ['uses' => 'Admin\AdminController@artisanServices', 'as' => 'admin.user.artisan.services']);
        Route::get('/user/business/category', ['uses' => 'Admin\AdminController@businessServices', 'as' => 'admin.user.business.category']);
        Route::get('/user/applicant', ['uses' => 'Admin\AdminController@allApplicant', 'as' => 'admin.user.business.applicant']);
        Route::get('/user/subscription', ['uses' => 'Admin\AdminController@subscriptions', 'as' => 'admin.user.subscriptions']);
        Route::get('/user/locations', ['uses' => 'Admin\AdminController@locations', 'as' => 'admin.user.locations']);
        Route::get('/user/locations/{id}', ['uses' => 'Admin\AdminController@getLocations', 'as' => 'admin.user.locations.get']);
        Route::get('/user/messages', ['uses' => 'Admin\AdminController@chatMessage', 'as' => 'admin.user.message']);
        Route::get('/user/messages/{id}', ['uses' => 'Admin\AdminController@chatMessage2', 'as' => 'admin.user.message2']);
        Route::get('/user/change-password', ['uses' => 'Admin\AdminController@changePassword', 'as' => 'admin.user.password']);
        Route::get('/user/profile', ['uses' => 'Admin\AdminController@profile', 'as' => 'admin.user.profile']);
        Route::post('/login', ['uses'=>'Admin\AdminController@postSignIn', 'as' => 'login.admin']);

        Route::get('/profile/photo/add', ['uses' => 'Admin\AdminController@getProfilePhoto', 'as' => 'admin.profile.photo']);
    });


    /**
     * HOMEPAGE ROUTES
     */

    Route::any('/', ['uses' => 'Home\HomeController@getIndex', 'as' => 'index.home']);
    Route::any('about', ['uses' => 'Home\HomeController@getAboutUs', 'as' => 'index.about']);
    Route::any('contact-us', ['uses' => 'Home\HomeController@getContactus', 'as' => 'index.contact.us']);
    Route::any('faqs', ['uses' => 'Home\HomeController@getFaqs', 'as' => 'index.faqs.us']);
    Route::any('contact-us-now', ['uses' => 'Home\HomeController@storeContactus', 'as' =>'contact.us.now']); /* this is post */
    Route::any('jobs', ['uses' => 'Home\HomeController@allJobs', 'as' => 'index.job.list']);
    Route::any('freelancers', ['uses' => 'Home\HomeController@allFreelancers', 'as' => 'index.freelancers.list']);
    Route::get('state/{state}/areas', ['uses' => 'Home\HomeController@getStates', 'as' => 'index.job.list.location']);
    Route::any('services/all', ['uses' => 'Home\HomeController@allServices', 'as' => 'index.services.list']);
    Route::any('service-category/{url}', ['uses' => 'Home\HomeController@allServicesByURL', 'as' => 'index.services.list.category']);
    Route::any('search-result', ['uses' => 'Home\HomeController@getSearchResult', 'as' =>'search.now']);

    Route::get('staffing/solutions', ['uses' => 'Home\HomeController@getBlueCollarStaffing', 'as' => 'index.staffing']);
    Route::get('staffing/solutions/employer', ['uses' => 'Home\HomeController@getEmployerForm', 'as' => 'index.staffing.employer']);
    Route::post('staffing/solutions/employer/save', ['uses' => 'Home\HomeController@saveEmployerForm', 'as' => 'index.staffing.employer.save']);

    Route::get('staffing/solutions/job/application', ['uses' => 'Home\HomeController@getJobApplicationForm', 'as' => 'index.staffing.job']);
    Route::post('staffing/solutions/job/application/save', ['uses' => 'Home\HomeController@saveJobApplication', 'as' => 'index.staffing.job.save']);

    Route::get('register', ['uses' => 'Home\HomeController@register', 'as' => 'index.register']);
    Route::post('register/step/one/save', ['uses' => 'Home\HomeController@registerAsArtisan2', 'as' => 'index.register.artisan.one']);
    Route::post('register/step/two/save', ['uses' => 'Home\HomeController@saveArtisan', 'as' => 'index.register.artisan.two']);

    Route::get('country/{state}/states', ['uses' => 'Home\HomeController@getStates', 'as' => 'index.job.list.location.country']);
    Route::get('state/{state}/areas', ['uses' => 'Home\HomeController@getStatesAreas', 'as' => 'index.job.list.location']);


    Route::get('account/login',  ['uses' => 'Home\HomeController@getLogin', 'as' =>'login']);
    Route::post('account/login/now', ['uses' => 'Auth\AuthController@postSignIn', 'as' =>'login.in.user']);
    Route::get('account/logout', ['uses' => 'Auth\AuthController@getLogOut', 'as' =>'account.logout']);
    Route::get('account/password/reset', ['uses' => 'Auth\AuthController@forgetPassword', 'as' =>'account.forget.pass']);
    Route::post('account/forget-password',  ['uses' => 'Auth\AuthController@verifyingEmailAccountReset', 'as' =>'forget.password.reset']);
    Route::get('password/verify', ['uses' => 'Auth\AuthController@VerifyUserAccountPasswordResetView','as' => 'password.verify']);
    Route::post('password/verify/save', ['uses' => 'Auth\AuthController@VerifyUserAccountPasswordReset', 'as' =>'password.verify.save']);

    Route::any('terms-and-conditions', ['uses' => 'Home\HomeController@terms', 'as' =>'index.terms']);
    Route::any('tailoring', ['uses' => 'Home\HomeController@Tailoring', 'as' =>'index.tailoring']);


    Route::any('category/job/{url}', ['uses' => 'Home\HomeController@getCategoryJobs', 'as' => 'index.category.job.list']);
    Route::any('service/{url}', ['uses' => 'Home\HomeController@ServicesByURL', 'as' => 'index.job.list.per']);
    Route::get('service/{url}/apply', ['uses' => 'Home\HomeController@getThisJobApplicationForm', 'as' => 'index.job.apply']);
    Route::post('service/{url}/apply/save', ['uses' => 'Home\HomeController@saveJobApplication', 'as' => 'index.job.apply.save']);
    Route::any('user/{url}', ['uses' => 'Home\HomeController@getUserDetails', 'as' => 'index.user.view']);
    Route::post('user/review/save', ['uses' => 'Home\HomeController@SubmitReviews', 'as' => 'index.user.review.save']);
    Route::post('user/contact/request', ['uses' => 'Home\HomeController@SubmitContactCandidate', 'as' => 'index.user.contact.request']);
    Route::post('user/contact/phone/request', ['uses' => 'Home\HomeController@SubmitContactPhoneCandidate', 'as' => 'index.user.contact.phone.request']);



    Route::get('verify-account',  ['uses' => 'Home\HomeController@getVerified', 'as' => 'reg.verify']);
    Route::get('verify-account/{slug}', ['uses' => 'Home\HomeController@getVerified', 'as' => 'reg.verify22']);
    Route::get('verify-account/{slug}/{slug2}',  ['uses' => 'Home\HomeController@VerifyUserAccount', 'as' => 'reg.verify.2']);


});
