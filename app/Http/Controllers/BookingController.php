<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Room;
use App\Booking;
use App\Check;
use App\Online_payment;
use Illuminate\Http\Request;

class BookingController extends Controller
{
 
  public function getData($checkid,$startdate,$enddate){

        
       $data['checkid']=$checkid;
       $data['startdate']=$startdate;
       $data['enddate']=$enddate;

      $booking = new Booking();
    
      $booking->room_id = $checkid;
     $booking->startdate = $startdate;
     $booking->enddate = $enddate;
    
      $booking->save();

      $data=Booking::all();

      $details = DB::select( DB::raw("SELECT id FROM bookings WHERE room_id = '$checkid' ") );
      return view('booking.client',compact('details'));
     
    
    }
  
    public function View(){

      $details= DB::table('rooms')
                     ->join('bookings','room_id','=','rooms.id')
                     ->join('clients','booking_id','=','bookings.id')
                     ->select('clients.*','bookings.*','rooms.*')
                     ->get();


      return view('booking.BookingView',compact('details'));

  }



  public function Delete($booking_id){

    $updateData=Booking::find($booking_id);
    $updateData->delete();
    return redirect()->back();
}












    }
    
        


    

//RoomName == '{$RoomName}') AND (r.RoomType == '{$RoomType}')
// ->where('r.RoomName',$RoomName)
// ->where('r.RoomType', $RoomType)
//$available_rooms = new Booking();

        //$available_rooms->start_date = $start_date;

        //$available_rooms->save();
       // $data=Booking::all();
      // $data['start_date']=$start_date;
        // $data['end_dated']=$end_date;
        // dd($start_date);
       // dd($end_date);
          //$this->getData($start_date);
       //$this->getData($end_date)