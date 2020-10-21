@extends('layouts.temp')


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
<form action="/guideRegis" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<!--*******************************************************************--> 
<div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-8" id="cusbr1">
                <br>
                <h2 id="topic">Register as a Guide</h2>
            </div>
            <div  class="col-sm-2" id="formboder">
            <a type="submit" href="{{ route('glogin')}}">
            <button type="submit" class="form-control submitbutton">Login</button></a>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
    
<!--*******************************************************************-->

<!--*******************************************************************--> 
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="First Name">First Name:</label>
                <input type="text" class="form-control" id="First Name" name="First_Name" placeholder="First Name" required>
                <br>
            </div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="Last Name">Last Name:</label>
                <input type="text" class="form-control" id="Last Name" name="Last_Name" placeholder="Last Name" required>
                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
    
<!--*******************************************************************-->
        <div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-3" id="">
                <label for="Address Line 1">Address Line 1:</label>
                <input type="text" class="form-control" id="Address Line 1" name="Address_Line1" placeholder="Address Line 1" required>
            
                
                <br>
            </div>
            <div  class="col-sm-3" id="">
                <label for="Address Line 2">Address Line 2:</label>
                <input type="text" class="form-control" id="Address Line 2" name="Address_Line2" placeholder="Address Line 2" required>
                 <br>
            </div>
            <div  class="col-sm-4" id="">
                <label for="City">City:</label>
                <input type="text" class="form-control" id="City" name="City" placeholder="City" required>
               
                                <br>
            </div>
            <div  class="col-sm-1" id="formboder"></div>
        </div>
<!--*******************************************************************-->
<div  class="row">
            <div  class="col-sm-1" id="formboder"></div>
            <div  class="col-sm-3" id="">
            <label for="Telephone No">Telephone No:</label>
                <input type="text" class="form-control" id="Telephone No" name="Telephone_No" placeholder="Telephone No" required>
                <br>
            </div>
            <div  class="col-sm-3" id="">
            <label for="Alt Telephone No">Alt Telephone No:</label>
                <input type="text" class="form-control" id="Alt Telephone No" name="Alt_Telephone_No" placeholder="Telephone No">
                <br>
            </div>
            <div  class="col-sm-4" id="">
            <label for="NIC">NIC :</label>
                <input type="text" class="form-control" id="NIC" name="NIC" placeholder="xxxxxxxxxv" required >
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
                <input type="file" class="form-control" id="Pro Picture" name="image" required>
                <br>
            </div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="Email">Email:</label>
                <input type="email" class="form-control" id="email" name="Email" placeholder="" required>
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
                <input type="password" class="form-control" id="Password" name="password" placeholder="xxxxxx" required>
                <br>
            </div>
            <div  class="col-sm-5" id="">
                <br>
                <label for="Confirm Password">Confirm Password:</label>
                <input type="password" class="form-control" id="Confirm Password" name="confirm_password" placeholder="xxxxxx" required>
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