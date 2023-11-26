<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Event Vibes<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('frontendhome')}}">Home</a></li>
          <li><a href="{{route('aboutus')}}">About Us</a></li>
          <li><a href="event-details">Event</a></li>
          <li><a href="package">Packages</a></li>
          <li><a href="{{route('User_service')}}">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->
      
      <a class="btn-book-your-event" href="{{ route('frontendhome') }}">Book Your Event</a>
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
               @guest
                    <a href="{{route('login')}}" style="margin-left:5px ;">Login</a>
                    <span style="padding: 5px;">|</span>
                    <a href="{{url('/registration')}}">Registration</a>
                @endguest

                @auth
                <a href="{{ route('customer.logout') }}">Logout</a>
                <a href="{{route('profile.view')}}"><i class="bi bi-file-person-fill"></i> {{auth()->user()->name}}</a>

                @endauth
    </div>
  </header><!-- End Header -->