<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'id', 
        'RoomName',
       'RoomType',
       'FloorNo',
       'status'
    ];

public function bookings(){

return $this->hasMany('App\Booking');
}
    

public function checks(){

    return $this->hasMany('App\Check');
    }
        
}

