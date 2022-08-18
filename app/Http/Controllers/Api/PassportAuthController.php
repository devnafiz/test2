<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class PassportAuthController extends Controller
{
     public function register(Request $request){

              $this->validate($request,[
                    'name'=>'required|min:4',
                    'email'=>'required|email',
                    'password'=>'required|min:6',

              ]);


              $user =User::create([
                  'name'=>$request->name,
                  'email'=>$request->email,
                  'password'=>bcrypt($request->password)



              ]);
            $token=$user->createToken('Laravel-9-Passport-Auth')->accessToken;
            return  response()->json(['token' => $token],200);


     }

     public function login(Request $request){

     	$data=[
              'email'=>$request->email,
              'password'=>$request->password,

     	];

     	if (auth()->attempt($data)) {

          $token =auth()->user()->createToken('Laravel-9-Passport-Auth')->accessToken;
          return response()->json(['token'=>$token],200);
     		
     	}else{

          return response()->json(['error' => 'Unauthorised'], 401);
     	}

     }

     public function userInfo() 
    {
 
     $user = auth()->user();
      
     return response()->json(['user' => $user], 200);
 
    }
}
