@extends('layouts.app')

@section('content')

	<div class="col-lg-12">
		<h1 class="page-header">Edit Allowance : {{ $user->employee->name }}</h1>
	</div>
		@if($user->employee->full_time)
			<p><b>Full-Time</b> :  Yes</p>
			<p><b>Base Salary</b>: {{ $user->employee->role->salary }}</p>
		@else
			<p><b>Part-Time<b> : Yes</p>
			<br>
			<p><b>Base Salary<b>: 0</p>
		@endif
		
		<form action="{{ route('allowances.update',['id'=>$allowance->id])}}" method="POST"
			class="form-horizontal">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
			
	
			
			<div class="form-group">
				<label class="control-label col-md-1" for="allowance">Allowance: </label>
				<div class="col-md-4">					
					<input type="number" name="allowance" class="form-control">		
				</div>
			</div>
			
					
			
			<div class="col-lg-4 text-center">
				<button class="btn btn-success" type="submit" >Update</button>
			</div>
		</form> 

@endsection
