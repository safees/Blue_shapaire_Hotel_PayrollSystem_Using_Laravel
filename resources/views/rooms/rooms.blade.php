@extends('layouts.app')

@section('content')

<hr>	
	<h1 class="text-center">Add Room Details</h1>	
<hr>
<br>
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
<div class="row">
          <div class="form-group col-md-2"></div>
          <div class="form-group col-md-8">
            <form action="/rooms" method="post" enctype="multipart/form-data" id="addroom-form">

                          {{ csrf_field() }}

                    
                    <div class="row">


                    <div class="form-group col-md-3">
                          <label for="Room No">Room No</label>
                          <input type="number" min="1" class="form-control" name="RoomNo" placeholder="">
                        </div>
        
                      <div class="form-group col-md-3">
                        <label for="Room Name">Room Name</label>
                        <select class="custom-select custom-select-lg mb-3"  name="RoomName">
                        <option value="">Select </option>
                        <option value="Delux">Delux</option>
                            <option value="Standard">Standard</option>
                            <option value="Luxury">Luxury</option>

                        </select>
                      </div>
                      
                      <div class="form-group col-md-3">
                        <label for="RoomType">Room Type</label>
                        <select class="custom-select custom-select-lg mb-3"  name="RoomType">
                        <option value="">Select </option>
                        <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Triple">Triple</option>
                            <option value="Family">Family</option>
                          
                            
                        </select>
                      </div>
                    
                    
                      <div class="form-group col-md-3">
                          <label for="Floor No">Floor No</label>
                          <select class="custom-select custom-select-lg mb-3"  name="FloorNo">
                          <option value="">Select </option>
                            <option value="Ground Floor">Ground Floor</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                          
                        </select>
                      </div>
                     
                     

                    </div>
                    

                    <div class="row">
                      <div class="form-group">
                        <div class="form-group col-md-12">
                        <br>
                          <label for="Price">Price</label>
                          <input type="text" class="form-control" name="Price" placeholder="40USD">
                        </div>
                      </div>

                    </div>

                  <div class="row">
                    <div class="form-group">
                      <div class="form-group col-md-12">
                        <label for="Description">Description</label>
                        <Textarea class="form-control" name="Description" type="text"></Textarea>
                      </div>
                    </div>
                  </div> 

                  <div class="row">
                      <div class="form-group">
                        <div class="form-group col-md-12">
                          <label for="image">Image</label>
                          <input type="file" class="form-control" name="image">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div> 

                  </form>
          </div>
          <div class="form-group col-md-2"></div>

      

</div>
<br>
<div>

<table class="table table-borderless table-dark">
  <thead>
    <tr>
    
    <th scope="col">Room No</th>
      <th scope="col">Room Name</th>
      <th scope="col">Room Type</th>
      <th scope="col">Floor No</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>

  @foreach($rooms as $room)
    <tr>
   
    <td>{{$room->RoomNo}}</td>
      <td>{{$room->RoomName}}</td>
      <td>{{$room->RoomType}}</td>
      <td>{{$room->FloorNo}}</td>
      <td>{{$room->Price}}</td>
      <td>{{$room->Description}}</td>
      <td><img src="/storage/{{$room->image }}" alt="Image" style="width:200px;height:200px;"></td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
  

@endsection