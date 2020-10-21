@extends('user.temp')

@section('content')


	

	<br>
	<br>

<div bacakground-color="blue">
<br><br>
</div>
	<table class= "table table-hover" id="filterTable">
		<thead>	
			<th>Month</th>
			<th>Employee Name</th>
			<th>Date-issued</th>
			<th>Gross</th>
			
			
		</thead>		
			
		<tbody>
			
		@foreach($employees as $employee)
					<tr>
					<td>{{ Carbon\Carbon::parse($employee->created_at)->format('M') }}</td>
					<td>{{ $employee->name }}</td>
					<td>{{ Carbon\Carbon::parse($employee->created_at)->format('d-m-Y i') }}</td>
					<td>{{ $employee->gross }}</td>
						
						
						
					</tr>
					@endforeach
			
				
		
		</tbody>							
	</table>
@endsection