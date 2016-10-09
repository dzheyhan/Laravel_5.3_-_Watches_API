<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CHRONEXT</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/mystyle.css') }}" />


</head>
<body>
    <div class="container">
        @include('errors.message')
        @yield('content')
    </div>
  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/model_select_request.js') }}"></script>

  <!-- This is only necessary if you do Flash::overlay('...') -->
  <script>
    $('div.alert').not('.alert-important').delay(4000).slideUp(400);
  </script>
</body>
</html>
