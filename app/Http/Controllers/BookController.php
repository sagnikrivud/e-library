<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;
use Auth;
use App\User;
use App\Issue;
use PDF;


class BookController extends Controller
{
    //-------------------Allotted Book List of User---------------------//

                public function book()
                {
                      $book = DB::table('books')->where('available','>', '0')->get()->toArray();
                   //   echo '<pre>';
                    //  print_r($book);
                     // die;
                       return view('book.book',['books'=>$book]);
                }

  
   //--------------------My Assigned Book List--------------------//  
                    public function mybook()
                    {   
                        $user_id = Auth::user()->id;
                      //  $issue_date = Issue::where('user_id',$user_id)->get()->created_at;
                       // $book_id = DB::table('books')->get()->id;
                        $my_book = Issue::with('reserve','issue')->where('user_id',$user_id)->get()                                       ->toArray();
                    //$issue_date = Issue::with('reserve','issue')->where('user_id',$user_id)->get()->created_at;
                     //  echo "<pre>"; print_r($my_book);
                 
                   //     print_r($my_book);
                     //   die;
                       return view('book.books',['mybooks'=>$my_book]);
                    }

     //-----------------------------------------------------------//
                            public function error()
                           {
                               return view('user.error');

                           }


     //----------------Book Request-----------------------//
                  public function booksubmit(Request $request)
                 {
                  $id        = $request->book_id;
                  $result = Book::where('id',$id)->get(['available'])->toArray();
                  $x         = $result[0];       //Braek the inner array
                  $available = $x['available'];  // take the vallue from element of an inner array
               //   print_r($available);

                  if ($available>0)
                  {

                    $issue = new Issue;
                    $issue->user_id = Auth::user()->id;
                    //$issue->book_id = Book::get()->id;
                    $book_id        = $request->book_id;
                    $issue->book_id = $book_id;
                    $issue->save();
                    Book::where('id',$book_id)->decrement('available',1);
                 
                  
                 
                    return redirect('/mybook')->withSuccess('You have done successfully');
                   
                  }else{

                    return redirect('/error');

                       }

                 }
     
     //----------------Pdf Slip Generate-------------------//
                  public function printPDF()
                  {
                     // This  $data array will be passed to View blade      
                      $data = [ 'title'   =>   'E library facility',          
                                'heading' => '<h2>Your Assigned Book</h2>',          
                                'content' =>   $assign       
                              ];
                      
                      $pdf = PDF::loadView('pdf_view', $data);  
                      return $pdf->download('assigneds.pdf');
                  }

   

}
