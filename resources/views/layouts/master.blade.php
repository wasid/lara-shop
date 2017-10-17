<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    <!--<link rel="stylesheet" href="{{ URL::to('src/css/custom.css') }}" type="text/css" />-->
    <link rel="stylesheet" href="{!! asset('css/custom.css') !!}" type="text/css" />
    <!--@yield('style')-->
</head>
<body>
    @include('partials.header')
    <div class="container">
        @yield('content')    
    </div>
    
    
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/css" />
    @yield('script')
</body>
</html>