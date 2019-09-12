<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AjaxController extends Controller
{
    //--Search  box implement----//

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('books')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('author', 'like', '%'.$query.'%')
       //  ->orWhere('image','like','%'.$query.'%')
         ->orderBy('id', 'name')
         ->get();
         
      }
      else
      {
       $data = DB::table('books')
         ->orderBy('id', 'name')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>

         <td>'.$row->name.'</td>
         <td>'.$row->author.'</td>
         <td>'.$row->quantity.'</td>
         <td><img width="100px" height="100px" src="'. $row->image.'"</td> 
         <td><button type="submit" name = "book_id" value = "'.$row->id.'">Request</button></td>
         </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }


    //-------------Email Avibility--------------//
    public function check(Request $request)
    {
     if($request->get('email'))
     {
      $email = $request->get('email');
      $data = DB::table("users")
       ->where('email', $email)
       ->count();
      if($data > 0)
      {
       echo 'not_unique';
      }
      else
      {
       echo 'unique';
      }
     }
    }
}
//<td>'.$row-><img src="Images/" height="42" width="42"> .'</td>
//<img src="{{URL::to($row->image)}}" height="80px" width="80px">