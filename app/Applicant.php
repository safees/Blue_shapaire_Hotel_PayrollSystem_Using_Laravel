<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{

	protected $fillable=['firstname','lastname','address',
	'nic','email','telephone','workex'];

	
    public function vacancies(){
		return $this->hasMany('App\Vacancy');
	}








}
