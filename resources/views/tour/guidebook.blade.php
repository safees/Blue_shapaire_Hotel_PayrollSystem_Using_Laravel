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

 @foreach( $client_id as $detail)
<form action="{{ route('available_guides',[ 'client_id' => $detail->id ]) }}" method="get"> 
@endforeach
{{ csrf_field() }}
        <div class="form-group">
            <div class="row" id="hr5">
                
                        <div class="col-sm-4" id="bookingform">
                            <label for="">Check In:</label>
                            <input type="date" class="form-control" id="guidebook" name="date" placeholder="">
                            <script>
      var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("date")[0].setAttribute('min', today) </script>
                        </div>
                        
                        <div class="col-sm-4" id="bookingform">
                            <label for="">Tour:</label>
                           
                            <select class="custom-select custom-select-lg mb-3"  name="tour">
                                 <option value="Ella Rock">Ella Rock</option>
                                <option value="Little Adams Peak">Little Adams Peak</option>
                                 <option value="Rawana Cave">Rawana Cave</option>
                                
                            </select>
                        </div>
                        <div class="col-sm-4" id="bookingform">
                            <label for="">&nbsp</label>
                            <button type="submit" href="{{ route('available_guides',[ 'client_id' => $detail->id ]) }}" class="form-control submitbutton" id="guidebook">Check Available</button>
                        </div>
                
            </div>
        </div>
        
    </form>
    <div class="row" id="hr5">
        <div class="col-sm-12" id="formboder"><p>&nbsp</p></div>
    </div>

            <h1>More.....</h1>
            <p>
            Guide is the best path of the all activities.So we are requesting a quide for catching the easy way whatever our customer need.
Through our guide our customer can make their travel very easy and quick manner
these are the some of our reason for providing the best guidence .

            </p>
        </div>
        <div class="col-sm-1" id="formboder"></div>
    </div>

<!--*******************************************************************--> 
<br>
<!--*******************************************************************--> 
<!--*******************************************************************--> 
<!--*******************************************************************--> 
<!--*******************************************************************--> 
<!--*******************************************************************--> 
@foreach($guides as $guide)

    <div  class="row">
        <div class="col-sm-1" id="formboder"></div>
        <div  class="col-sm-10" id="headerline"></div>
        <div class="col-sm-1" id="formboder"></div>
    </div>
    <div class="row" id="">
        <div class="col-sm-1" id="formboder"></div>
        <div class="col-sm-1" id="">
        <img src="/storage/{{$guide->Pro }}" alt="Image" style="width:100%;">
        </div>
        <div class="col-sm-1" id="formboder"></div>
        <div class="col-sm-8" id="">
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
                            <br>
                        </div>
                    </div>
            </div>
        </div>
        
        <div class="col-sm-1" id="formboder"></div>
        <hr>
    </div>
    @endforeach

<br>

</div>


@endsection