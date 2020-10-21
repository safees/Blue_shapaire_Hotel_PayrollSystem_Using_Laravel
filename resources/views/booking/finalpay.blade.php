@extends('layouts.app')

@section('content')

<hr>	
	<h1 class="text-center">Final Payment</h1>	
<hr>
<br>

<div class="row" id="">
@foreach( $details as $client) 
        <div class="col-sm-2" id=""></div>
        <div class="col-sm-8 card" id="">
        <h3><br>Client Name:</h3>
            <h2>{{$client->First_Name}}&nbsp{{$client->Last_Name}}</h2>
            
            <table class="table table-hover">
                <tr>
                    <td>Room No</td>
                    <td>:</td>
                    <td>{{$client->RoomNo}}</td>
                </tr>
                <tr>
                    <td>Room Type</td>
                    <td>:</td>
                    <td>{{$client->RoomName}} {{$client->RoomType}}</td>
                </tr>
                <tr>
                    <td>Arrival Date</td>
                    <td>:</td>
                    <td>{{$client->startdate}}</td>
                </tr>
                <tr>
                    <td>Room Charge</td>
                    <td>:</td>
                    <td>Rs.{{$client->Price}}.00</td>
                </tr>
                <tr>
                    <td>Advance</td>
                    <td>:</td>
                    <td>Rs.5000.00</td>
                </tr>
                @foreach( $data as $pay) 
                <tr>
                    <td>Final Payment</td>
                    <td>:</td>
                    <td><b><i>Rs.{{$pay->finalpay}}.00</i></b></td>
                </tr>
                @endforeach
            </table>
        </div>
        @endforeach
        <div class="col-sm-2" id=""></div>
    </div>

@endsection
