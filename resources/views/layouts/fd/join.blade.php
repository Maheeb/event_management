<!DOCTYPE html>
<html lang="zxx">

@include('fpart.head')

<body>
<div class="main-w3pvt-2" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="header d-md-flex justify-content-between align-items-center py-3 px-lg-3 px-2">
                <!-- logo -->
                <div id="logo">
                    <h1><a class="" href="{{route('celeb')}}"><img src="images/logo.png" alt="" class="img-fluid">Celebration</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="{{route('celeb')}}">Home</a></li>
                            <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down" aria-hidden="true"></span>
                                </label>
                                <a href="#" class="active">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>

                                    <li><a href="{{route('celeb')}}" class="drop-text">Event Schedule</a></li>
                                    <li><a href="{{route('celeb')}}" class="drop-text">Our News</a></li>
                                    <li><a href="about.html" class="drop-text">What We do</a></li>
                                    <li><a href="{{route('celeb')}}" class="drop-text">Testimonials</a></li>

                                    <li><a href="{{route('join')}}" class="drop-text active">Register Form</a></li>
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
</div>

@yield('content')

<!-- footer -->
@include('fpart.footer')
<!-- footer -->
<!-- copyright -->

<!-- //copyright -->

</body>

</html>