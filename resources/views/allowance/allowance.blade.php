@extends('layouts.app')

@section('content')

	<div class="col-lg-12">
		<h1 class="page-header">Allowance : {{ $user->name }}	
			<!--input type="text" id="filterInput" onkeyup="filterFunction()" placeholder="Search Employees...."-->
		</h1>	
	</div>

	<a href="{{ route('allowances.create', ['id'=>$user->id]) }}" class="btn btn-primary">Create</a>

	<br>
	<br>

	@if(!$user->full_time)
		<p><b>Part-Time</b> :  Yes</p>
		<p><b>Base Salary</b>:0 </p>
	@else
		<p><b>Full-Time<b> : Yes</p>
		<br>
		<p><b>Base Salary<b>: {{ $user->role->salary }}</p>
	@endif
		

	<br>

	<table class= "table table-hover" id="filterTable">
		<thead>	
			<th>Date-issued</td>
			<th>Gross</th>
		</thead>		
			
		<tbody>
			
				@foreach($employee as $allowance)
				@if ($loop->last) 
					<tr>		
						<td>{{ $allowance->created_at}}</td>
						<!--<td>{{ Carbon\Carbon::parse($allowance->created_at)->format('Y-m-d') }}</td>-->
						
						<td>{{ $allowance->gross }}</td>
					
					</tr>
					@endif
				@endforeach
			
				
			
		</tbody>							
	</table>
@endsection