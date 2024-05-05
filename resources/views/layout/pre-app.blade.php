<!doctype html>
<html lang="en" class="theme-fs-md">
  
@vite([
        'resources/css/libs.min.css',
        'resources/css/socialv006a.css',
        'resources/vendor/flatpickr/dist/flatpickr.min.css',
        'resources/vendor/sweetalert2/dist/sweetalert2.min.css',
        'resources/vendor/vanillajs-datepicker/dist/css/datepicker.min.css',
        'resources/css/customizer.css',
        'resources/css/app.css',
        'resources/js/libs.min.js',
        'resources/vendor/lodash/lodash.min.js',
        'resources/js/setting/utility.js',
        'resources/js/setting/setting.js',
        'resources/js/setting/setting-init.js',
        'resources/js/slider.js',
        'resources/js/masonry.pkgd.min.js',
        'resources/js/enchanter.js',
        'resources/vendor/sweetalert2/dist/sweetalert2.min.js',
        'resources/js/sweet-alert.js',
        'resources/js/customizer.js',
        'resources/js/charts/weather-chart.js',
        'resources/js/app.js',
        'resources/vendor/flatpickr/dist/flatpickr.min.js',
        'resources/js/fslightbox.js',
        'resources/vendor/vanillajs-datepicker/dist/js/datepicker.min.js',
        'resources/js/lottie.js',
        'resources/js/select2.js'
        
         ])

  <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200') }}" />
  <link href="{{ url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&amp;display=swap" rel="stylesheet') }}">
  <link href="{{ url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&amp;display=swap" rel="stylesheet') }}">


<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>PetBright | Social Media for Pet</title>
      <!-- Config Options -->
      <!-- End Config Options -->
      
  </head>
  <body class=" ">
    <!-- loader Start -->
    <!--<div id="loading">
          <div id="loading-center">
          </div>
    </div>-->
    <!-- loader END -->
    @yield('content')
          
    
    
  </body>


</html>