<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=['First_Name','Last_Name','Address1','Address2','City',
		'Adult','Children','Time','Email','Contact_No','password','booking_id'];
  

    public function bookings(){

      return $this->hasMany('App\Booking');
      }
          
      
      public function checks(){
      
          return $this->hasMany('App\Check');
          }
              
      public function rooms(){

          return $this->hasMany('App\Room');
            }
    
       public function online_payments(){

              return $this->belongsTo('App\Online_payment');
                    }
            
}
