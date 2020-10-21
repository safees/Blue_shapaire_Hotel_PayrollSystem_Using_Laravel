<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    public $table = "mothly_incomes";

    public function allowances(){
		return $this->hasMany('App\Allowance');
  }
  public function annualincome(){

		return $this->belongsTo('App\AnnualIncome');


  }
  protected $dates = ['created_at'];
}
