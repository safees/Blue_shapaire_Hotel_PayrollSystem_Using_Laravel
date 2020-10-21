<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

 
    public function store(Request $request)
    {
       /* $employee = new payment([
            'nic' => $request->get('nic'),
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'dob' => $request->get('dob'),
            'address' => $request->get('address'),
            'city' => $request->get('city'), 
            'gender' => $request->get('gender'),
            'designation' => $request->get('designation'),
            'department' => $request->get('department'),
            'tel_home' => $request->get('tel_home'),
            'tel_mobile' => $request->get('tel_mobile'),
            'date_of_joining' => $request->get('date_of_joining'),
            'salType' => $request->get('salType'),
            'salAmount' => $request->get('salAmount'),


        ]);
        $employee->save();
        return redirect()->route(employee)->with('success','Data Added');*/

        employee::create($request->all());
        return"Record added Successfully";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
