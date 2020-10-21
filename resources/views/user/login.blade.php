@extends('layouts.temp')

@section('content')

<div  class="row">
    <div  class="col-sm-1" id="formboder"></div>
    <div  class="col-sm-10" id="">
        <div class="card">
            <article class="card-body">

            <h4 class="card-title mb-4 mt-1">Sign in</h4>
            <form action="/userview" method="get">
                <div class="form-group">
                    <label>Your email</label>
                    <input name="email" class="form-control" placeholder="Email" type="email">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <a class="float-right" href="#">Forgot?</a>
                    <label>Your password</label>
                    <input class="form-control" placeholder="******" type="password" name="password">
                </div> <!-- form-group// -->   
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                </div> <!-- form-group// -->                                                           
            </form>
            </article>
        </div>

    </div>
    <div  class="col-sm-1" id="formboder"></div>
</div>



@endsection
