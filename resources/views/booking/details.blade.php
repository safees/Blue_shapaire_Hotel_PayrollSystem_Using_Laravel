@extends('layouts.temp')


@section('content')


@foreach( $details as $detail)
<div>



<div class="row" id="cusbr1">
        <div class="col-sm-1" id="formboder">
                    
        </div>
        <div class="col-sm-10" id="">
        <h3 id="topic"><i>Reservation Details</i></h3>
        <br><br>
            
        </div>
        <div class="col-sm-1" id="formboder">
                    
        </div>            
    </div>
<!--*******************************************************************-->
    <div class="row" id="cusbr2">
        <div class="col-sm-1" id="formboder">
                    
        </div>
        <div class="col-sm-5" id="">
        <h2><i>{{$detail->First_Name}} {{$detail->Last_Name}}</i></h2>
        <br><br>
            <p><b><i>Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->startdate}}-{{$detail->enddate}}</i>
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
            <h4><i>Room Details:{{$detail->RoomNo}}&nbsp{{$detail->RoomName}}&nbsp{{$detail->RoomType}} &nbsp Rs.{{$detail->Price}}/Night</i></h3>
            <br>
            
            <img src="/storage/{{$detail->image }}" alt="" width="100%">
            
            
            
            <p><b><i></i></b></p>
            
            <br> 
        </div>
        <div class="col-sm-1" id="formboder">
            
        </div>            
    </div>   
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
</div>



@endforeach

@endsection