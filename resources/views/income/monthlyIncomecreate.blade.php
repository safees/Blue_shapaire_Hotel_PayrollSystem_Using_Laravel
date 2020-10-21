@extends('layouts.app')

@section('content')
<div class="col-lg-12">
<h1 class="title">Commission</h1>
 

<table class= "table table-hover" id="filterTable">
		<thead>	
			<th>Date-issued <br/></td>
			<th>Commission<br></th>
			
			
			
		</thead>		
			
		<tbody>
			
				@foreach($Booking as $booking)
					<tr>		
						<td>{{ $booking->created_at }}
						<td>{{ $booking->payment }}</td>
					
						
					</tr>
				@endforeach
			
				@foreach($TourBooking as $tour_booking)
					<tr>		
						<td>{{ $tour_booking->created_at}}
						<td>{{ $tour_booking->payment }}</td>
						
						
					</tr>
				@endforeach

		</tbody>							
	</table>
</div>

<div class="col-lg-12">
<h1 class="title">Monthly Income</h1>
 

<table class= "table table-hover" id="filterTable">
		<thead>	
			<th>Date-issued <br/><br/></td>
			<th>Extra Allowance <br/>(EA)</th>
			<th>Salary <br/><br/></th>
			<th>Gross <br/>(EA+Salary)
			</th>
			
			
		</thead>		
			
		<tbody>
			
				@foreach($mnthlyIncomeAllowance as $allowance)
					<tr>		
						<td>{{ $allowance->created_at }}
						<td>{{ $allowance->alowance }}</td>
						<td>{{ $allowance->salary }}</td>
						<td>{{ $allowance->gross }}</td>
						
					</tr>
				@endforeach
			
				@foreach($mnthlyIncomePayroll as $payroll)
					<tr>		
						<td>{{ $payroll->created_at}}
						<td>{{ $payroll->over_time_salary }}</td>
						<td>{{ $payroll->salary }}</td>
						<td>{{ $payroll->gross }}</td>
						
					</tr>
				@endforeach

		</tbody>							
	</table>
</div>


	<div class="col-lg-12">
	<div class="col-lg-6">
		<h1 class="page-header">Calculate Monthly Income :</h1>
	<!--	<a href="{{ url('/income/monthliIncome') }}" class="btn btn-md btn-info ">Calculate</a>-->
	</div>
	<br/>
	<div class="col-lg-6">
	@foreach ($monthIncome as $item)
	 @if ($loop->last) 
<h2>	{{ $item->monthlyincome }} </h2>
	@endif
@endforeach
	</div>
	</div>
	

	@endsection