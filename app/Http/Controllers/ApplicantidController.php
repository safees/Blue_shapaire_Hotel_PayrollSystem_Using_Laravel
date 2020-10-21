<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicantid;

class ApplicantidController extends Controller

{
    
    public function apply($id) {


        $data['id']=$id;

        $applicantid = new Applicantid;

        $applicantid ->applicantid = $id;

        $applicantid->save();

        //$data=Applicantid::all();

        $data=Applicantid::where('applicantid', $id)->get()->all();;
        return view('vacancy.vacaplicant')->with('details',$data);
    }
}
