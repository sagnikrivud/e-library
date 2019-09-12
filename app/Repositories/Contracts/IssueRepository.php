<?php

namespace App\Repositories\Contracts;
use App\Issue;
use App\User;
use Illuminate\Http\Request;
use DB;
use Auth;
interface IssueRepository
{
    //-----------Store Issues------------//

    public function booksubmit(Request $request)
    {
         $issue = new Issue;
         $issue->User::Auth()->id       = $request->input("user_id");
         $issue->DB::table('books')->id = $request->input("book_id");
         $issue->date("Y/m/d")          = $request->input("created_at ");
         $message = array("data"=>"Request Submitted.","type"=>"success");
         try{
			$issue->save();
		}catch(\Illuminate\Database\QueryException $ex){
			$message = array("data"=>"Exception trying insert the data: ".$ex, "type"=>"danger");
		}
		return $this->getList($message);
    }


    
}
