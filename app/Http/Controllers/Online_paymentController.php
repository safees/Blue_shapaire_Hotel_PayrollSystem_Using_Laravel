<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Online_payment;
use App\Check;
use Illuminate\Support\Facades\DB;

class Online_paymentController extends Controller
{
    public function create(){

        return view('booking.new');
       
    }
    
    public function getData($id,$start_date,$end_date){

        
   
        $data['id']=$id;
        $data['startdate']=$start_date;
        $data['enddate']=$end_date;
 
       $Online_payment = new Online_payment();
     
      
      $Online_payment->checkid = $id;
      $Online_payment->startdate = $start_date;
      $Online_payment->enddate = $end_date;
     
       $Online_payment->save();
 
       $data=Online_payment::all();
        //dd($data);

        $details=DB::select( DB::raw("SELECT* FROM online_payments WHERE checkid = '$id' ") );
     /*   $available_rooms = DB::table('rooms as r')
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


;*/

      // $details = DB::select( DB::raw("SELECT id FROM bookings WHERE room_id = '$id' ") );
      //eturn view('Online_payment');
       return view('booking.Online_payment',compact('details'));
      
     
     }
 





    
}
