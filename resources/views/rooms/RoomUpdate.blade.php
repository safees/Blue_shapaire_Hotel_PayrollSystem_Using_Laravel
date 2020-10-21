@extends('layouts.app')

@section('content')
<hr>	
	<h1 class="text-center"> Update Room Details</h1>	
<hr>     
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif     

    
<div>


<form action="/UpdateRoom" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

<input type="hidden" class="form-control" name="id" value="{{$UpdateRoom->id}}">


<div class="row">


                    <div class="form-group col-md-3">
                          <label for="Room No">Room No</label>
                          <input type="number" min="1" class="form-control" name="RoomNo" placeholder="">
                        </div>

 

  <div class="form-group col-md-3">
    <label for="Room Name">Room Name</label>
    <select class="custom-select custom-select-lg mb-3"  name="RoomName" >
    <option selected>{{$UpdateRoom->RoomName}}</option>
    <option value="Superior">Superior</option>
        <option value="Premier">Premier</option>
        <option value="Luxury">Luxury</option>

    </select>
  </div>
  
  <div class="form-group col-md-3">
    <label for="RoomType">Room Type</label>
    <select class="custom-select custom-select-lg mb-3"  name="RoomType" >
    <option selected>{{$UpdateRoom->RoomType}}</option>
    <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Triple">Triple</option>
        <option value="Family">Family</option>
        <option value="Suite">Suite</option>
    </select>
  </div>
  
  
  <div class="form-group col-md-3">
      <label for="Floor No">Floor No</label>
      <select class="custom-select custom-select-lg mb-3"  name="FloorNo" >
         <option selected>{{$UpdateRoom->FloorNo}}</option>
         <option value="Ground Floor">Ground Floor</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    </div>
   
 
  <div class="form-group col-md-4">
    <label for="Price">Price</label>
    <input type="text" class="form-control" name="Price" value="{{$UpdateRoom->Price}}">
  </div>

 
  <div class="form-group col-md-4">
    <label for="Description">Description</label>
    <input type="text" class="form-control" name="Description" value="{{$UpdateRoom->Description}}">
  </div>
  
  <div class="form-group">
  <div class="form-group col-md-4">
    <label for="image">Image</label>
    <img src="/storage/{{$UpdateRoom->image }}" alt="Image" style="width:200px;height:200px;">
    <input type="file" class="form-control" name="image" value="{{$UpdateRoom->image }}"> 
  </div>
  
  
  <button type="submit" class="btn btn-primary">Save</button>
 
</form>

</div>


@endsection