<?php

namespace App\Http\Controllers;

use App\Issue;
use App\User;
use App\Book;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function dashboard()
     {
        return view('dashboard');
     }
     //-----------------------------------------------//
     public function main()
     {
     	return view('admin.main');
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
        return view('admin.issue',['issues'=>$issue]);
     }
  //------------------------------show booklist---------------//   

     public function booklist()
     {
     	$book = Book::all();
     //	dd($book);
     	return view('admin.book_list',['books'=>$book]);
     }
   //--------------store Books------------------------//
					   public function addbook()
					   {
					   	return view('admin.addbook');                //Route Page
					   }  
					   public function add(Request $request)   //Store / Add Book
					   {
					    	$book = new Book();

					        $book ->name     =  $request->input('name');
					        $book ->quantity =  $request->input('quantity');
					        $book ->author   =  $request->input('author');
					        $book ->image    =  $request->image;
					        $image           =  $request->image;
					        $pic             =  $image->getClientOriginalName();
					        $image->move(public_path("Images"), $pic);
					        $path            = '/Images/'.$pic;

					        $book ->save();


					        return "success";
					   } 

					   //---------Status redirect page-----------------//
					   public function statusupdate($id)
						    {
						    	//dd($id); 		
						      //$id  = $request->id;
						     //$issue = Issue::with('issue','reserve')->get()->toArray();
						    //  dd($issue);
						     return view('admin.status')->with('id',$id);

						    }
  
			  //---------------------Update Issue status----------------//
			public function issueupdate($id,Request $request)
			{			
		//		 $id  = $request->id;
		//		 $sagnik = $request->sagnik;
		//	 	 dd($sagnik);			 
		      DB::table('issues')->where('id',$id)->update(['status' => $request->status]); 
		      //dd($issue); 
			  return redirect('/issuemonitor');   
			}

       //-------------Inform User about return Book----------------------//
			   public function returnbook()
			   {
                 $email = User::all()->email;

                 
			   }
        //----------------------------Member List---------------------------------//
    public function member()
    {
    	$user = DB::table('users')->where(['verified'=>1,'roles'=>0])->get();
    	//$user = User::all()->where(['verified'=>1,'roles'=>0]);
    	dd($user);
    	return view('admin.member',['users' => $user]);
    }			   



}
