<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnualIncome extends Model

{
  
    public $table = "annual_incomes";

    public function allowances(){
		return $this->hasMany('App\Allowance');
  }
  public function income(){

		return $this->belongsTo('App\Income');
         }
         protected $dates = ['created_at'];
}
