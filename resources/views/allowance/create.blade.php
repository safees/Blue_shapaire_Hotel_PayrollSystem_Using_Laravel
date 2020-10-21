@extends('layouts.app')

@section('content')

	<div class="col-lg-12">
		<h1 class="page-header">Allowance : {{ $user->name }}</h1>
	</div>
		@if(!$user->full_time)
			<p><b>Part-Time</b> :  Yes</p>
			<p><b>Base Salary</b>: 0</p>
		@else
			<p><b>Full-Time<b> : Yes</p>
			<br>
			<p><b>Base Salary<b>: {{ $user->role->salary }}</p>
		@endif
		
		<form action="{{ route('allowances.store',['id'=>$user->id])}}" method="POST"
			class="form-horizontal">
				{{ csrf_field() }}
				<div class="form-group">
				<label class="control-label col-md-1" for="over_time">Allowance:</label>
				<div class="col-md-4">
					<select name="over_time" id="over_time" class="form-control">
						<option value="1">Yes</option>					
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-1" for="allowance">Allowance: </label>
				<div class="col-md-4">					
					<input type="number" name="allowance" class="form-control">		
				</div>
			</div>
				
			
			<div class="col-lg-4 text-center">
				<button class="btn btn-success" type="submit" >Submit</button>
			</div>
		</form> 

@endsection
