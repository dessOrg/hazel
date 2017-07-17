<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coinbox</title>
    <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

  <!-- Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
  {{-- <link href="{{ elixir('css/style.css') }}" rel="stylesheet"> --}}
     <link href="/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


</head>
<body id="">
  <div  class="container-fluid">
    <div class="row">
    <div class="col-md-1 col-xs-1" style="background-color: #2980b9;">
    <div style="height:800px; width:100%;"></div>
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->


    </div>

  <div class="col-md-10 col-xs-10 main" style="">

    <nav class="navbar navbar-inverse navbar-fixed-top" style="">
      <div class="container-fluid">
        <div class="col-md-offset-5 col-md-2">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{url('/')}}"><img src="/images/logo.png" style="height:40px; width:auto;padding-bottom:20px" ></a>
        </div>
      </div>
        <div class="col-md-5">
        <div class="nav navbar-nav navbar-right" style="padding-top:20px;">
          @if(Auth::guest())

          <div class="col-md-4 col-xs-4"><a href="{{url('/login')}}"><i class="fa fa-btn fa-sign-in"></i></a></div>
          <div class="col-md-4 col-xs-4">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Register
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/register')}}">User</a></li>
                <li><a href="{{url('/signup')}}">Cooperate</a></li>
              </ul>
            </li>
          </div>
          @elseif(Auth::user())

          <div class="col-md-4 col-xs-4"><a href="{{url('/')}}">Opportunities</a></div>
          <div class="col-md-4 col-xs-4">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/getUser')}}">Account</a></li>
                <li><a href="{{url('/logout')}}">Logout</a></li>
              </ul>
            </li>
          </div>

          @endif

        </div>
      </div>
      </div>
    </nav>
<div style="margin-bottom:60px;margin-top:30px;"></div>

@yield('content')

  </div>
  <div class="col-md-1 col-xs-1" style="background-color: #2980b9;">
  <div style="height:800px; width:100%;"></div>
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->


    </div>



    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}



</div>
</div>
</body>
</html>
