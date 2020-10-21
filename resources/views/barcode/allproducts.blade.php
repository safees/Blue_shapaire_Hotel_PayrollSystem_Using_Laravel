@extends('layouts.app')

@section('content')

<hr>	
  <h1 class="text-center">Attendance Of Staff Members
  <h1 class="text-right">
  <?php
  $date= date("Y-m-d"); 
  echo "<font size=4>";
  echo "Date :" .$date;
  
  ?>
  	</h1></h1>
  <hr>
  
  
<div class="container">

    
 
    <div class="table-responsive">
                    <table class="table table-striped">
                      <thead style="align:center">
                        <tr>
                          <th>
                          </th>
                          <th style="text-align:center">
                            Full name
                          </th>
                          <th style="text-align:center">
                            NIC
                          </th>
                          <th style="text-align:center">
                            Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $products)
                        <tr>
                          <td style="text-align:center">
                            <img src="/storage/{{$products->pro }}" alt="Image" style="width:100px;height:100px;">
                          </td>
                          <td style="text-align:center">
                          {{$products->name}}
                          </td>
                          <td style="text-align:center">
                          {{$products->nic}}
                          </td>
                          @if($products->status)
                          <td style="text-align:center">Present</td>
                           @else
                        <td style="text-align:center">Not Present</td>
                        @endif
                         
                 </tr>
                        @endforeach 
                     </tbody>
                    </table>
                  </div>
    
</div>
     
@endsection
<!--

//$dteStart = new Time($in->updated_at);
//$dteEnd   = new Time($out->updated_at);

$dteDiff=strtotime($out->out_time)-strtotime($in->in_time);

//$dteDiff=$dteEnd-$dteStart;
$time=$dteDiff/60 ; 

if ($time < 540) {
 
  echo "half day";
  
} else {
  echo "full day";
}

?>  
 -->