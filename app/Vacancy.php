<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{

	protected $fillable=['title','description','salary'];
	
   public function applicants(){
		return $this->hasMany('App\Applicant');
	}
	
}
