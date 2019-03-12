@extends('layouts.fd.fmain')

@section('content')
    <div class="serives-agile py-5" id="what">
        <div class="container py-xl-5 py-lg-3">
            <div class="title text-center mb-sm-5 mb-4">
                <h3 class="title-w3 text-bl text-center font-weight-bold">What We Do for You</h3>
                <div class="arrw">
                    <i class="fa fa-glass" aria-hidden="true"></i>
                </div>
            </div>

                <div class="row welcome-bottom text-center">
                    @foreach ($works as $work)
                    <div class="col-lg-3 col-sm-6">
                        <div class="welcome-grid bg-white py-5 px-4">
                            <img src="{{asset('/frontend/images/' . $work->image)}}" alt="" class="img-fluid">
                            <h4 class="mt-4 mb-3 text-dark">{{$work->title}}</h4>
                            <p>{{$work->slug}}</p>
                        </div>
                    </div>

                    @endforeach
                </div>

        </div>
    </div>



    <div class="bg-colors py-5">
        <div class="container py-md-2">
            <h4 class="text-center font-weight-bold text-white">Are You Ready
                <a href="{{route('join')}}" class="text-white button-clk">Joining Our Event Programs ?</a>
            </h4>
        </div>
    </div>

    <div class="about-w3sec py-5" id="event">
        <div class="container py-xl-5 py-lg-3">
            <div class="title text-center mb-sm-5 mb-4">
                <h3 class="title-w3 text-bl text-center font-weight-bold">Party Event Schedule</h3>
                <div class="arrw">
                    <i class="fa fa-glass" aria-hidden="true"></i>
                </div>
            </div>

            @foreach ($parties as $party)
                <div class="evnt-grid p-sm-5 p-4">
                    <div class="row">
                        <div class="col-lg-2 col-sm-3 text-center mt-2">
                            <img src="{{asset('/frontend/images/' . $party->image)}}" alt="" class="img-fluid" />
                        </div>
                        <div class="col-lg-7 col-sm-9 abt-block pr-lg-5 mt-sm-0 mt-4">
                            <h3 class="mb-2">{{$party->title}}</h3>
                            <p>{{$party->et}}</p>
                            <ul class="list-unstyled mt-3">
                                <li>
                                    <span class="fa fa-user-o mr-2"></span>{{$party->author->name}}
                                </li>
                                <li class="mx-md-4 mx-2">
                                    <span class="fa fa-clock-o mr-2"></span>{{$party->duration}}
                                </li>
                                <li>
                                    <span class="fa fa-map-marker mr-2"></span>{{$party->loc}}
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 abt-block text-center">
                            <a href="{{route('join')}}" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Join Now</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

    <div class="testimonials text-center py-5" id="testi">


            <div class="container py-xl-5 py-lg-3">
                <div class="title mb-sm-5 mb-4">
                    <h3 class="title-w3 text-wh text-center font-weight-bold">What Our People Say</h3>
                    <img src="{{asset('frontend/images/tiw.png')}}" alt="" class="img-fluid">
                </div>

                <div class="row pt-4 my-md-4">
                    @foreach ($peoples as $people)
                    <div class="col-lg-4 testi-sections">
                        <div class="testimonials_grid p-sm-5 p-4">
                            <p class="sub-test"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span> {{$people->bio}}
                            </p>
                            <div class="row mt-4">
                                <div class="col-5 testi-img-res text-right">
                                    <img src="{{asset('/frontend/images/' . $people->image)}}" alt="" class="img-fluid" />
                                </div>
                                <div class="col-7 testi_grid text-left mt-xl-3 mt-lg-2 mt-4">
                                    <h5 class="mb-1">{{$people->name}}</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>


    </div>
@stop


