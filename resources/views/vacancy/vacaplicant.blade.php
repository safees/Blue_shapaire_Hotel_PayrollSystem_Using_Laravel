@extends('layouts.temp')


@section('content')
<!--*******************************************************************--> 
@foreach( $details as $detail)
    <form metod="post" action="{{ route('applicant',[ 'vacancyid' => $detail->id ]) }}">
    @endforeach
        
        {{ csrf_field() }}
        
        <div  class="row">
                <div class="col-sm-1" id="formboder"></div>
                <div  class="col-sm-10" id="">
                    <legend id="topic">Vacancy Applicant Registration Form </legend>
                </div>
                <div class="col-sm-1" id="formboder"></div>
            </div>

        
        

		 @if(count($errors) > 0)

       @foreach($errors->all() as $error)
         <div class="col-lg-6 alert alert-danger">{{$error}} </div>
         @endforeach
    @endif

    @if(session('response'))
      <div class="col-md-6 alert alert-success"> 
        {{session('response')}}
      </div>
      @endif
		<div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="">First Name:</label>
                <input type="text" class="form-control" id="" name="firstname" placeholder="First Name">
                <br>
            </div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="">Last Name:</label>
                <input type="text" class="form-control" id="" name="lastname" placeholder="Last Name">
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
    
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-3" id="">
                <label for="">Address Line 1:</label>
                <input type="text" class="form-control" id="" name="address" placeholder="Address Line 1">
                <br>
            </div>
            <div  class="col-sm-3" id="">
                <label for="">Address Line 2:</label>
                <input type="text" class="form-control" id="" name="addressl" placeholder="Address Line ">
                <br>
            </div>
            <div  class="col-sm-4" id="">
                <label for="">City:</label>
                <input type="text" class="form-control" id="" name="" placeholder="City">
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
<!--*******************************************************************-->
        
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-3" id="">
                <label for="">E-mail:</label>
                <input type="email" class="form-control" id="" name="email" placeholder="E-mail Address">
                <br>
            </div>
            <div  class="col-sm-3" id="">
                <label for="">Telephone No:</label>
                <input type="text" class="form-control" id="" name="telephone" placeholder="Telephone Number">
                <br>
            </div>
            <div  class="col-sm-4" id="">
                <label for="">NIC No:</label>
                <input type="text" class="form-control" id="" name="nic" placeholder="Telephone Number">
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-10" id="">
                <label for="">Working Experience:</label>
                <textarea name="workex" rows="10" class="form-control" width="100%">
                    Working Experience
                </textarea> 
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-10" id="">
                <br>
            <button type="submit" href="#" class="form-control submitbutton">Submit Details</button>
                <br>
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
<!--*******************************************************************-->
    </form>
<!--*******************************************************************-->
    
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