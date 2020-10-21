<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Allowance extends Model
{
    use SoftDeletes;
	
	//protected $dates = ['created_at'];
	//protected $dates = [
     //   'created_at',
   // ];

   protected $dates = ['created_at', 'updated_at','deleted_at','published_at']; 
   // whatever other columns you want to use Carbon on ^.

  
	protected $fillable=['employee_id','gross'];
	
	
	public function employee(){
		return $this->belongsTo('App\Employee');
	}
	
	public function grossPay($allowaceAmount){
		$calc = $allowaceAmount;
		if($this->employee->full_time && !$this->over_time){
			return $this->gross = $this->employee->role->salary;
		}
		if(!$this->employee->full_time && $this->over_time){
			return $this->gross = $calc + $this->employee->role->salary;
		}
		return $this->gross = 0;
	}
}
