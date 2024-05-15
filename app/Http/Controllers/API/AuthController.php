<?php

namespace App\Http\Controllers\API;

use App\Helpers\CommonHelpers;
use App\Http\Controllers\Controller;
use App\Mail\ResetYourPassword;
use App\Traits\ResponseCode;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    use ResponseCode;
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */

    /**
     * Get a JWT via given credentials.
     *
     * @return JsonResponse
     */
    public function login(Request $request){

        if($request->email != null){
            $credentials = $request->only('email', 'password');
        }else {
            $credentials = $request->only('phone', 'password');
        }


        try
        {
            $myTTL = Carbon::now()->addDays(2)->timestamp;
            JWTAuth::factory()->setTTL($myTTL);

            if(JWTAuth::attempt($credentials)) // For Logging
            {
                 Log::info("$ token = JWTAuth::attempt $ credentials Result: TRUE");
            }else{
                 Log::info("$ token = JWTAuth::attempt $ credentials Result: FALSE");
            }

            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials))
            {
                return $this->errorResponse($credentials,"invalid_credentials");

            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        //Log::info("Generated token is: ".json_encode(compact('token')));
        // all good so return the token
        if($request->email != null){
            $user_info = User::where('email', $request->email)->first();
        }else {
            $user_info = User::where('phone', $request->email)->first();
        }

        $token_new  = ["token" => $token,"expirer_in" => $myTTL];
        $data = ["user" =>$user_info->toArray(), "token_data"=>$token_new];
        return $this->sendSuccess($data,"Login was successful");
    }

    /**
     * Register a User.
     *
     * @return JsonResponse
     */


    /**
     * Log the user out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout() {
        auth()->logout();
        return $this->sendSuccess(null, "User successfully signed out");
    }

    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function userProfile() {
        return response()->json(auth()->user());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return JsonResponse
     */
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }


    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function ForgetPassword(Request $request) : JsonResponse {

        $email = $request->email;
        $check = User::where('email', $email)->get();
        if($check->count() >  0){

            $verifycode = CommonHelpers::code_ref(6);

            $post = User::find($check[0]->id);
            $post->verify_code                    = $verifycode;
            $post->update();

            $details    =   [
                'name'=>$check[0]->firstname. ' '.$check[0]->lastname,
                'code' => $verifycode,
                'email'=>$request->email,
                'link' => url('password/verify?ref='.$check[0]->identity)
            ];

            Mail::to($request->email)->send(new ResetYourPassword($details));
            return $this->sendSuccess(null, "Please check your email and follow the link to reset your password");

        }else {
            return $this->errorResponse(null, "Email address not found");
        }

    }

    /**
     * @param Request $request
     * @return JsonResponse
     */

    public function ChangeUserPassword (Request $request) : JsonResponse
    {
        $user = User::find($request->user_id);

        if (!Hash::check($request->current_password, $user->password)) {
            return $this->errorResponse(null, "The current password is incorrect");
        }

        $validator = Validator::make($request->all(), [
            'new_password' => ['nullable', 'string'],
            'confirm_new_password' => ['nullable', 'required_with:new_password', 'same:new_password']
        ]);

        if ($validator->fails()) {
            return $this->errorResponse(null, "Password didn't match or your current password is wrong");
        }

        $password                   =   $request->new_password;
        $encrypt_pass               =   bcrypt($password);
        $Users                      =   User::find($request->user_id);
        $Users->password            =   $encrypt_pass;
        $Users->save();

        return $this->sendSuccess(null, "Password Updated Successfully");
    }





}
