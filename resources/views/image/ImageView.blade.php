<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
       

<div>

<table class="table table-borderless table-dark">
  <thead>
    <tr>
    
      <th scope="col">Image</th>
     
    </tr>
  </thead>
  <tbody>

  @foreach($data as $Rupdate)
    <tr>
   
      <td><img src="/storage/{{$Rupdate->image }}" alt="Image" style="width:200px;height:200px;"></td>
      
    </tr>
    @endforeach
  </tbody>
</table>





</div>

</body>
</html>