@extends('frontend.master')

<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-10">
                <div class="card text-black" style="border-radius: 15px;">
                    <div class="card-body p-md-4">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h2 fw-bold mb-4 mx-1 mx-md-4 mt-3">Sign up</p>
                                <form action="{{ url('/registration') }}" method="post" class="mx-1 mx-md-4">

                                    @csrf

                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
                                            <input required type="text" name="name" class="form-control form-control-lg" placeholder="Your Name" aria-label="Your Name">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
                                            <input required type="email" name="email" class="form-control form-control-lg" placeholder="Your Email" aria-label="Your Email">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-lock fa-fw"></i></span>
                                            <input required type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
                                            <input required type="text" name="address" class="form-control form-control-lg" placeholder="Write down your address" aria-label="Repeat Password">
                                        </div>
                                    </div>

                                    {{-- <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c">
                                        <label class="form-check-label" for="form2Example3c">
                                            I agree all statements in <a href="#!">Terms of service</a>
                                        </label>
                                    </div> --}}

                                    <div class="d-flex justify-content-center mb-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="https://img.freepik.com/free-vector/birthday-flat-recolor-set-isolated-icons-with-sweets-drinks-festive-decorations-with-happy-people-vector-illustration_1284-68675.jpg?w=1380&t=st=1703613831~exp=1703614431~hmac=3cb5193994583e367395be9e6ff38bbb09c12668ed44bc0ddd469dda4205b528" class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
