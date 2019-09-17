<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;


class PostController extends Controller
{

	public $successStatus = 200;
    //--   ------- -Register User------------//
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [  // Validate The Request Inputs
            'name'       => 'required', 
            'email'      => 'required|email|unique:users', 
            'password'   => 'required', 
        //    'c_password' => 'required|same:password', 
            'dob'        => 'required',
            'address'    => 'required',
        ]);
if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
$input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        Mail::to($user->email)->send(new WelcomeMail($user));//Welcome mail Event Fire

        return $user;
  
        $success['name']   =  $user->name;
        $success['email']  =  $user->email;
        $success['dob']    =  $user->dob;
        $success['address']=  $user->address;
        return response()->json(['success'=>$success], $this-> successStatus); 
    }
}
