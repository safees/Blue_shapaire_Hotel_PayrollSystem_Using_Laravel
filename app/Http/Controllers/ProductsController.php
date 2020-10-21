<?php

namespace App\Http\Controllers;

use App\Products;
use App\Staffin;
use App\Staffout;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function search(){
        
        return view('barcode.search');
       
    }

    public function view(){

        $data=Products::all();
        
        return view('barcode.allproducts',compact('data'));
       
    }



    public function update(){

        $updateData=Products::all();
        //dd($updateData);

        return view('products')->with('products',$updateData);
       
    }

      public function UpdateAsPresent(Request $request,$id){

        $updateData=Products::find($id);
        $updateData->status=1;
        $updateData->save();
        //return "You are there";

        $details=DB::table('products')
                ->select('id')
                ->where([['status','=',1],['id','=', $id]])
                ->get();
              

               $details = new Staffin;
                $saved = $details->present($request);
        
                //$saved = response of my_method in model
              
                if($saved){
                    return redirect('/s');
                }

 
    }

   public function UpdateAsNotPresent(Request $request,$id){

        $updateData=Products::find($id);
        $updateData->status=0;
        $updateData->save();


        $details=DB::table('products')
                ->select('id')
                ->where([['status','=',0],['id','=', $id]])
                ->get();
      

       $details = new Staffout;
        $saved = $details->notpresent($request);

        //$saved = response of my_method in model

        if($saved){
            return redirect('/s');
        }
       
    }


}
