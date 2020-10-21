@extends('layouts.temp')


@section('content')
<div class="" id="body">
<div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-10" id="">
                <h4 id="topic">Your Details</h4>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@foreach( $details as $detail)
<form action="{{ route('final',[ 'booking_id' => $detail->id ]) }}" method="post"> 
@endforeach
{{ csrf_field() }}
 <!--*******************************************************************--> 
 <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="First_Name">First Name:</label>
                <input type="text" class="form-control" id="First_Name" name="First_Name" placeholder="First Name">
                <br>
            </div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="Last_Name">Last Name:</label>
                <input type="text" class="form-control" id="Last_Name" name="Last_Name" placeholder="Last Name">
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
    
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-3" id="">
                <label for="Address1">Address Line 1:</label>
                <input type="text" class="form-control" id="Address1" name="Address1" placeholder="Address Line 1">
                <br>
            </div>
            <div  class="col-sm-3" id="">
                <label for="">Address Line 2:</label>
                <input type="text" class="form-control" id="Address2" name="Address2" placeholder="Address Line 2">
                <br>
            </div>
            <div  class="col-sm-4" id="">
                <label for="City">City:</label>
                <input type="text" class="form-control" id="City" name="City" placeholder="City">
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-3" id="">
                <label for="Adult">Adults:</label>
                <input type="Number" min="0" class="form-control" id="Adult" name="Adult" placeholder="">
                <br>
            </div>
            <div  class="col-sm-3" id="">
                <label for="Children">Children:</label>
                <input type="number" min="0" class="form-control" id="Children" name="Children" placeholder="">
                <br>
            </div>
            <div  class="col-sm-4" id="">
                <label for="Time">Estimated Arrival Time:</label>
                <input type="time" class="form-control" id="Time" name="Time" placeholder="">
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-4" id="">
                <label for="Email">Email Address:</label>
                <input type="email" class="form-control" id="Email" name="Email" placeholder="This is your Login email which will be useful to view & cancel your reservations.">
                <br>
            </div>
            <div  class="col-sm-3" id="">
                <label for="Contact_No">Telephone No:</label>
                <input type="text" class="form-control" id="Contact_No" name="Contact_No" placeholder="We’ll only contact you in an emergency">
                <br>
            </div>
            <div  class="col-sm-3" id="">
                <label for="password">Create Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="This is your Login password which will be useful to view & cancel your reservations.">
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-10" id="">
                <button type="submit" href="{{ route('final',[ 'booking_id' => $detail->id ]) }}" class="form-control submitbutton">Complete Reservation</button>
                <br>
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
<!--*******************************************************************-->
</form>
</div>



@endsection