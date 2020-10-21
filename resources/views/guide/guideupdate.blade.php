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
<form action="/Updateguide" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<!--*******************************************************************--> 
<div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-10" id="cusbr1">
                <br>
                <h2 id="topic">Update Your Details</h2>
            </div>
            
            <div  class="col-sm-1" id="formboder"></div>
        </div>
    
<!--*******************************************************************-->
<input type="hidden" class="form-control" name="id" value="{{$Updateguide->id}}">
<!--*******************************************************************--> 
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="First Name">First Name:</label>
                <input type="text" class="form-control" id="First Name" name="First_Name" value="{{$Updateguide->First_Name}}" required>
                <br>
            </div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="Last Name">Last Name:</label>
                <input type="text" class="form-control" id="Last Name" name="Last_Name" value="{{$Updateguide->Last_Name}}" required>
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
    
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-3" id="">
                <label for="Address Line 1">Address Line 1:</label>
                <input type="text" class="form-control" id="Address Line 1" name="Address_Line1" value="{{$Updateguide->Address1}}" required>
            
                
                <br>
            </div>
            <div  class="col-sm-3" id="">
                <label for="Address Line 2">Address Line 2:</label>
                <input type="text" class="form-control" id="Address Line 2" name="Address_Line2" value="{{$Updateguide->Address2}}" required>
                 <br>
            </div>
            <div  class="col-sm-4" id="">
                <label for="City">City:</label>
                <input type="text" class="form-control" id="City" name="City" value="{{$Updateguide->City}}" required>
               
                                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
<!--*******************************************************************-->
<div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-3" id="">
            <label for="Telephone No">Telephone No:</label>
                <input type="text" class="form-control" id="Telephone No" name="Telephone_No" value="{{$Updateguide->Tele}}" required>
                <br>
            </div>
            <div  class="col-sm-3" id="">
            <label for="Alt Telephone No">Alt Telephone No:</label>
                <input type="text" class="form-control" id="Alt Telephone No" name="Alt_Telephone_No" value="{{$Updateguide->Alt_Tele}}">
                <br>
            </div>
            <div  class="col-sm-4" id="">
            <label for="NIC">NIC :</label>
                <input type="text" class="form-control" id="NIC" name="NIC" value="{{$Updateguide->NIC}}" required >
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
      
<!--*******************************************************************-->      
<div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="Pro Picture">Pro Picture :</label>
                <img src="/storage/{{$Updateguide->Pro }}" alt="Image" style="width:200px;height:200px;">
                <input type="file" class="form-control" id="Pro Picture" name="image" value="{{$Updateguide->Pro }}"required>
                <br>
            </div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="Email">Email:</label>
                <input type="email" class="form-control" id="email" name="Email" value="{{$Updateguide->Email }}" required>
              <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
    
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            
            <div  class="col-sm-5" id="">
                <br>
                <label for="Password">Password:</label>
                <input type="password" class="form-control" id="Password" name="password" value="" required>
                <br>
            </div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="Confirm Password">Confirm Password:</label>
                <input type="password" class="form-control" id="Confirm Password" name="confirm_password" value="" required>
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div> 
        </div>
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-10" id="">
                <button type="submit" class="form-control submitbutton">Register</button>
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