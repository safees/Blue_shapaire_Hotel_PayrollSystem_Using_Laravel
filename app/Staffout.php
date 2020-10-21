<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Staffout extends Model
{
    public function notpresent($request)
    {
        
            $this->staff_id = $request->id;
    
            $request['date']=date('Y-m-d');
            $request['time']=now();
    
            $this->date = $request->date;
            $this->out_time = $request->time;
    
            $saved = $this->save(); 
    
            //save method response bool
    
            return $saved;
    

    }
 

}
