<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){

        return view('index');
       
    }

    public function tour(){

        return view('tour.tour');
       
    }


    public function about_us(){

        return view('about_us');

       
    }

    public function display(){

        return view('guide.regis');
       
    }


}
