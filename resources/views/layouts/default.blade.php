<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GoActive <?php print $name; ?></title>

  @include('includes.head')

</head>
<body>

  <div class="navbar navbar-default navbar-fixed-top: margin-bottom:30px;">
    <div class="container" style="padding-top:5px; padding-bottom:5px;">
      <div class="navbar-header">
        <a href="/">
          {{ Html::image('img/logos/logo-small.png', 'GoActive Logo') }}
        </a>
      </div>
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
            <!--<li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>-->
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </div>


<div class="jumbotron" style="margin-bottom:0px;">
  <div class="container">
    <h1>GoActive</h1>
      <p>Welcome to the GoActive website.</p>
  </div>
</div>

<div class="container">

  @include('includes.nav')
  @yield('content')
  @include('includes.footer')

</div>

</body>
</html>
