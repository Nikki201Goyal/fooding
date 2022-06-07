<!DOCTYPE html>
<html lang="en">
<head>
@include('frontend.include.frontendhead')
</head>
<body>
  @include('frontend.include.header')
  @yield('content')  
  @include('frontend.include.footer')
  @include('frontend.include.frontendscript')
</body>
</html>