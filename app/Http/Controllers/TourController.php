<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\GuideBooking;
use App\TourBooking;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{

public function getAvailableGuides(Request $request,$id)
    {
     
      $request->validate([
        'date' => 'required',
        'tour' => 'required',
      
    ]);

      $data['id']=$id;
      $tours = $request['tour'];
      $date = $request['date'];
     
      $tour = new Tour();
     

      $tour->tour = $tours;
      $tour->date = $date;
      $tour->client_id = $id;
      
      $tour->save(); 
      
     $tour_details=DB::select( DB::raw("SELECT DISTINCT tour,date,client_id FROM tours WHERE (client_id = '$id') AND (tour = '$tours') AND (date = '$date')") );
// dd($tour_details);
 
   $available_guides = DB::table('guides as g')
               ->select('g.*')
                 ->whereRaw
                ("
                 g.id NOT IN( 
                SELECT t.guide_id FROM tour_bookings t )
               ")
   
      ->orderBy('g.id')
      ->get();
   
 // dd($available_guides);
  
return view('tour.guideavailable',compact('available_guides','tour_details'));
  
 }


 public function guide_book(Request $request,$client_id,$tour,$date,$guide_id)
 {
  
    $data['tour']=$tour;
    $data['date']=$date;
    $data['client_id']=$client_id;
    $data['id']=$guide_id;
  
   $g_booking = new GuideBooking();
  

   $g_booking->tour = $tour;
   $g_booking->date = $date;
   $g_booking->client_id = $client_id;
   $g_booking->guide_id = $guide_id;
   
   $g_booking->save(); 

$details = DB::select( DB::raw("SELECT id,guide_id FROM guide_bookings WHERE (tour = '$tour') AND (date = '$date') AND (client_id = '$client_id') AND (guide_id = '$guide_id')") );   

return view('tour.guidepayment',compact('details'));

}

public function tour_book(Request $request,$tour_id,$guide_id)
 {
  

    $data['id']=$tour_id;
    $data['guide_id']=$guide_id;
  
   $t_booking = new TourBooking();
  
   $t_booking->tour_id = $tour_id;
   $t_booking->guide_id = $guide_id;
   
   $t_booking->save(); 


return view('/index');

}


















}
