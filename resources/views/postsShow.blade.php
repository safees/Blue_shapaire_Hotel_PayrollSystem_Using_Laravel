@extends('layouts.tempreview')


@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">


                <div class="panel-body">

                    <form action="{{ route('posts.post') }}" method="POST">

                        {{ csrf_field() }}

                    <div class="card">

                        <div class="container-fliud">

                            <div class="wrapper row">

                                

                                <div class="details col-md-12">

                                   
                                    <div class="rating">

                                        <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $post->userAverageRating }}" data-size="xs">

                                        <input type="hidden" name="id" required="" value="{{ $post->id }}">

                                      

                                        <br/>

                                        <button class="btn btn-success">Submit Review</button>

                                    </div>

                                 

                                  



                                </div>

                            </div>

                        </div>

                    </div>

                    </form>


                </div>

            </div>

        </div>

    </div>

</div>


<script type="text/javascript">

    $("#input-id").rating();

</script>

@endsection