@extends('layouts.app')

@section('content')

<hr>	
	<h1 class="text-center">Add Order</h1>	
<hr>
<br>

<div>
<div class="row">
          <div class="form-group col-md-2"></div>
          <div class="form-group col-md-8">
            <form action="/getorder" method="get" enctype="multipart/form-data" id="addroom-form">

                          {{ csrf_field() }}

                    <div class="row">
                      <div class="form-group">
                        <div class="form-group col-md-12">
                        <br>
                          <label for="room_no">Room No</label>
                          <input type="text" class="form-control" name="room_no" placeholder="1">
                        </div>
                      </div>

                    </div>

                    <div class="form-group col-md-3">
                        <label for="RoomType">Order Type</label>
                        <select class="custom-select custom-select-lg mb-3"  name="order">
                       
                        <option value="food">Food</option>
                            <option value="water">Water</option>
                            <option value="other">Other</option>
                            
                          
                            
                        </select>
                      </div>




                  <div class="row">
                    <div class="form-group">
                      <div class="form-group col-md-12">
                        <label for="Description">Order Price</label>
                        <input type="text" class="form-control" name="price" placeholder="40USD">
                      </div>
                    </div>
                  </div> 

                

                  <div class="row">
                    <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Add Order</button>
                    </div>
                  </div> 

                  </form>
          </div>
          <div class="form-group col-md-2"></div>

      

</div>


@endsection
