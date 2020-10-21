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
            <form action="/finalpayment" method="get" enctype="multipart/form-data" id="addroom-form">

                          {{ csrf_field() }}

                    <div class="row">
                      <div class="form-group">
                        <div class="form-group col-md-12">
                        <br>
                          <label for="room_no">Enter email</label>
                          <input type="text" class="form-control" name="email" placeholder="">
                        </div>
                      </div>

                    </div>


                  <div class="row">
                    <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Calculate Final Payment</button>
                    </div>
                  </div> 

                  </form>
          </div>
          <div class="form-group col-md-2"></div>

      

</div>


@endsection
