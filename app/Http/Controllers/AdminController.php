<?php

namespace App\Http\Controllers;

use App\Issue;
use App\User;
use App\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
     {
        return view('dashboard');
     }

  //---------------------------------monitor------------------//
     public function issuemonitor()
     {  
     	$user_id = User::all(); 
     	$book_id = Book::all();
     	//$issue   = Issue::all(); //->with('issue','reserve')->get();
     	$issue   = Issue::with('issue','reserve')->get()->toArray();
     //	dd($issue);
     //	echo "<pre>";
     //	print_r($issue);
        return view('issue',['issues'=>$issue]);
     }
  //------------------------------show booklist---------------//   

     public function booklist()
     {
     	$book = Book::all();
     //	dd($book);
     	return view('book_list',['books'=>$book]);
     }
   //--------------store Books------------------------//
   public function addbook()
   {
   	return view('addbook');
   }  
   public function add(Request $request)
   {
    	$book = new Book();

        $book ->name = $request->input('name');
        $book ->quantity = $request->input('quantity');
        $book ->author = $request->input('author');
        $image = $request->image;
        $pic   = $image->getClientOriginalName();
        $image->move(public_path("Images"), $pic);
        $path  = '/Images/'.$pic;

        $book ->save();

        return "success";
   } 


}
