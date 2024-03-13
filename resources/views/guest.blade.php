@extends('layouts.app')
@section('content')
    <div class="col-md-5 mx-auto">
        <section id="introCarousel" class="carousel slide" data-bs-ride="false" data-next-target="#welcome">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/slider-1.jpg" class="d-block w-100" alt="...">
                    <h2 class="text-center mt-4 fw-bold">Welcome to Smart Glove APP</h2>
                </div>
                <div class="carousel-item">
                    <img src="./images/slider-2.jpg" class="d-block w-100" alt="...">
                    <h2 class="text-center mt-4 fw-bold">Let's get connected!</h2>
                </div>
                <div class="carousel-item">
                    <img src="./images/slider-3.jpg" class="d-block w-100" alt="...">
                    <h2 class="text-center mt-4 fw-bold">Perfect your experience.</h2>
                </div>
            </div>
            <div class="d-flex justify-content-between px-5 mt-4 align-items-center">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#introCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#introCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#introCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <button class="next-btn" type="button" data-bs-target="#introCarousel" data-bs-slide="next">
                    <i class="fa-solid fa-arrow-right-long text-white"></i>
                </button>
            </div>
        </section>
        <section id="welcome" class="hide d-none">
            <h2 class="text-center my-5 fw-bold text-white">Welcome</h2>
            <div class="section-body">
                <div>
                    <button data-next-target="#signin">Sign in</button>
                    <button data-next-target="#signup" class="signup">Sign up</button>
                </div>
                <div>
                    <p class="mt-5 mb-2">Login with social media</p>
                    <a href="{{ route('social.redirect', 'facebook') }}"><img src="./images/facebook.svg" width="24" class="mx-3" /></a>
                    <a href="{{ route('social.redirect', 'twitter') }}"><img src="./images/twitter.svg" width="24" class="mx-3" /></a>
                    <a href="{{ route('social.redirect', 'google') }}"><img src="./images/google.svg" width="24"
                            class="mx-3" /></a>
                </div>
            </div>
        </section>
        <section id="signin" class="hide d-none">
            <h2 class="text-center mb-4 mt-5 fw-bold text-white">Welcome <br /> Sign in</h2>
            <div class="section-body">
                <form id="loginForm">



                    <div class="input-group mb-3">
                        <span class="input-group-text" id="email"><i class="fa-solid fa-envelope"></i></span>
                        <input name="email" type="email" class="form-control" placeholder="Your email address"
                            aria-label="Your email address" aria-describedby="email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="password"><i class="fa-solid fa-lock"></i></span>
                        <input name="password" type="password" class="form-control" placeholder="Password"
                            aria-label="Password" aria-describedby="password">
                    </div>
                    <button class="signup" type="submit">Sign in</button>
                </form>
                <div>

                    <p class="mb-2">Login with social media</p>
                    <a href="{{ route('social.redirect', 'facebook') }}"><img src="./images/facebook.svg" width="24" class="mx-3" /></a>
                    <a href="{{ route('social.redirect', 'twitter') }}"><img src="./images/twitter.svg" width="24" class="mx-3" /></a>
                    <a href="{{ route('social.redirect', 'google') }}"><img src="./images/google.svg" width="24"
                            class="mx-3" /></a>

                    <p class="mt-5 mb-2 fw-bold">
                        Don't have account?
                        <a href="#" data-next-target="#signup">sign up</a>
                    </p>
                </div>
            </div>
        </section>
        <section id="signup" class="hide d-none">
            <h2 class="text-center mb-0 mt-3 mt-md-5 fw-bold text-white">Welcome <br /> Sign up</h2>
            <div class="section-body">
                <form id="signupForm">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="signup_name"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="full name" name="name"
                            aria-label="full name" aria-describedby="signup_name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="signup_email"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="email or phone"
                            aria-label="email or phone" aria-describedby="signup_email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="signup_password"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            aria-label="Password" aria-describedby="signup_password">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="confirm_password"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="Confirm Password" aria-label="Confirm Password"
                            aria-describedby="confirm_password">
                    </div>
                    <button class="mt-5 signup" type="submit">Sign up</button>

                </form>
                <div>
                    <p class="mb-2">Sign up with social media</p>
                    <a href="{{ route('social.redirect', 'facebook') }}"><img src="./images/facebook.svg" width="24" class="mx-3" /></a>
                    <a href="{{ route('social.redirect', 'twitter') }}"><img src="./images/twitter.svg" width="24" class="mx-3" /></a>
                    <a href="{{ route('social.redirect', 'google') }}"><img src="./images/google.svg" width="24"
                            class="mx-3" /></a>

                    <p class="mt-5 mb-2 fw-bold">
                        Alraedy have account?
                        <a href="#" data-next-target="#signin">sign in</a>
                    </p>

                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script src="./assets/index-YQRDazKY.js"></script>
@endpush
