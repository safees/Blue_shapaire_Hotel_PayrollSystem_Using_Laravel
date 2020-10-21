<?php

namespace App\Http\Controllers;
use App\Products;
use App\Staffin;
use App\Staffout;
use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttendanceController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function create(){

        return view('barcode.Attendance');
       
    }

    public function Report(Request $request){

        $NIC = $request['nic'];
        $start_date = $request['start_date'];
        $end_date = $request['end_date'];

        $details = DB::select( DB::raw("SELECT* FROM products WHERE nic = '$NIC' ") );

  
      $staffIn= DB::table('staffins')
                ->select('staffins.*') 
                -> whereBetween( 'staffins.date', [$start_date, $end_date])
                ->whereRaw ("
                 staffins.staff_id IN
                     (select products.id from products
                     where(products.nic = '{$NIC}'))")
                ->get() ;

       $staffOut= DB::table('staffouts')
                ->select('staffouts.*')
                -> whereBetween( 'staffouts.date', [$start_date, $end_date])
                ->whereRaw ("
                 staffouts.staff_id IN
                     (select products.id from products
                     where(products.nic = '{$NIC}'))")
                ->get() ;
      
        $to = \Carbon\Carbon::createFromFormat('Y-m-d', $start_date);
        $from = \Carbon\Carbon::createFromFormat('Y-m-d', $end_date);
        $diff_in_days = $to->diffInDays($from);
        
        $total=($diff_in_days+1);
        $present=count($staffIn);
        $absent=($diff_in_days+1)-$present;
              
        $attendance = new Attendance();
        
        $attendance->nic = $NIC;
        $attendance->start_date = $start_date;
        $attendance->end_date = $end_date;
        $attendance->total = $total;
        $attendance->present = $present;
        $attendance->absent = $absent;
       
        
        $attendance->save(); 
        $reports=Attendance::all();

        $now=now();
                
        $dates = DB::select( DB::raw("SELECT DISTINCT start_date,end_date,total,present,absent FROM attendances WHERE (start_date = '$start_date') AND (end_date = '$end_date') AND (updated_at = '$now') ") );
        
        return view('barcode.report',compact('staffIn','staffOut','details','dates'));
            
    }}

      //    $data= (new Carbon('11:27:11'))->diff(new Carbon($out_time))->format('%h:%I');
      //    dd($data);
              //  $s = '06/10/2011 19:00:02';
             //   $date = $out_time-$in_time;
            //  dd($date);
             // echo date('d/M/Y H:i:s', $date);

  //
  //<td>{{ date('G:i', strtotime($out->out_time) - strtotime($in->in_time)) }}</td>
           
          //  $startTime = Carbon::parse($in_time)->format('H:i:s');;
         //   $finishTime = Carbon::parse($out_time);
       ///  dd($startTime);
          //  $totalDuration = $finishTime->diffInSeconds($startTime);
          //  dd($totalDuration);


       

          //getting time difference in seconds.
         // $secondsDifference=strtotime(date($out->out_time))-strtotime($in->in_time);
          //converting seconds to minutes.
        //  echo ($secondsDifference);
          

    //  $total=$in_time->diffForHumans($out_time);
        // dd(gmdate('H:i:s', $totalDuration));
    // $total = array($total);
  // dd($total);


     //$data = $data->map(function ($total){
       // return get_object_vars($total);

      //     $to = \Carbon\Carbon::createFromFormat('Y-m-d', $start_date);
       //    dd($to);
//$in = Carbon::parse($in_time)->format('H:i:s');
//$out = Carbon::parse($out_time)->format('H:i:s');
//$diff = $in->diffInSeconds($out);


        //  $in = \Carbon\Carbon::createFromFormat('H:s:i',$in_time);
       //    dd($in);
       //   $out = \Carbon\Carbon::createFromFormat('H:i:s',$out_time);
    //  $diff_in_days = $in_time->diffInSeconds($out_time)->format('%H:%I:%S');
     //    print_r($diff_in_days);
/*
     $days = $created_at->diffInDays($updated_at);
      $hours = $created_at->diffInHours($updated_at->subDays($days));
      $hours = $created_at->diffInHours($updated_at);
         $minutes = $created_at->diffInMinutes($updated_at->subHours($hours));
          $seconds = $created_at->diffInSeconds($updated_at->subMinutes($minutes));
          return CarbonInterval::days($days)->hours($hours)->minutes($minutes)->seconds($seconds)->forHumans(); 
*/
      //    $diff_in_days = $created_at->diffInMinutes($updated_at);
        //  dd($diff_in_days)

      //   $now = Carbon::now();
//echo $diff_in_hours->toTimeString();




//echo $now;
/*
<?php
//$dteStart = new Time($in->updated_at);
//$dteEnd   = new Time($out->updated_at);

$dteDiff=strtotime($out->out_time)-strtotime($in->in_time);
$time=$dteDiff/60 ; 

if ($time < 540) {
  echo "half day";
  
} else {
  echo "full day";
}

?>

</td>
<td>{{$out->out_time}}</td>
    @foreach( $staffOut as $out) 