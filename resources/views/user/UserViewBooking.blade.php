@extends('layouts.tempsign')


@section('content')
       
@foreach( $details as $detail)
<div>



<div class="row" id="cusbr1">
        <div class="col-sm-1" id="formboder">
                    
        </div>
        <div class="col-sm-8" id="">
        <h3 id="topic"><i>Reservation Details</i></h3>
        <br><br>
            <h2><i>{{$detail->First_Name}} {{$detail->Last_Name}}</i></h2>
        </div>
        <div class="col-sm-2" >
        <h3 id="topic"><i>&nbsp</i></h3>
        <br><br>
        
      
        <br>
    </div>
        <div class="col-sm-1" id="formboder">
                    
        </div>            
    </div>
<!--*******************************************************************-->
    <div class="row" id="cusbr2">
        <div class="col-sm-1" id="formboder">
                    
        </div>
        <div class="col-sm-5" id="">
        
            <p><b><i>Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>From: {{$detail->startdate}} To: {{$detail->enddate}}</i>
            </p>
            <br>
            <p><b><i>Estimated Arrival Time :</i></b>
            <i>{{$detail->Time}}</i>
            </p>
            <br>
            <p><b><i>Adults  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->Adult}}</i>
            </p>
            <br>
            <p><b><i>Children &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->Children}}</i>
            </p>
            <br>
            <p><b><i>Address  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->Address1}},
            {{$detail->Address2}},
            {{$detail->City}}
            </i>
            </p>
            <br>
            <p><b><i>E-mail  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->Email}}</i>
            </p>
            <br>
            <p><b><i>Telephone No  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->Contact_No}}</i>
            </p>
            <br><br>
        </div>
        <div class="col-sm-5" id="">
        
            <h4><b><i>Room No:{{$detail->RoomNo}}<b><i></h4><br>
            <h4><b><i>{{$detail->RoomName}}&nbsp{{$detail->RoomType}}:Rs.{{$detail->Price}}</i></b></h4>
            
            <img src="/storage/{{$detail->image }}" alt="" width="100%">
            
            <p><b><i></i></b></p>
            <br> 
        </div>
        <div class="col-sm-1" id="formboder">
            
        </div>            
    </div>   
<!--*******************************************************************-->
<div class="row" >
        
        <div class="col-sm-1" id="formboder">
          
        </div>
        <div class="col-sm-10" >
        
            <a type="submit" href="/userdelete/{{$detail->booking_id}}"><button class="form-control submitroom" >Cancel Booking</button></a>
            <br><br><br>
        </div>
        <div class="col-sm-1" id="formboder">
          
        </div>
    </div>
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
</div>

@endforeach

  @endsection