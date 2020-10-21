@extends('layouts.temp')


@section('content')
<!--*******************************************************************--> 
    <div class="row" id="">
        <div class="col-sm-1" id="formboder">
                    
        </div>
        <div class="col-sm-5" id="">
            <h2>Join With Us</h2><br><br>
            <p>
            Rewarding careers, learning and growth opportunities: we aim to set you apart. We invite you to reach great heights and achieve your dreams, together with Blue Sphire Rock Hotel, come join us.

            </p>
        </div>
        <div class="col-sm-5" id="">
            <img src="images/chef.jpg" alt="" width="100%">
        </div>
        <div class="col-sm-1" id="formboder">
                    
        </div>
    </div>
<!--*******************************************************************-->
    <div class="row" id="">
    
        <div class="col-sm-1" id="formboder">
                    
        </div>
        <div class="col-sm-10" id="">
        <h2 id="topic">Current opportunities</h2>
        </div>
		<div class="col-sm-1" id="formboder">
                    
        </div>
    </div>

    @foreach( $data as $detail)
    <div class="row" id="">
        
        <div class="col-sm-1" id="formboder"></div>
        <div class="col-sm-10" id="">
        
            <br>
            
            <br>

            <h2>Job Title:{{$detail->title}}</h2>
            <p>{{$detail->description}}</p>
            
            <div class="row" id="">
                <div class="col-sm-6" id="">
                
                    <p><b><i>Monthly Allowances & </i></b>
                    <b><i>Salary : {{$detail->salary}}</i></b></p> 
                    

                </div>
                <div class="col-sm-6" id="">
               <a type="submit" href="{{route('vacaplicant',[ 'applicantid' => $detail->id,] )}}"><button class="form-control submitroom">Apply Now</button></a>
                <br><br>
            </div>
            </div>
            <div  class="row">
                <div class="col-sm-1" id="formboder"></div>
                <div  class="col-sm-10" id="formboder"></div>
                <div class="col-sm-1" id="formboder"></div>
            </div>
        </div>
        <div class="col-sm-1" id="formboder"></div>
        
    </div>
    
    @endforeach

<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
</div>

<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->

@endsection