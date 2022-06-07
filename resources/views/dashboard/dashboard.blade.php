<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
 
  @include("dashboard.adminhead")
  </head>
  <body>
  <div class="container-scroller">
    
    @include("dashboard.navbar")
    @yield('content')

  </div>


    @include("dashboard.adminscript")
  </body>
</html>



    
   