<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Event Vibes</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('frontendhome')}}">Home</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="event-details">Event</a></li>
          <li><a href="{{route('User_service')}}">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#">About Us</a></li>
          
          <form action="{{route('search')}}"method=get>
          <input type="text" class="form-control" placeholder="Search..." name="search">
          <button type="submit" class="btn btn-primary">Search</button>
          </ul>
      </nav><!-- .navbar -->
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
               @guest
                    <a href="{{route('login')}}" style="margin-left:5px ;">Login</a>
                    <span style="padding: 5px;">|</span>
                    <a href="{{url('/registration')}}">Registration</a>
                @endguest

                @auth
                <a href="{{ route('customer.logout') }}">Logout</a>
                <a href="{{route('profile.view')}}"><i class="bi bi-people-fill"></i> {{auth()->user()->name}}</a>

                @endauth
    </div>
  </form>
  </header><!-- End Header -->