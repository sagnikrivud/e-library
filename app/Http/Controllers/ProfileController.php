<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//use DB;

use App\User;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

//----------Redirect to Profile Edit Page----------// 
    public function profile()
    {
      $user = Auth::user();
      //dd($user);
      return view('profile',compact('user'));

    }
 

 //----------User Update To ---------------------//
    public function update($id, Request $request)
    {
       $user  = Auth::user();
       $image = $request->image;
       $pic   = $image->getClientOriginalName();
       $image->move(public_path("Images"), $pic);
       $path  = '/Images/'.$pic;
       $user->where('id',$id)->update([
        'image'   => $path,
       	'name'    => $request->name,
       	'mobile'  => $request->mobile,
       	'email'   => $request->email,
       	//'password'=> Hash::make($request->password)
 
       ]);
        return redirect('/home');
      // return view('home');
    }
}

/*DB::table('post')
            ->where('id', 3)
            ->update(['title' => "Updated Title"]);*/
