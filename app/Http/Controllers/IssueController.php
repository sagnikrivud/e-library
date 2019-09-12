<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;
use App\Issue;
use DB;
use Auth; 

class IssueController extends Controller
{
   /*public function booklist()
   {
    $user_id = Auth::user()->id;
    return view('')

   }*/
 //----------------------------------//
   public function booksubmit(Request $request) 
   {
    
     $user_id  = Auth::user()->id;
     //$book_id  = Book::find('id');
     $data = Issue::where('user_id',$user_id)  //Set The record
              ->where('status','C')
              ->with('issue','reserve')
              ->get();
    //         dd($data);


     if(count($data) < 3){

     //add request
  
      $issue = new Issue;
      $issue->user_id = Auth::user()->id;
      //$issue->book_id = Book::get()->id;
      $book_id        = $request->book_id;
      $issue->book_id = $book_id;
      $issue->save();
      return redirect('/home');
     
     }else{
      //return Error
      $flash= 'You are not permitted for the further Book requests';
      return redirect('/home');

      
      }

   }
 //----------------------------------

/*public function issuelimit()
{
 $cars_id = request::get('id');
}
$total_passenger  = DB::table('passenger')->WHERE('car_id',$cars_id);
if(count($data) < 5){
   //do insert data into passenger
}else{
   //windows alert / whatever
}
}*/

}
