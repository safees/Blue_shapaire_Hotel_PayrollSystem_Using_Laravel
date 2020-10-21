<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    
    protected $fillable = [
        'id', 
        'room_id',
        'start_date',
        'end_date',
       'status',
       'room_id'
    ];  




    public function rooms(){

        return $this->belongsTo('App\Room');
        }

    public function cheks(){

         return $this->belongsTo('App\Check');
            }
    

     public function online_payments(){

          return $this->belongsTo('App\Online_payment');
                }
        
        


}
