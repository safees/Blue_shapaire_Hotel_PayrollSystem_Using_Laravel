<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<form method="post" action="{{url('/upload')}}" enctype="multipart/form-data">
{{ csrf_field() }}
        <div class="form-group">
            <div class="row" id="hr5">
                <div class="col-sm-1" id="">
                    
                </div>
                
                        <div class="col-sm-4" id="bookingform">
                            <label for="">Image:</label>
                            <input type="file" class="form-control" id="" name="image" placeholder="">
                        </div>
                       
                        <div class="col-sm-4" id="bookingform">
                            <label for="">&nbsp</label>
                            <button type="submit" class="form-control submitbutton">submit</button>
                        </div>
                    
                <div class="col-sm-1" id="">
                    
                </div>
            </div>
        </div>
    </form>




    </body>
</html>

