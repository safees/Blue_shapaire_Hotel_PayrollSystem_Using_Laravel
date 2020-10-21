<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
use App\Allowance;
use App\Income;
use Session;
use Paginate;
use View;
//use Collection\latest;
use App\UserPayrollView;
use Illuminate\Http\Request;

class IncomeController extends Controller
{

      public function create(){
            $income = new Income();
            $currentMonth = date('m');
            $payrollSalary = DB::table("payrolls")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('salary');
      $salary = DB::table("allowances")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('salary');
     $allowance = DB::table("allowances")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('alowance');
      $over_time_salary = DB::table("payrolls")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('over_time_salary');
      $tour_bookings = DB::table("tour_bookings")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('payment');
      $bookings = DB::table("bookings")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('payment');
            $mnthlyIncomeAllowance =  DB::table('allowances')
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get();
            $mnthlyIncomePayroll = DB::table('payrolls')
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get();
            $monthIncome = DB::table('mothly_incomes')
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get();
            $TourBooking =  DB::table('tour_bookings')
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get();
            $Booking = DB::table('bookings')
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get();
       $income->monthlyincome=($allowance+$salary+$over_time_salary+$payrollSalary+$tour_bookings+$bookings);
      $income->save();

        $players = Income::all();
            return View::make('income.monthlyIncomecreate')
            ->with(compact('mnthlyIncomeAllowance'))
            ->with(compact('monthIncome'))
            ->with(compact('TourBooking'))
            ->with(compact('Booking'))
            ->with(compact('players'))
            ->with(compact('mnthlyIncomePayroll'));
           //dd($mnthlyIncomeAllowance);
           
           
        }
/*
    public function monthlyIncome(){

        $income = new Income();

      $currentMonth = date('m');
      $payrollSalary = DB::table("payrolls")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('salary');
      $salary = DB::table("allowances")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('salary');
     $allowance = DB::table("allowances")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('alowance');
      $over_time_salary = DB::table("payrolls")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('over_time_salary');
      $tour_bookings = DB::table("tour_bookings")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('payment');
      $bookings = DB::table("bookings")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->get()->sum('payment');

        
       
       
        $monthIncome = DB::table('mothly_incomes')
        ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
        ->get();
        $mnthlyIncomeAllowance =  DB::table('allowances')
        ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
        ->get();
        $mnthlyIncomePayroll = DB::table('payrolls')
        ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
        ->get();
        $TourBooking =  DB::table('tour_bookings')
        ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
        ->get();
        $Booking = DB::table('bookings')
        ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
        ->get();


        $income->monthlyincome=($allowance+$salary+$over_time_salary+$payrollSalary);
        $income->save();

        $players = Income::all();
        return View::make('income.monthlyIncomecreate')
            ->with(compact('players'))
            ->with(compact('monthIncome'))
            ->with(compact('mnthlyIncomePayroll'))
            ->with(compact('Booking'))
            ->with(compact('TourBooking'))
            ->with(compact('mnthlyIncomeAllowance'));
            
      
      }
*/
}

