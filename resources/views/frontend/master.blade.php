<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  @notifyCss
  <style>
    .notify{
      z-index: 1000000;
      position: absolute;
      top: 8%;
    }
  </style>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Event Vibes </title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="{{url('frontend/')}}/assets/img/favicon.png" rel="icon">
  <link href="{{url('frontend/')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('frontend/')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('frontend/')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('frontend/')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('frontend/')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('frontend/')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{url('frontend/')}}/assets/css/main.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  
</head>

<body>
  <x-notify::notify />

  @include('frontend.partials.header')


  <main id="main">


@yield('add')

 
@yield('about')

  
@yield('content')





</main><!-- End #main -->

  

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{url('frontend/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('frontend/')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{url('frontend/')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('frontend/')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{url('frontend/')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{url('frontend/')}}/assets/vendor/php-email-form/validate.js"></script>

  

  <!-- Template Main JS File -->
  <script src="{{url('frontend/')}}/assets/js/main.js"></script>
  @notifyJs
</body>
<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

</html>
