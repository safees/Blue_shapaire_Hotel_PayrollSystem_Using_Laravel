<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\Client;
use App\Booking;
use Illuminate\Support\Facades\DB;
use Hash;

class SessionsController extends Controller
{
   
    public function login() {
        return view('user.login');
    }


public function view(Request $request) {


    $email = $request->input('email');
    $password = $request->input('password');


    $hashedPassword = Client::where('Email', $email)->first();


    if ($hashedPassword && Hash::check($password, $hashedPassword->password)) {
    
          $details= DB::table('rooms')
        ->join('bookings','room_id','=','rooms.id')
        ->join('clients','booking_id','=','bookings.id')
        ->select('clients.*','bookings.*','rooms.*')
        ->where('clients.Email','=',$email)
        ->get();

        return view('user.UserViewBooking',compact('details'));



    } else {
        return "wrong";
      }
}

    


    public function delete($booking_id){

        $updateData=Booking::find($booking_id);
        $updateData->delete();
        return view('/index');
        
    }

    public function logout(){

        return view('/index');
    }


    
   
}











