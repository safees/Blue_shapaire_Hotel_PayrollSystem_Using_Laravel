@extends('layouts.app')

@section('content')

<hr>	
	<h1 class="text-center">Enter Barcode</h1>	
	<hr>

<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder=" Enter Barcode"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

@endsection