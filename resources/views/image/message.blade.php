@extends('layouts.app')

@section('content')

<hr>	
	<h1 class="text-center">Enter Barcode</h1>	
	<hr>

<form action="/msg" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
            <@if(session()->has('success'))
              <div class="center" style="text-align: center;">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            </button>
                        <strong>Notification</strong> {{ session()->get('success') }}
                    </div>
                </div>
            @endif
    </div>
</form>

@endsection