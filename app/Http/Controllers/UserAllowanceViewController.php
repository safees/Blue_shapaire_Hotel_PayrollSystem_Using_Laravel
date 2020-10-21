<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use App\Payroll;
use App\Employee;
use App\Role;
use Session;
use Paginate;
use App\UserPayrollView;
use Illuminate\Http\Request;


class UserAllowanceViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id){
        $employee = Employee::findOrFail($id);
		return view('allowance.create')->with('employee',$employee);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function AllowanceIndex(){
		$user = DB::select('select * from employees');
        $employees = DB::select('select * from employees,allowances where employees.id=allowances.employee_id');
       $role=DB::select('select * from roles');
        return view('user.payroll',compact('user','employees','role'));
        //return view('user.payroll')->with($employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allowance=Payroll::findOrFail($id);
		$allowance->delete();
		
		Session::flash('success','Allowance Deleted');
		return redirect()->back();
    }
	public function bin(){
		$allowances=Allowance::onlyTrashed()->get();
		return view('payroll.bin')->with('allowances', $allowances);
	}
	
	public function restore($id){
		$allowance=Allowance::withTrashed()->where('id', $id)->first();
		$allowance->restore();
		
		Session::flash('success', 'Allowance row is restored.');
		return redirect()->route('employees.index');
	}
	
	public function kill($id){
		$allowance=Allowance::withTrashed()->where('id', $id)->first();		
		$allowance->forceDelete();
		
		Session::flash('success', 'Allowance permanently destroyed.');
		return redirect()->route('employees.index');
	}
}
