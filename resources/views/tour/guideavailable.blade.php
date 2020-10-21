@extends('layouts.tempnew')


@section('content')
<div class="" id="body">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->

<div class="" id="body">
    <div  class="row">
    <div class="col-sm-1" id="formboder"></div>
        <div  class="col-sm-10" id="">


            <h1 id="topic">Additional Info</h1>
            <p><ul>
<li>One day tours</li>
<li>Provide best guide for your journey</li>
<li>The payment is non-refundable and cannot be changed or cancelled</li>
<li>Confirmation will be received at time of booking</li>
<li>Not wheelchair accessible</li>
<li>Not recommended for travelers with back problems</li>
<li>Not recommended for pregnant travelers</li>
<li>No heart problems or other serious medical conditions</li>
<li>Most travelers can participate</li>
</ul>
            </p>
        </div>
        <div class="col-sm-1" id="formboder"></div>
    </div>

<!--*******************************************************************--> 
<br>
<div  class="row">
    <div class="col-sm-1" id="formboder"></div>
    <div  class="col-sm-10" id="">
<!--*******************************************************************--> 
            @foreach($tour_details as $tour)
            <h4 id="topic">{{$tour->date}}&nbsp-&nbsp{{$tour->tour}}</h4>
            @endforeach
<!--*******************************************************************--> 
<!--*******************************************************************--> 
<!--*******************************************************************--> 
            @foreach($available_guides as $guide)
    </div>
    <div class="col-sm-1" id="formboder"></div>
</div>


<div  class="row">
    <div class="col-sm-1" id="formboder"></div>
    <div  class="col-sm-10" id="formboder"></div>
    <div class="col-sm-1" id="formboder"></div>
</div>

<div class="row" id="">
    <div class="col-sm-1" id="formboder"></div>
    <div class="col-sm-1" id="">
    <img src="/storage/{{$guide->Pro }}" alt="Image" style="width:100%;">
    </div>
    <div class="col-sm-6" id="">
        <div class="">
            <h4 class="card-title">{{$guide->First_Name}}&nbsp&nbsp{{$guide->Last_Name}}</h4>
                <div class="row" id="">
                    <div class="col-sm-6" id="">
                        <p class="card-text">
                        {{$guide->Address1}}<br>
                        {{$guide->Address2}}<br>
                        {{$guide->City}}
                        </p>
                    </div>
                    <div class="col-sm-6" id="">
                        <p class="card-text">
                        {{$guide->Tele}}<br>
                        {{$guide->Alt_Tele}}<br>
                        {{$guide->Email}}
                        </p>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-sm-3" id="">
    <br>

    <a href="{{
                    route('guide_payment', [
                       'client_id' => $tour->client_id,    
                        'tour' => $tour->tour,
                        'date' => $tour->date, 
                        'guide_id' => $guide->id, ] ) }}" class="btn submitroom" style="width:100%">Book Guide</a>
    </div>
    <div class="col-sm-1" id="formboder"></div>
    <hr>
</div>
@endforeach

<br>

</div>


@endsection