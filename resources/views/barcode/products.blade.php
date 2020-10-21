@extends('layouts.app')

@yield('title')



@section('content')
<hr>	
	<h1 class="text-center">Update Your Attendance</h1>	
	<hr>

<div class="container">
    <div>
        <h3 class="text-left">
    <?php
        $date= date("Y-m-d"); 
        $time= date("H:i:s"); 
        echo "<font size=4>";
        echo "Date :" .$date. "<br>";
        echo "Time :" .$time;

?>
</h3>
   </div>
   @if(isset($details))
    <table class="table table-striped">
        <thead>
            <tr>
            <th></th>
                <th style="text-align:center">Name</th>
                <th style="text-align:center">Nic</th>
                <th style="text-align:center">status</th>
                <th style="text-align:center">update</th>  
               
            </tr>
        </thead>
        <tbody>
            @foreach($details as $products)
            <tr>
            <td><img src="/storage/{{$products->pro }}" alt="Image" style="width:200px;height:200px;"></td>
                <td style="text-align:center">{{$products->name}}</td>
                <td style="text-align:center">{{$products->nic}}</td>
                
      @if($products->status)
     <td style="text-align:center" rowspan="2">Present</td>
      @else
      <td style="text-align:center" rowspan="2">Not Present</td>
      @endif
     
     
                <td style="text-align:center; ">
                    @if(!$products->status)
                   <a href="/updateaspresent/{{$products->id}}" class="btn btn-primary" >Update as Present</a> 
                    @else
                    <a href="/updateasnotpresent/{{$products->id}}" class="btn btn-primary" >Update as Not Present</a>
                    @endif
                </td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>





       
@endsection