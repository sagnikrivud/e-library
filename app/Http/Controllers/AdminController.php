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
					        
					        $image           =  $request->image;
					        $pic             =  $image->getClientOriginalName();
					        $image->move(public_path("Images"), $pic);
					        $path            = '/Images/'.$pic;
                            $book ->image    =  $path;
					        $book ->save();


					        return "success";
					   } 
    //-------------------------Add Copy-----------------------------//
					   public function addcopy($id)
					   {
                       return view('admin.addcopy')->with('id',$id);//->with('id',$id);

					   }
//----------------------------------------------------------------------------------//
					   PUBLIC function updatecopy($id,Request $request)
					   {
                      DB::table('books')->where('id',$id)->increment('quantity',$request->quantity);
                                  //     ->where('id',$id)->increment('available',$request->available);
                                                     //['available',$request->available]]);
                       //->increment('available',$request->available);            //update(['quantity' => $request->quantity, 'available'=> $request->available]);
                         /*DB::table('books')->where('id',$id)
                                           ->update(['quantity' =>DB::raw('quantity+$request->quantity'),
                                                     'available'=>DB::raw('available+$request->available')
                                                    ]); */                 
                                                                      
                         return redirect('/booklist');

					   }


	//-----------------------------Status redirect page----------------------------------//
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
			 
		      DB::table('issues')->where('id',$id)->update(['status' => $request->status]);
               
		      /*if(Issue::with('reserve')->where(['status'=>'C'])->where('book_id','books.id')->get()){
		        DB::table('books')->decrement('available',1);	
		      }elseif(Issue::with('reserve')->where(['status'=>'C'])->get()){
                DB::table('books')->increment('available',1);
		          }*/ 
		      
		       
			  return redirect('/issuemonitor')->withSuccess('Updated..!');   
			}

       //-------------Inform User about return Book----------------------//
			   public function returnbook()
			   {
                 $email = User::all()->email;

                 
			   }
        //----------------------------Member List---------------------------------//
    public function member()
    {
    	$user = DB::table('users')->where(['verified'=>1,'roles'=>2])->get();
    	//$user = Auth::user()->where(['verified'=>1,'roles'=>2])->get();
    	//dd($user);
    	return view('admin.member',['users' => $user]);
    }			   



}
