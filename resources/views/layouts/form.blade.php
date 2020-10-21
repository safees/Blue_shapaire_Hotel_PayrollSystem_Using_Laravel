<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.css') }}">
            <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.date.css') }}">
    <meta class="foundation-mq">
    
     <!-- Start Top Bar -->
  <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem"><a href="{{ route('home') }}">Home</a></li>
            <li role="menuitem"><a href="{{ route('login') }}">Login</a></li>
            <li role="menuitem"><a href="{{ route('rooms') }}">Rooms</a></li>
            <li role="menuitem"><a href="">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    <title>BLUE SAPHIRE ROCK HOTEL</title>
    
    </head>
    <body>

      
    
    
@yield('content')
    
 
    
    <script>
      $(document).foundation();
    </script>

        <script src="{{ asset('js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('js/vendor/what-input.js') }}"></script>
        <script src="{{ asset('js/vendor/foundation.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('pickadate/lib/picker.js') }}"></script>
        <script src="{{ asset('pickadate/lib/picker.date.js') }}"></script>
        <script>
            $('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>

    </body>
</html>