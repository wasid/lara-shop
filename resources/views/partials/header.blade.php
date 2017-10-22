<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="/">Lara Shop</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
        <li><a href="{{ route('user.signup') }}"><span class="glyphicon glyphicon glyphicon-check"></span> Sign Up</a></li>
        <!--<li><a href="{{ route('user.signup') }}"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a>-->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Name <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#"><i class="fa fa-btn fa-pencil-square-o"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
        </li>      
        </li>
      </ul>
    </div>

  </div>
</nav>