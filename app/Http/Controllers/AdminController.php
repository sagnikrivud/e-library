<?php

namespace App\Http\Controllers;

use App\Issue;
use App\User;
use App\Book;
use Illuminate\Http\Request;
use DB;
use DateTime;
use App\Setting;

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
					        //Insert Image//
					        $image           =  $request->image;
					        $pic             =  $image->getClientOriginalName();
					        $image->move(public_path("Images"), $pic);
					        $path            = '/Images/'.$pic;
                  $book ->image    =  $path;
					        $book ->save();


					        return redirect('/booklist');
					   } 
    //-------------------------Add Copy-----------------------------//
					   public function addcopy($id)
					   {
                       return view('admin.addcopy')->with('id',$id);//->with('id',$id);

					   }
//----------------------------------------------------------------------------------//
					   PUBLIC function updatecopy($id,Request $request)
					   {
                    Book::where('id',$id)->increment('quantity',$request->quantity);
                  Book::where('id',$id)->increment('available',$request->available);                  
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
						    	
						     return view('admin.status')->with('id',$id);

						    }
  

//--------------------------------Return to Fine page------------------------------//
                            public function fine()
                            {
                               return view('admin.fine');

                            }



			  //---------------------Update Issue status----------------//
			public function issueupdate($id,Request $request)
			{	

			 
		      DB::table('issues')->where('id',$id)->update(['status' => $request->status]);
            $result = DB::table('issues')->where('id',$id)->get(['status'])->toArray();
            $m      = $result[0];
            $status = $m->status;
          //  print_r($status);
           // die;
            if($status=='D'){

              $book_id_result= DB::table('issues')->where('id',$id)->get(['book_id'])->toArray();
              $x  = $book_id_result[0];
              $book_id  = $x->book_id;    
             DB::table('books')->where('id',$book_id)->increment('available',1); 
              //return redirect('/issuemonitor')->withSuccess('Updated..!');

                 //------------------Fine Calculation-----------------------//
              $take_date = Issue::where('id',$id)->get(['updated_at']);
              $result    = $take_date[0];
            //  print_r($result);
            //  die;
              $date     = $result->updated_at->format('Y-m-d');  //pick date 
              $date1    = strtotime($date);
            //  $date1    = date($date);    
              //$date1     = new DateTime($v);
            //  print_r($date1);
            // die;               
              $date2     = date("Y-m-d");    // Current date
              $date3     = strtotime($date2);   
            // print_r($date2);
            //  die;                         
            //  $diif      = round(($date2-$date1)/(60 * 60 * 24));
             // $diif        = date_diff($date2,$date1);
              $diif    = abs($date3-$date1);
           //   print_r($diif);
           //   die;  
              $days     = round($diif / (60 * 60 * 24));   // convert into day*
           //   print_r($days);
           //   die;  
              $limit = DB::table('settings')->get(['reserve_period'])->toArray();
            //  print_r($limit);
             // die;
              $n = $limit[0];
            //  print_r($n);
             // die;
              $period = $n->reserve_period; 
             //  print_r($period);
             //  die;
              if($days>$period){
              $l = DB::table('settings')->get(['fine_amount'])->toArray();
              $v = $l[0]; 
              $amount = $v->fine_amount;
            //  print_r($amount);
            //  die;
               $fine = $days*$amount;
           //   echo 'Your Caution money is',' ','Rupees',$fine,'/-';
             return redirect('/fine')->with(['id'=>$id,'fine'=>$fine]);
              }else{
             return redirect('/issuemonitor')->withSuccess('Updated..!'); 
                          }
             

            }elseif($status=='F'){
              
            $book_id_result= DB::table('issues')->where('id',$id)->get(['book_id'])->toArray();
            $x  = $book_id_result[0];
            $book_id  = $x->book_id;    
            DB::table('books')->where('id',$book_id)->increment('available',1);  
            return redirect('/issuemonitor')->withSuccess('Updated..!'); 

            }else{

            return redirect('/issuemonitor')->withSuccess('Updated..!');
            }
              
              
		       
			
			}

       //-------------Inform User about return Book----------------------//
			   public function returnbook()
			   {
                 $email = User::all()->email;

                 
			   }

        //----------------------------Member List---------------------------------//
                      public function member()
                      {
                      	$user = User::where(['verified'=>1,'roles'=>2])->get();
                          //dd($user);
                      	return view('admin.member',['users' => $user]);
                      }	

 //------------------------------------Settings------------------------------------//
 
                             public function setting()
                             {                            
                            
                             
                             
                              $setting = Setting::where('id',1)->get();
                              return view('admin.settings',compact('setting'));

                             }

                              public function settingupdate(Request $request)
                              {
                                 Setting::where('id','1')->update([
                                   'reserve_period' => $request->reserve_period,
                                   'fine_amount'    => $request->fine_amount,
                                   'toggle'         => $request->toggle,

                                 ]);
                                 
                                 return redirect('/main');   
                              }

  

   



}
