<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Order;
use App\Room;
use App\Booking;


class OrderController extends Controller
{
    public function display(){

        return view('order.order');
       
    }

    public function getorder(Request $request)
    {
     
      $request->validate([
        'room_no' => 'required',
        'order' => 'required',
        'price' => 'required',
      
    ]);

 
      $room_no = $request['room_no'];
      $order_type = $request['order'];
      $price = $request['price'];


  $room_id = DB::select( DB::raw("SELECT id FROM rooms WHERE (RoomNo = '$room_no')  ") );

    $booking_id = DB::select( DB::raw("SELECT id FROM bookings WHERE (bookings.room_id = '{$room_id}')  ") );

  $id = DB::table('bookings')
                ->select('id')
                 ->whereRaw
                ("
                 room_id  IN( 
                SELECT id FROM rooms 
                 WHERE (
                    (RoomNo = '$room_no') 
                )
                )
               ")
                ->first();
  
       // dd($booking_id);
            
     $order = new Order();
    
      $order->order_type = $order_type;
      $order->order_price  = $price ;
     $order->room_id = $room_id;
      $order->booking_id = $id;
     
      
      $order->save(); 


     $data=Order::all();
return "fbfgb";
//dd(json_encode($data));

 // return view('booking.Arooms',compact('available_rooms','dates'));
  
  
  

  }
  















    
}
