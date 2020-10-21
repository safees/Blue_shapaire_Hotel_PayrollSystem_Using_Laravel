<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\App\Allowance;
use Illuminate\Http\Request;

use DB;
use App\Allowance;
use App\Payroll;
use App\Employee;
use App\Role;
use App\Attendance;
use Session;
use Paginate;


class AllowanceController extends Controller
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
      //  $employee = Employee::findOrFail($id);
    //return view('allowance.create')->with('employee',$employee);
    
    $user = Employee::findOrFail($id);
    $employee = DB::select('select * from allowances');
        return view('allowance.create',compact('user','employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id){
    
      $allowance = new Allowance();
      $allowanceAmount = request('allowance');
      $emp = Employee::find($id);
      $NIC=$emp->town;
      $salary = $emp->role->salary;
      $allowance->employee_id = $id;
      
      $attendence=DB::select(DB::raw("select absent from attendances where nic='{$NIC}'"));
      $attendenceuwu = DB::table('attendances')->where('nic', '=',$NIC)->first();
      
      $day=4;
     // dd($attendence);
     $absentdays = $attendenceuwu->absent;
     $absent=(($absentdays-$day)*1500);
      $allowance->gross = ($salary + $allowanceAmount-$absent);
      $user = Employee::findOrFail($id);
      $allowance->save();
    $employee = DB::select('select * from allowances');
       return view('allowance.allowance',compact('user','employee'));
     // return back();
     //return view('allowance.allowance');

   // return($absentdays);


	  //   $allowance = Allowance::create([
		// //	'allowance' => $request->allowance,
		// 	'employee_id' => $id
		// ]);
		
    // $allowance->grossPay(request('allowance'));
    
    return ($allowanceAmount);
		// $allowance->save();
		
		// Session::flash('success', 'Allowance Created');
		// return redirect()->route('allowances.show',['id'=>$id]);	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function allowanceIndex($id){
    $user = Employee::findOrFail($id);
    $employee = DB::select('select * from employees,allowances where employees.id=allowances.employee_id');
 
      //return view('stud_view',['users'=>$users]);
        return view('allowance.allowance',compact('user','employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
      
      $user = Employee::findOrFail($id);
      $employee = DB::select('select * from allowances');
          return view('allowance.create',compact('user','employee'));
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
      
		
		$allowance = Allowance::findOrFail($id);
		
		
		$allowance->save();		
		
		$allowance->grossPay();
		$allowance->save();
		
		Session::flash('success', 'Allowance Updated ready for download');
		return redirect()->route('allowances.show',['id'=>$allowance->employee_id]);			
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allowance=Allowance::findOrFail($id);
		$allowance->delete();
		
		Session::flash('success','Allowance Deleted');
		return redirect()->back();
    }
	public function bin(){
		$allowances=Allowance::onlyTrashed()->get();
		return view('allowance.bin')->with('allowances', $allowances);
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
