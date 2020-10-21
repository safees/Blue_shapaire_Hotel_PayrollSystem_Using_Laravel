<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Check;
use App\Room;

class CheckController extends Controller
{


    public function display(){

        return view('booking.checks');
       
    }
    public function getAvailablerooms(Request $request)
    {
     
      $request->validate([
        'check_in_date' => 'required',
        'check_out_date' => 'required|after:check_in_date',
        'adults' => 'required',
        'children' => 'required',
      
    ]);

 
      $start_date = $request['check_in_date'];
      $end_date = $request['check_out_date'];
      $adults = $request['adults'];
      $children = $request['children'];

     
      $check = new Check();
     
      
      $check->start_date = $start_date;
      $check->end_date = $end_date;
      $check->adults = $adults;
      $check->children = $children;
      
      $check->save(); 

    // $date=Check::where('check_id', $check_id)->get()->all();;
   
     $date=Check::all();
     $now=now();
    // $details = DB::select( DB::raw("SELECT check_id FROM checks WHERE (start_date = '$start_date') AND (end_date = '$end_date')  ") );

     $dates = DB::select( DB::raw("SELECT DISTINCT start_date,end_date,adults,children FROM checks WHERE (start_date = '$start_date') AND (end_date = '$end_date') ") );

//if((($date->$start_date)<'created_at') && (($date->$end_date)<'created_at') ){




    $available_rooms = DB::table('rooms as r')
    //  ->select('r.id','r.RoomName','r.RoomType','r.Price')
                 ->whereRaw
                ("
                 r.id NOT IN( 
                SELECT b.room_id FROM bookings b
                 WHERE (
                ( b.startdate <= '{$start_date}') OR (b.enddate >= '{$end_date}')
           
                )
                )
               ")
   
      ->orderBy('r.id')
      ->get()
  
  
  ;
  
  
  return view('booking.Arooms',compact('available_rooms','dates'));
  
  
  

  }
  


}

      
        
   
        

        
      









        












