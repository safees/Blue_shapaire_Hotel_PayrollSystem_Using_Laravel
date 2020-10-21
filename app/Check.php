<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $fillable = [
        'check_id', 
        'start_date',
       'end_date',
      
    ];

    public function cheks(){

        return $this->belongsTo('App\Booking');
           }
    
    public function rooms(){

        return $this->hasMany('App\Room');
            }
    
    public function bookings(){

         return $this->belongsTo('App\Booking');
                }
                    
                
}
