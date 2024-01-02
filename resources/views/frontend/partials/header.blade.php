<style>
  * a{
    text-decoration: none;
  }
</style>

<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Event Vibes</h1>
      </a>

      <nav id="navbar" class="col-8 navbar">
        <ul>
          <li><a href="{{route('frontendhome')}}">Home</a></li>
            <ul>
              <li class="dropdown"><a href="#event"><span>Events</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  @foreach($events as $event)
                  <li><a href="{{route('single.view', $event->id)}}">{{$event->event_name}}</a></li>
                  @endforeach
                </ul> 
              </li>
            </ul>
            {{-- <li class="dropdown"><a href="#"><span>Package</span></a> --}}
          </li>
          <li><a href="{{route('user.contact')}}">Contact Us</a></li>
          <li><a href="#about">About Us</a></li>
          <form action="{{route('search')}}"method=get>
            <div class="input-group">
              <input name="search" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
              <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
            </div>
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
                <a href="{{route('user.profile.view')}}"><i class="bi bi-people-fill"></i> {{auth()->user()->name}}</a>

                @endauth
    </div>
  </form>
  </header><!-- End Header -->