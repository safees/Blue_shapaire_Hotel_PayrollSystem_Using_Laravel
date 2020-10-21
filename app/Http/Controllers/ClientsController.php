<?php

namespace App\Http\Controllers;

use App\Client;
use App\Room;
use App\Booking;
use App\Check;
use App\Online_payment;
use App\FinalPayment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function create(){

        return view('booking.client');
       
    }

    public function store(Request $request,$id) {

        $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Address1' => 'required',
            'Address2' => 'required',
            'City' => 'required',
            'Adult' => 'required',
            'Children' => 'required',
            'Time' => 'required',
            'Email' => 'required|unique:clients',
            'Contact_No' => 'required',
            'password' => 'required|unique:clients|min:6',
            
        ]);

        $data['id']=$id;
        $First_Name = $request['First_Name'];
        $Last_Name = $request['Last_Name'];
        $Address1 = $request['Address1'];
        $Address2 = $request['Address2'];
        $City = $request['City'];
        $Adult = $request['Adult'];
        $Children = $request['Children'];
        $Time = $request['Time'];
        $Email = $request['Email'];
        $Contact_No = $request['Contact_No'];
        $password =$request['password'];


        $client = new Client();

        $client->booking_id = $id;
        $client->First_Name = $First_Name;
        $client->Last_Name = $Last_Name;
        $client->Address1 = $Address1;
        $client->Address2 = $Address2;
        $client->City = $City;
        $client->Adult = $Adult;
        $client->Children = $Children;
        $client->Time = $Time;
        $client->Email = $Email;
        $client->Contact_No = $Contact_No;
        $client->password= bcrypt($password);

      
        $client->save(); 
        $data=Client::all();      
//dd($data);
       $details= DB::table('rooms')
                    ->join('bookings','room_id','=','rooms.id')
                    ->join('clients','booking_id','=','bookings.id')
                    ->select('clients.*','bookings.*','rooms.*')
                    ->where('booking_id','=',$id)
                    ->get();

       return view('booking.details',compact('details'));
      
       
    }


    public function payment(){

        return view('booking.payment');
       
    }

    public function finalpayment(Request $request){


        $Email = $request['email'];

        $details= DB::table('rooms')
                 ->join('bookings','room_id','=','rooms.id')
                 ->join('clients','booking_id','=','bookings.id')
                 ->select('clients.*','bookings.*','rooms.*')
                 ->where('Email','=',$Email)
                 ->get();

        $price= DB::table('rooms')
                ->join('bookings','room_id','=','rooms.id')
                ->join('clients','booking_id','=','bookings.id')
                ->select('rooms.Price')
                ->where('Email','=',$Email)
                ->first();

        $client_id= DB::table('clients')
                ->select('clients.id')
                ->where('Email','=',$Email)
                ->first();

      $total = ($price->Price) - 5000;
        // return($client_id->id);}}
    

        $finalpayment = new FinalPayment();

        $finalpayment->client_id = $client_id->id;
        $finalpayment->finalpay = $total;
 

        $finalpayment->save();

       // $data=FinalPayment::all($client_id->client_id); 
        $now=now();    
        $data = DB::select("select finalpay from final_payments where (client_id='$client_id->id') AND (updated_at='$now')");
        return view('booking.finalpay',compact('data','details'));
       
    }








}
