<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Check;
use App\Online_payment;
use App\Available;
use Illuminate\Support\Facades\DB;



class AvailableController extends Controller
{
    public function create(){

        
    }

    public function getData($id,$startdate,$enddate){

        $data['id']=$id;
        $data['startdate']=$startdate;
        $data['enddate']=$enddate;
 
       $available = new Available();
     
      
      $available->payment_id = $id;
      $available->startdate = $startdate;
      $available->enddate = $enddate;
     
      $available->save();
 
     $data=Available::all();
 
     $available_rooms = DB::table('rooms as r')
     //  ->select('r.id','r.RoomName','r.RoomType','r.Price')
                         ->whereRaw
                         ("
                              r.id NOT IN( 
                             SELECT b.room_id FROM bookings b
                              WHERE (
                         ( b.startdate <= '{$startdate}') OR (b.enddate >= '{$enddate}')
            
           )
       )
       ")
    
       ->orderBy('r.id')
       ->get()
;

$details = DB::select( DB::raw("SELECT* FROM availables WHERE payment_id = '$id' ") );

return view('Available',compact('available_rooms','details'));
     






 }


}
