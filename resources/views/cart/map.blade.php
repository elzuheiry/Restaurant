

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ app(App\Class\GeneralSettings::class)->site_name }}</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <style>
      #map_location {
        height: 100%;
        width: 100%;
      }
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map_location"), {
          center: { lat: -34.397, lng: 150.644 },
          zoom: 8,
        });
      }

      window.initMap = initMap;
    </script>
    

  </head>
  <body>
    <div class="centralize col-md-4">
        @include('layouts.navigation')

        <div class="clearfix"></div>

        <div id="map_location"></div>

        @include('layouts.footer')
    </div>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgm7mDY657NJNaamhugUVoQSvcPTzaIPk&callback=initMap">
    </script>

    
  </body>
</html>