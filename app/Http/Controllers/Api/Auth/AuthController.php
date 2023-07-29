<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class AuthController extends ApiController
{
     /****LogIn Function*****/
     public function login(Request $req)
     {
         $credentials = $req->only(['email', 'password']);
 
         $user = User::where('email', $credentials['email'])->first();
 
         if (!$user) {
             return response('User not found.', 401);
         }
 
         if (!$user?->is_active) {
             return response('Your account is inactive.', 401);
         }
 
         if (Auth::attempt($credentials)) {
 
             $data = new stdClass;
             $data->user = Auth::user();
             $data->token = Auth::user()->createToken(str()->random(60))->plainTextToken;
             $message = "Login successful";
 
             return $this->sendResponse($data, $message);
         }
 
         $errorMessage = 'Please check the information you entered and try again..';
 
         return $this->sendError($errorMessage);
     }
 
     // LogOut
     public function logOut(Request $req){
         try{
             $req->user()->tokens()->delete();
                 return response()->json(['status'=>'true','message'=>"Checked Out",'data'=>[]]);
         }catch(\Exception $e){
             return response()->json(['status'=>'false','message'=>$e->getMessage(),'data'=>[]],500);
         }
     }
}
