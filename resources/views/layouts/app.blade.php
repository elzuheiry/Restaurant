

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


  </head>
  <body>
    <div class="centralize col-md-4">
        @include('layouts.navigation')

        <div class="clearfix"></div>

        {{ $slot }}

        @include('layouts.footer')
    </div>

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>

    

    </script>
  </body>
</html>
