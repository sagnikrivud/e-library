<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function test()
	{
    return view('test');
    }

    public function issueupdate(Request $request)
			{			
				  $id  = $request->id;
				  $status = $request->status;
			      dd($status);			 
		     /* DB::table('issues')->where('id',$id)->update(['status' => $request->status]);  
			  return redirect('/issuemonitor');   */
			}
}
