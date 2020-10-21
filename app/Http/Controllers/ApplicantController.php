<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicantid;
use App\Vacancy;
use App\Applicant;

class ApplicantController extends Controller
{
    public function userview() {

        $data=Vacancy::all();
        return view('vacancy.applicant',compact('data'));
    }
   

    public function register(Request $request,$id){
       $this->validate ($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'nic'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'address'=>'required',
            'workex'=>'required',
        ]);
      
        
      
    /*    $applicant->vacancyid = $id;
        $applicant->firstname = $request->input('firstname');
        $applicant->lastname= $request->input('lastname');
        $applicant->nic = $request->input('nic');
        $applicant->email= $request->input('email');
        $applicant->telephone= $request->input('telephone');
        $applicant->address= $request->input('address');
        $applicant->workex= $request->input('workex');*/

        $data['id']=$id;
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        $nic = $request['nic'];
        $email = $request['email'];
        $telephone = $request['telephone'];
        $address = $request['address'];
        $workex = $request['workex'];


        $applicant = new Applicant;

        $applicant->vacancyid = $id;
        $applicant->firstname = $firstname;
        $applicant->lastname = $lastname;
        $applicant->nic = $nic;
        $applicant->email = $email;
        $applicant->telephone = $telephone;
        $applicant->address = $address;  
         $applicant->workex = $workex;


        $applicant->save();
       

        $data=Applicant::all();      
       //dd($data);
     return view('vacancy.applicant')->with('data',$data);
     
}

}
