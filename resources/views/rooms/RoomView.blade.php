@extends('layouts.app')

@section('content')
       
<hr>	
	<h1 class="text-center"> View Room Details</h1>	
<hr>
<div>

<table class="table table-borderless table-dark">
  <thead>
    <tr>
    
    
      <th scope="col">Room Name</th>
      <th scope="col">Room Type</th>
      <th scope="col">Floor No</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  @foreach($Rupdates as $Rupdate)
    <tr>
   
   
      <td>{{$Rupdate->RoomName}}</td>
      <td>{{$Rupdate->RoomType}}</td>
      <td>{{$Rupdate->FloorNo}}</td>
      <td>{{$Rupdate->Price}}</td>
      <td>{{$Rupdate->Description}}</td>
      <td><img src="/storage/{{$Rupdate->image }}" alt="Image" style="width:200px;height:200px;"></td>
     <td><a href="/Update/{{$Rupdate->id}}" class="btn btn-danger">Update</a> </td>
    </tr>
    @endforeach
  </tbody>
</table>





</div>

  @endsection

  