@extends('layouts.temp')


@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 

<div class="row" id="rr1">
        
        <div class="col-sm-6"><img src="images/room_4.jpg" alt=""></div>
        <div class="col-sm-6" id="roomdes">
            <br>
            <h2 id="roomdesh">Standard Single Room</h2>
            <p>
                <br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Bed: 1 single<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Air conditioning<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Shower<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Bathroom<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Slippers<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Telephone<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Flat-screen TV<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Balcony<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Tea/Coffee maker<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Outdoor dining area<br>
                <br>
                <span id="rate">35 USD</span> / Night
            </p>
            
        </div>
        
    </div>
    <br>
    <div class="row" id="rr1">
       
        <div class="col-sm-6" id="roomdes">
            <br>
            <h2 id="roomdesh">Dulex Double Room</h2>
            <p>
                <br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Beds: 1 double<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Safety Deposit Box<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Seating Area<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Bath or Shower<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Slippers<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Telephone<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Flat-screen TV<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Refrigerator<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Tea/Coffee maker<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Outdoor furniture<br>
                <br>
                <span id="rate">40 USD</span> / Night
            </p>
            
        </div>
        <div class="col-sm-6"><img src="images/room_1.jpg" alt=""></div>
      
            
        </div>
    </div>
    <br>
    <div class="row" id="rr1">
        <div class="col-sm-1" id="rre"></div>
        <div class="col-sm-5"><img src="images/room_3.jpg" alt=""></div>
        <div class="col-sm-5" id="roomdes">
            <br>
            <h2 id="roomdesh">Luxury Double Room </h2>
            <p>
                <br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Beds: 1 double<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Air conditioning<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Laptop safe<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Outdoor dining area<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Bathroom<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Telephone<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Flat-screen TV<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Refrigerator<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Wake-up service<br>
                <i class="fa fa-angle-double-right" style="font-size:24px" id="roominc"></i> Private entrance<br>
                <br>
                <span id="rate">50 USD</span> / Night
            </p>
            
        </div>
        <div class="col-sm-1" id="rre"></div>
    </div>
    <br>


       
@endsection

