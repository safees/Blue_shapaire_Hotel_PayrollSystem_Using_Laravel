<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy;


class VacancyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create() {
        return view('vacancy.vacancy');
    }

    public function store(Request $request) {

        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'salary'=>'required',
        ]);
    
   
        $tit = $request['title'];
        $des = $request['description'];
        $sal = $request['salary'];

        $vac = new Vacancy();
        
        $vac->title = $tit;
        $vac->description = $des;
        $vac->salary = $sal;
       
        $vac->save(); 
        $data=Vacancy::all();
 
        return view('vacancy.vacancy');
        }
    public function View(){

        $data=Vacancy::all();
     
        return view('vacancy.viewvacant')->with('views',$data);
       
    }





}
