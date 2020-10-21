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


class UserPayrollViewController extends Controller
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
		return view('payroll.create')->with('employee',$employee);
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
    public function payrollIndex(){
		$user = DB::select('select * from employees');
        $employees = DB::select('select * from employees,payrolls where employees.id=payrolls.employee_id');
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
        $payroll=Payroll::findOrFail($id);
		$payroll->delete();
		
		Session::flash('success','Payroll Deleted');
		return redirect()->back();
    }
	public function bin(){
		$payrolls=Payroll::onlyTrashed()->get();
		return view('payroll.bin')->with('payrolls', $payrolls);
	}
	
	public function restore($id){
		$payroll=Payroll::withTrashed()->where('id', $id)->first();
		$payroll->restore();
		
		Session::flash('success', 'payroll row is restored.');
		return redirect()->route('employees.index');
	}
	
	public function kill($id){
		$payroll=Payroll::withTrashed()->where('id', $id)->first();		
		$payroll->forceDelete();
		
		Session::flash('success', 'payroll permanently destroyed.');
		return redirect()->route('employees.index');
	}
}
