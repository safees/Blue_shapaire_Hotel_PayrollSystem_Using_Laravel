<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guide;
use Illuminate\Support\Facades\DB;
use Hash;

class GuideController extends Controller
{
    public function display(){

        return view('guide.regis');
       
    }

    public function store(Request $request) {

        $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Address_Line1' => 'required',
            'Address_Line2' => 'required',
            'City' => 'required',
            'Telephone_No' =>'required|min:10|max:10',
            'Alt_Telephone_No'=>'required|min:10|max:10',
            'NIC' => 'required|max:10|min:10',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:100000',
            'Email' => 'required|unique:guides', 
            'password' => 'required|unique:guides|min:6',
            'confirm_password'   =>  'required|same:password',
            ]);

        $First_Name = $request['First_Name'];
        $Last_Name = $request['Last_Name'];
        $Address1 = $request['Address_Line1'];
        $Address2 = $request['Address_Line2'];
        $City = $request['City'];
        $Tele_No = $request['Telephone_No'];
        $Alt_Tele_No = $request['Alt_Telephone_No'];
        $NIC = $request['NIC'];
        $Pro_Picture = $request->file('image')->store('uploads','public');
        $Email = $request['Email'];
        $password =$request['password'];


        $guide = new Guide();

        $guide->First_Name = $First_Name;
        $guide->Last_Name = $Last_Name;
        $guide->Address1 = $Address1;
        $guide->Address2 = $Address2;
        $guide->City = $City;
        $guide->Tele = $Tele_No;
        $guide->Alt_Tele = $Alt_Tele_No;
        $guide->NIC = $NIC;
        $guide->Pro = $Pro_Picture;
        $guide->Email = $Email;   
        $guide->password= bcrypt($password);

      
        $guide->save(); 
        $data=Guide::all();      

        $data = DB::select("select * from guides where (Email ='$Email') ");
      return view('guide.guidedetails',compact('data'));
      
       
    }

    public function guide_login() {
        return view('guide.guide_login');
    }
       
    
    public function login(Request $request) {


        $email = $request->input('email');
        $password = $request->input('password');
        $hashedPassword = Guide::where('Email', $email)->first();

        $guides = DB::select( DB::raw("SELECT * FROM guides WHERE (Email = '$email') ") );
    


    
        if ($hashedPassword && Hash::check($password, $hashedPassword->password)) {
        
            return view('guide.guideafterlogin',compact('guides'));
    
    
    
        } else {
            $message="Try again later";
            return redirect('/index')->with('message');
          }
    }
    
    public function Update($id){

        $updateData=Guide::find($id);
        return view('guide.guideupdate')->with('Updateguide',$updateData);
    }


      

        public function Updateguide(Request $request) {
       
            $request->validate([
                'First_Name' => 'required',
                'Last_Name' => 'required',
                'Address_Line1' => 'required',
                'Address_Line2' => 'required',
                'City' => 'required',
                'Telephone_No' =>'required|min:10|max:10',
                'Alt_Telephone_No'=>'required|min:10|max:10',
                'NIC' => 'required|max:10|min:10',
                'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:100000',
                'Email' => 'required|unique:guides', 
               'password' => 'required|unique:guides|min:6',
               'confirm_password'   =>  'required|same:password',
                ]);


            $First_Name = $request['First_Name'];
            $Last_Name = $request['Last_Name'];
            $Address1 = $request['Address_Line1'];
            $Address2 = $request['Address_Line2'];
            $City = $request['City'];
            $Tele_No = $request['Telephone_No'];
            $Alt_Tele_No = $request['Alt_Telephone_No'];
            $NIC = $request['NIC'];
            $Pro_Picture = $request->file('image')->store('uploads','public');
            $Email = $request['Email'];
            $password =$request['password'];
            
    
            $guide = new Guide();
    
            $guide->First_Name = $First_Name;
            $guide->Last_Name = $Last_Name;
            $guide->Address1 = $Address1;
            $guide->Address2 = $Address2;
            $guide->City = $City;
            $guide->Tele = $Tele_No;
            $guide->Alt_Tele = $Alt_Tele_No;
            $guide->NIC = $NIC;
            $guide->Pro = $Pro_Picture;
            $guide->Email = $Email;   
           $guide->password= bcrypt($password);
    
          
            $guide->save(); 
            $data=Guide::all();      
    
            $guides = DB::select("select * from guides where (Email ='$Email') ");
            return view('guide.guideafterlogin',compact('guides'));
            
        

            }
    

            public function viewbooking($id){

                $data['id']=$id;

               
                $guide_id= DB::table('guide_bookings')
                        ->select('guide_bookings.*')
                        ->where('guide_id','=',$id)
                        ->first();


                   
                $details = DB::select("select * from clients where (id='$guide_id->client_id')");

                return view('guide.guidebooking',compact('details','guide_id'));


            }


            public function logout(){
    
                return view('/index');
            }
        





}
