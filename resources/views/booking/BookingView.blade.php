@extends('layouts.app')

@section('content')
<hr>	
	<h1 class="text-center">View Reservation Details</h1>	
	<hr>

<div>

<table class="table table-borderless table-dark">
  <thead>
    <tr>
      <th scope="col">Client Name</th>
      <th scope="col">Room No</th> 
      <th scope="col">Room Name</th> 
      <th scope="col">Room Type</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  @foreach( $details as $detail)
    <tr>
      <td>{{$detail->First_Name}} {{$detail->Last_Name}}</td>  
      <td>{{$detail->RoomNo}}</td>
      <td>{{$detail->RoomName}}</td>
      <td>{{$detail->RoomType}}</td>
      <td>{{$detail->startdate}}</td>
      <td>{{$detail->enddate}}</td>
      <td>{{$detail->Email}}</td>
      <td>{{$detail->Contact_No}}</td>
      <td><a href="/Delete/{{$detail->booking_id}}" class="btn btn-danger">Cancel</a></td>
    </tr>
    @endforeach
  </tbody>
</table>





</div>

  @endsection