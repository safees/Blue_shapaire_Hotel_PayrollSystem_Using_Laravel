@extends('layouts.app')

@section('content')
<hr>	
	<h1 class="text-center">In & Out Details</h1>	
	<hr>



<div  class="row">
    <div  class="col-sm-1" id=""></div>
    @foreach( $details as $p)
    <div  class="col-sm-2" id="">
      <img src="/storage/{{$p->pro }}" alt="Image" style="width:1000%;">
    </div>
    <div  class="col-sm-4" id="">
     
      Name:{{$p->name}} <br>
      NIC:{{$p->nic}}
   
    </div>
    @endforeach 
    @foreach( $dates as $data)
    <div  class="col-sm-4" id="">
      From:{{$data->start_date}} To:{{$data->end_date}}<br>
      Total Days:{{$data->total}} <br>
      Present:{{$data->present}} <br>
      Absent:{{$data->absent}} <br>
    </div>
    @endforeach 
    <div  class="col-sm-1" id=""></div>
</div>


  <div>


<div class="row">
        <div class="col-sm-1" id=""></div>
        <div class="col-sm-4" id="">
        <!--*******************************************************************-->
        <!--*******************************************************************-->
        <table class="table table-borderless table-dark">
  <thead>
    <tr>
      <th scope="col">Date</th> 
      <th scope="col">In Time</th>
    </tr>
  </thead>
  <tbody>

  @foreach( $staffIn as $in)
    <tr>
      <td>{{$in->date}}</td>  
      <td>{{$in->in_time}}</td>
      </tr>
  @endforeach
   
  </tbody>
</table>
        <!--*******************************************************************-->
        <!--*******************************************************************-->
        </div>
        <div class="col-sm-4" id="">
        <!--*******************************************************************-->
        <!--*******************************************************************-->
   <table class="table table-borderless table-dark">
  <thead>
    <tr>
      <th scope="col">Out Time</th>
    </tr>
  </thead>
  <tbody>

 
  @foreach( $staffOut as $out)
  
    <tr>
      <td>{{$out->out_time}}</td>
     
    </tr>
    @endforeach 
   
  </tbody>
</table>

        <!--*******************************************************************-->
        <!--*******************************************************************-->
        </div>
        <div class="col-sm-1" id=""></div>
</div>
<div>

<div class="row">
        <div class="col-sm-1" id=""></div>
        <div class="col-sm-1" id=""></div>
        <div class="col-sm-7" id=""></div>
        <div class="col-sm-2" id="">
        <button onclick="myFunction()">Print Attendance Report</button>
        </div>
        <div class="col-sm-1" id=""></div>
</div>



</div>
<script>
function myFunction() {
  window.print();
}
</script>
</div>  
       
@endsection