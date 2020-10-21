<?php

namespace App\Http\Controllers;

use App\Client;
use App\Guide;
use Illuminate\Http\Request;
use Hash;

use Illuminate\Support\Facades\DB;

class TourLoginController extends Controller
{
    public function tour_login() {
        return view('tour.tour_login');
    }
    public function login(Request $request) {


        $email = $request->input('email');
        $password = $request->input('password');
        $hashedPassword = Client::where('Email', $email)->first();

        $client_id = DB::select( DB::raw("SELECT id FROM clients WHERE (Email = '$email') ") );

        $guides=DB::table('guides')
                    ->select ('guides.*' )
                   ->get();
    

     /*   $available_guides = DB::table('guides')
                            ->select ('guides.id')
                             ->WHERE ( 'guides.id' != '{$guide_id}')
                            ->get();

  dd($guides);
*/


      if ($hashedPassword && Hash::check($password, $hashedPassword->password)) {
     return view("tour.guidebook",compact('client_id','guides'));
      }
  
  
    else {
      $message="Registered successfully";
      return redirect('/index')->with('message');
        }

    }
}
