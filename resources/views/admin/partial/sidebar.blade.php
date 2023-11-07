<div class="sb-sidenav-menu">
    <div class="nav">
        <a class="nav-link" href="{{url('/dashboard')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard
        </a>
        <a class="nav-link" href="{{url('role/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Role  
        </a>
        <a class="nav-link" href="{{url('customer/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Customer 
        </a>
        <a class="nav-link" href="{{url('staff/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Staff 
        </a>

        <a class="nav-link" href="{{url('eventtype/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Event Type 
        </a>
        </a> 
        <a class="nav-link" href="{{url('servicecategory/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Service Category 
        </a>  
        <a class="nav-link" href="{{url('package/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Package 
        </a> 
       
        <a class="nav-link" href="{{url('/booking/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Booking
        </a>
        <a class="nav-link" href="{{url('/payment/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Payment
        </a> 
        <a class="nav-link" href="{{url('feedback/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Feed Back
        </a>  
        <a class="nav-link" href="{{url('rating/list')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Rating
        </a>
        
        <a class="nav-link" href="{{url('/aboutus')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            About Us
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