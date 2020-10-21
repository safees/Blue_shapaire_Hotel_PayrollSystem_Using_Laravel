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
use App\AnnualIncome;
use App\Http\Requests;
use Illuminate\Http\Request;

class AnnualIncomeController extends Controller
{

    public function create(){
          
        $monthly_income = DB::table('mothly_incomes');
        $annual_incomes = DB::table('annual_incomes');
        return View::make('income.monthlyIncomecreate')
        ->with(compact('annual_incomes'))
        //->with(compact('monthIncome'))
        ->with(compact('monthly_income'));
       //dd($mnthlyIncomeAllowance);
       
       
    }


    public function annualIncome(){

        $income = new AnnualIncome();
  
        $vat=120000;
       
        $monthly_income_allowance = DB::table('allowances')->sum('gross');
        $monthly_income_payroll = DB::table('payrolls')->sum('gross');
        $monthly_income = DB::table('mothly_incomes')->get();
        $annual_incomes = DB::table('annual_incomes')->get();
       // $income->annualincome=(($monthly_income)-$vat);
        $income->save();
//dd($monthly_income);
       // $users = DB::select('select year(created_at) as year, month(created_at) as month, sum(monthlyincome) as monthly_income from mothly_incomes group by year(created_at), month(created_at)');
        $income->annualincome=(($monthly_income_allowance+$monthly_income_payroll)-$vat);
        $income->save();
//        return view('total_amount',['users'=>$users]);

        $players = AnnualIncome::all();
        return View::make('income.annualIncome')
        ->with(compact('annual_incomes'))
        ->with(compact('players'))
        ->with(compact('monthly_income'));
       //dd($mnthlyIncomeAllowance);
 
        //return view('income.annualIncome',compact('players'));
  
      }
}
