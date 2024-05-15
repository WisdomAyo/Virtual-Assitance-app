<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\Http\Controllers')->group(function () {

    Route::get('/',  ['uses' => 'API\ApiController@Welcome', 'as' => 'user.api.home']);

    Route::prefix("auth")->group(function () {
        Route::post('/login', ['uses' => 'API\AuthController@login', 'as' => 'user.api.login']);
        Route::post('/logout', ['uses' => 'API\AuthController@logout', 'as' => 'user.api.logout']);
        Route::post('/refresh', ['uses' => 'API\AuthController@refresh', 'as' => 'user.api.refresh']);
        Route::post('/forget-password', ['uses' => 'API\AuthController@ForgetPassword', 'as' => 'user.api.forget']);
        Route::post('/change-password', ['uses' => 'API\AuthController@ChangeUserPassword', 'as' => 'user.api.change']);

        Route::group(['middleware' => ['jwt.verify']], function () {
            Route::get('/update-profile', ['uses' => 'API\UserController@userProfile', 'as' => 'user.api.profile']);
        });
    });

    Route::middleware('jwt.verify')->group(function () {

        Route::prefix("profile")->group(function () {
            Route::post('/', ['uses' => 'API\UserController@Profile', 'as' => 'user.api.profile.home']);
            Route::post('edit', ['uses' => 'API\UserController@UpdateProfile', 'as' => 'user.api.profile.edit']);
            Route::post('update/dp', ['uses' => 'API\UserController@UpdateProfilePhoto', 'as' => 'user.api.profile.dp']);
            Route::post('update/gallery', ['uses' => 'API\UserController@UpdateGalleryPhoto', 'as' => 'user.api.gallery.images']);
            Route::post('gallery', ['uses' => 'API\UserController@getGallery', 'as' => 'user.api.gallery.user']);
            Route::post('/sections', ['uses' => 'API\UserController@addProfileSections', 'as' => 'user.api.profile.sections']);

        });

        Route::prefix("artisan")->group(function () {
            Route::post('/create', ['uses' => 'API\UserController@registerArtisan', 'as' => 'user.api.artisan.create']);
            Route::get('/all', ['uses' => 'API\UserController@allUsers', 'as' => 'user.api.artisan.all']);
            Route::post('/artisan-to-client', ['uses' => 'API\UserController@saveMergingRequest', 'as' => 'user.api.artisan.client']);
            Route::post('/delete', ['uses' => 'API\UserController@deleteUser', 'as' => 'user.api.artisan.delete']);

            Route::prefix("category")->group(function () {
                Route::post('/create', ['uses' => 'API\UserController@CreateCategory', 'as' => 'user.api.category.create']);
                Route::get('/all', ['uses' => 'API\UserController@getArtisanCategory', 'as' => 'user.api.category.all']);
                Route::post('/delete', ['uses' => 'API\UserController@deleteCategory', 'as' => 'user.api.category.delete']);

            });

        });

        Route::prefix("search")->group(function () {
            Route::post('/', ['uses' => 'API\UserController@search', 'as' => 'user.api.search.services']);

        });

        Route::prefix("post")->group(function () {
            Route::post('/create', ['uses' => 'API\PostController@create', 'as' => 'user.api.post.create']);
            Route::get('/all', ['uses' => 'API\PostController@allPost', 'as' => 'user.api.post.all']);
            Route::post('/by-user', ['uses' => 'API\PostController@PostByUser', 'as' => 'user.api.post.user']);
            Route::post('/delete', ['uses' => 'API\PostController@delete', 'as' => 'user.api.post.delete']);

        });

        Route::prefix("review")->group(function () {
            Route::get('all', ['uses' => 'API\UserController@AllReviews', 'as' => 'user.api.reviews.all']);
            Route::post('create', ['uses' => 'API\UserController@CreateReview', 'as' => 'user.api.reviews.create']);
            Route::post('by-user', ['uses' => 'API\UserController@AllReviewsByUser', 'as' => 'user.api.reviews.by.user']);
            Route::post('delete', ['uses' => 'API\UserController@DeleteReview', 'as' => 'user.api.reviews.delete']);
        });

        Route::prefix("services")->group(function () {
            Route::get('/all', ['uses' => 'API\UserController@AllServices', 'as' => 'user.api.services.all']);
            Route::post('/create', ['uses' => 'API\UserController@CreateServices', 'as' => 'user.api.services.create']);
            Route::post('/delete', ['uses' => 'API\UserController@DeleteServices', 'as' => 'user.api.services.delete']);
        });

        Route::prefix("artisan-request")->group(function () {
            Route::get('/all', ['uses' => 'API\UserController@AllServices', 'as' => 'user.api.artisan.request.all']);
            Route::post('/create', ['uses' => 'API\UserController@CreateServices', 'as' => 'user.api.artisan.request.create']);
            Route::post('/delete', ['uses' => 'API\UserController@DeleteServices', 'as' => 'user.api.artisan.request.delete']);
        });

        Route::prefix("job-request")->group(function () {
            Route::get('/all', ['uses' => 'API\UserController@AllJobRequest', 'as' => 'user.api.job.request.all']);
            Route::post('/create', ['uses' => 'API\UserController@CreateJobPost', 'as' => 'user.api.job.request.create']);
            Route::get('/delete', ['uses' => 'API\UserController@DeleteJobRequest', 'as' => 'user.api.job.request.delete']);
        });

        Route::prefix("location")->group(function () {
            Route::get('/all-state', ['uses' => 'API\UserController@allState', 'as' => 'user.api.location.state']);
            Route::get('/all-state-area', ['uses' => 'API\UserController@allStateArea', 'as' => 'user.api.location.state.area']);
            Route::get('/by-state-area', ['uses' => 'API\UserController@byStateArea', 'as' => 'user.api.location.all']);
            Route::post('/create-state', ['uses' => 'API\UserController@createState', 'as' => 'user.api.location.create']);
            Route::post('/create-state-area', ['uses' => 'API\UserController@createStateArea', 'as' => 'user.api.location.state.area.create']);

        });

    });
});

