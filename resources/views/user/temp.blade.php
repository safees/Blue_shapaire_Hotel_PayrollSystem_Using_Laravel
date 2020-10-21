<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<script src="{{asset('/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/popper.min.js')}}" type="text/javascript"></script>
<style>
    #head{
        background-image:url({{asset('/images/home.jpg')}})

    }
    #foot{
        background-image: url({{asset('/images/footer.jpg')}})
    }
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
</style>
</head>
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->


<body>

<div class="" id="head">
    <div class="row" id="hr1">
        <div class="col-sm-12" id="headerlogo">
            <br>
            <img src="{{asset('/images/logo_4.png')}}" alt="" id="logoimage">
            <br>
            <br>
        </div>
    </div>
<!--*******************************************************************-->
    <div class="row sticky-top" id="hr2">
        <div class="col-sm-3" id="">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/"><i class="fa fa-facebook-square" style="font-size:24px"></i></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="https://www.linkedin.com/"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/"><i class="fa fa-twitter-square" style="font-size:24px"></i></a></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com"><i class="fa fa-youtube-square" style="font-size:24px"></i></a>
                </li>
            </ul>
        </div>

        <div class="col-sm-6" id="">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                <a class="nav-link" href="{{route('/index')}}"><b>Home</b></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('contact_us')}}"><b>About Us</b></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('check')}}"><b>Rooms</b></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('tour')}}"><b>Tours</b></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('contact_us')}}"><b>Contact Us</b></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('apply')}}"><b>Careers</b></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('userlogin')}}"><b>Login</b></a>
                </li>
            </ul>

        </div>

        <div class="col-sm-3" id="">
            <div  class="row">
                
                <div  class="col-sm-12" id="navbutton">
                    <p id="navbook"><b>See what a difference a stay makes</b></p>
                </div>
            </div>
        </div>
    </div>
    <div  class="row">
        <div  class="col-sm-12" id="headerline"></div>
    </div>
    
<!--*******************************************************************-->
    <div class="row" id="hr3">
        <div class="col-sm-12" id="">
            <p>
                <span id="headertoptext">
                    <i><b>Book Your Stay</b></i>
                </span>
                <br>
                <br>
            </p>
        </div>
    </div>
<!--*******************************************************************-->
    <div class="row" id="hr4">
        <div class="col-sm-5" id=""></div>
       
            
           
        </div>
        <div class="col-sm-5" id=""></div>
    </div>
<!--*******************************************************************-->

</div>

<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<div class="container" id="body">

@yield('content')	

</div>

<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->

<div class="" id="foot">
    <div  class="row">
        <div  class="col-sm-12" id="headerline"></div>
    </div>
    <div class="row" id="fr1">
        <div class="col-sm-12" id="footerlogo">
            <br>
            <img src="{{asset('/images/logo_4.png')}}" alt="" id="logoimage">
            <br>
            <br>
            <br>
        </div>
    </div>
    <div class="row" id="fr2">
        <div class="col-sm-1" id=""></div>
        <div class="col-sm-3" id="">
            <p>
                <b><i>Phone:</i></b>
                <br>
                <b>077-6657638</b>
            </p>
        </div>
        <div class="col-sm-4" id="">
            <p>
                <b><i>Address:</i></b>
                <br>
                <b><i>
                    Blue sphere Rock Hotel,
                    <br>
                    Lizzie villa Rd,
                    <br>
                    Ella.
                </i></b>
                <br>
                
            </p>
        </div>
        <div class="col-sm-3" id="">
            <p>
                <b><i>E-mail:</i></b>
                <br>
                <b><i>ncprasadmadusanka@gmail.com</i></b>
            </p>
        </div>
        <div class="col-sm-1" id=""></div>
        
    </div>
    <div  class="row">
        <div  class="col-sm-12" id="headerline"></div>
    </div>
    <div  class="row">
        <div  class="col-sm-12" id="fr3">
            <br>
            <p>Copyright &copy 2018 Blue sphere Rock Hotel</p>
            <br>
        </div>
    </div>

    

</div>
</body>
</html>