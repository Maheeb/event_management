<!DOCTYPE html>
<html lang="zxx">

@include('fpart.head')

<body>
<div class="main-w3pvt" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="header d-md-flex justify-content-between align-items-center py-3 px-lg-3 px-2">
                <!-- logo -->
                <div id="logo">
                    <h1><a class="" href="{{route('celeb')}}"><img src="{{asset('frontend/images/logo.png')}}" alt="" class="img-fluid">Celebration</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="{{route('celeb')}}" class="active">Home</a></li>
                            <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down" aria-hidden="true"></span>
                                </label>
                                <a href="#">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>

                                    <li><a href="#event" class="drop-text">Event Schedule</a></li>

                                    <li><a href="#what" class="drop-text">What We do</a></li>
                                    <li><a href="#testi" class="drop-text">Testimonials</a></li>

                                    <li><a href="{{route('join')}}" class="drop-text">Register Form</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('gallery')}}">Gallery</a></li>
                            <li class="ml-lg-4 ml-md-3 mt-md-0 mt-2"><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
    <div class="banner-w3pvt">
        <div class="container">
            <div class="banner-tops-style">
                <div class="style-banner text-center">
                    <img src="{{asset('frontend/images/img2.png')}}" alt="" class="img-fluid">
                    <h4 class="text-li mb-5 mt-2">2019</h4>
                    <h3 class="text-wh mb-4">New Year Celebration</h3>
                    <img src="{{asset('frontend/images/img5.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- animations icons -->
        <div class="icon-effects-w3-2">
            <img src="{{asset('frontend/images/icon-3.png')}}" alt="" class="img-fluid">
        </div>
        <!-- //animations icons -->
        <div class="icon-effects-w3-3">
            <img src="{{asset('frontend/images/ba2.png')}}" alt="" class="img-fluid">
        </div>
    </div>
</div>
<!-- //banner -->

<!-- about -->
<div class="what py-5 text-center">
    <div class="container py-xl-5 py-lg-3">
        <div class="title mb-sm-5 mb-4">
            <h3 class="title-w3 text-bl text-center font-weight-bold">New Year Party Celebration</h3>
            <img src="{{asset('frontend/images/titt.png')}}" alt="" class="img-fluid">
        </div>
        <img src="{{asset('frontend/images/ab.jpg')}}" alt="" class="img-fluid">
        <p class="mx-auto wstyles text-center mt-lg-5 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
        <a href="{{route('join')}}" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Join Now</a>
    </div>
</div>
<!-- //about -->

<!-- middle -->
<div class="middle py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="row py-lg-5 my-sm-4">
            <div class="col-lg-7 mt-4">
                <p class="text-li mb-2">Get, Set, Ready and Go..</p>
                <h3 class="text-wh">Let's Celebrate the New Year Party</h3>
            </div>
            <div class="col-lg-5 mt-lg-0 mt-5">
                <h4>Rock the <br>Party!!</h4>
            </div>
        </div>
    </div>
</div>

@yield('content')

<!-- //middle -->

<!-- what we do -->

<!-- //what we do -->

<!-- middle section -->

<!-- newsletter -->

<!-- //newsletter -->
<!-- //middle section -->

<!-- events -->

<!-- //events -->

<!-- testimonials -->

<!-- //testimonials -->

<!-- news -->

<!-- //blog -->

<!-- sponsors -->
<section class="brands">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-2 col-4 main-brand bg-grey">
                <span class="fa fa-500px mb-3" aria-hidden="true"></span>
                <h5>500px</h5>
            </div>
            <div class="col-md-2 col-4 main-brand bg-black">
                <span class="fa fa-gg mb-3" aria-hidden="true"></span>
                <h5>gg varius</h5>
            </div>
            <div class="col-md-2 col-4 main-brand bg-dark2">
                <span class="fa fa-lastfm mb-3" aria-hidden="true"></span>
                <h5>lastfm</h5>
            </div>
            <div class="col-md-2 col-4 main-brand bg-grey">
                <span class="fa fa-openid mb-3" aria-hidden="true"></span>
                <h5>openid</h5>
            </div>
            <div class="col-md-2 col-4 main-brand bg-black">
                <span class="fa fa-ravelry mb-3" aria-hidden="true"></span>
                <h5>ravelry</h5>
            </div>
            <div class="col-md-2 col-4 main-brand bg-dark2">
                <span class="fa fa-angellist mb-3" aria-hidden="true"></span>
                <h5>angellist</h5>
            </div>
        </div>
    </div>
</section>
<!-- //sponsors -->

@include('fpart.footer')

</body>

</html>