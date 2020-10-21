@extends('layouts.temp')


@section('content')


<div  class="row">
      <div  class="col-sm-1" id="whiterow"></div>
      <div  class="col-sm-10" id="">
      <h2 id="topic">Available Rooms</h2>

<br>


@foreach( $dates as $date)

<h4><i>{{$date->start_date}} - {{$date->end_date}} Adults:{{$date->adults}} children:{{$date->children}}</i></h4>

@endforeach
<br>
</div> 
      <div  class="col-sm-1" id="whiterow"></div>
          
</div>
@foreach( $available_rooms as $Aroom)
<div class="row" id="rr1">
  <div  class="col-sm-1" id="whiterow"></div>
        <div class="col-sm-2"><img src="/storage/{{$Aroom->image }}" alt="" width="100%"></div>

        
        <div class="col-sm-3">
            <br><br>
            <h2 id="roomdesh">{{$Aroom->RoomName}} {{$Aroom->RoomType}} Room</h2>

        </div>
        <div class="col-sm-3" id="">
            <br><br>
            <span id="rate">Rs.{{$Aroom->Price}}/=</span> / Night

        </div>
        <div class="col-sm-2" id="roomdes">
            <br><br>
            
            <a type="submit" href="{{
                    route('Online_payment',
                      [
                        'checkid' => $Aroom->id,    
                        'startdate' => $date->start_date,
                        'enddate' => $date->end_date,
                      ]
                    )
                  }}"><button class="form-control submitroom" >Reserve Now</button></a>
        </div>
        <div  class="col-sm-1" id="whiterow"></div>
    </div>
    <br>
    @endforeach
    
    </div>
    





@endsection



