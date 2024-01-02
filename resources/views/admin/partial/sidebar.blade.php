<div class="sb-sidenav-menu bg-warnning">
    <div class="nav">
        <a class="nav-link" href="{{route('dashboard')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
            Dashboard
        </a>
        
        <a class="nav-link" href="{{route('user.list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
            Users
        </a>
        {{-- <a class="nav-link" href="{{route('role.list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Role  
        </a> --}}
        <a class="nav-link" href="{{route('customer.list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
            Customer 
        </a>

        <a class="nav-link" href="{{route('event.list')}}">
            <div class="sb-nav-link-icon"><i class="far fa-calendar-alt"></i></div>
            Event 
        </a>
        </a> 
        <a class="nav-link" href="{{route('service.list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-hand-holding-heart"></i></div>
            Service  
        </a>  
        <a class="nav-link" href="{{route('booking.list')}}">
            <div class="sb-nav-link-icon"><i class="far fa-calendar-check"></i></div>
            Booking
        </a> 
        <a class="nav-link" href="{{url('/feedback/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
            Feed Back
        </a>  
        <a class="nav-link" href="{{url('/rating/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
            Rating
        </a>
        
        
        <a class="nav-link" href="{{route('contact.list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-phone"></i></div>
            Contact
        </a>
        
        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                    Authentication
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="login.html">Login</a>
                        <a class="nav-link" href="register.html">Register</a>
                        <a class="nav-link" href="password.html">Forgot Password</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                    Error
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="401.html">401 Page</a>
                        <a class="nav-link" href="404.html">404 Page</a>
                        <a class="nav-link" href="500.html">500 Page</a>
                    </nav>
                </div>
            </nav>
        </div>
         
    </div>