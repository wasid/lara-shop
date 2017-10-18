<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Lara Shop</a>
    </div>
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
</nav>