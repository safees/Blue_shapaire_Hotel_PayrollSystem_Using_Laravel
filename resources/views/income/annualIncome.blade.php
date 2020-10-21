@extends('layouts.app')

@section('content')
<div class="col-lg-12">
<h1 class="title">Annual Income</h1>
 

<table class= "table table-hover" id="filterTable">
		<thead>	
			<th>Date-issued <br/></td>
			<th>Monthly Income <br/></th>
		
		</thead>		
			
		<tbody>
			
				@foreach($monthly_income as $income)
					<tr>		
						<td>{{ $income->created_at }}
						<td>{{ $income->monthlyincome }}</td>
						
					</tr>
				@endforeach
			

		</tbody>							
	</table>
</div>

	<div class="col-lg-12">
	<div class="col-lg-6">
		<h1 class="page-header">Calculate Annual Income :</h1>
	<!--	<a href="{{ url('/income/monthliIncome') }}" class="btn btn-md btn-info ">Calculate</a>-->
	</div>
	<br/>
	<div class="col-lg-6">
	@foreach ($annual_incomes as $item)
	 @if ($loop->last) 
<h2>	{{ $item->annualincome }} </h2>
	@endif
@endforeach
	</div>
	</div>
	

	@endsection