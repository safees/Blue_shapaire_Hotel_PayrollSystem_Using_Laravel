@extends('layouts.app')

@section('content')
<hr>	
	<h1 class="text-center">Check Attendance Details</h1>	
	<hr>

<div>
<form action="report" method="get" enctype="multipart/form-data" id="report-form">

        {{ csrf_field() }}

 <div class="row">
 
    <div class="form-group">
    <div class="form-group col-md-3"></div>
      <div class="form-group col-md-6">
      <br>
        <label for="NIC">Enter your NIC</label>
        <input type="text" class="form-control" name="nic">
      </div>
    </div>

  </div>
  <div class="row">
    <div class="form-group">
    <div class="form-group col-md-3"></div>
      <div class="form-group col-md-6">
      <br>
        <label for="from">From</label>
        <input type="date" class="form-control" name="start_date">
      </div>
    </div>

  </div>
  <div class="row">
    <div class="form-group">
    <div class="form-group col-md-3"></div>
      <div class="form-group col-md-6"> 
      <br>
        <label for="date">To</label>
        <input type="date" class="form-control" name="end_date">
      </div>
    </div>

  </div>


  <div class="row">
  <div class="form-group col-md-3"></div>
  <div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div> 

</form>
</div>

@endsection