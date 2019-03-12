@extends('layouts.fd.join')

@section('content')

    <!-- //banner -->
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('celeb')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- gallery -->
    <div class="gallery py-5" id="gallery">
        <div class="container pb-xl-5 pb-lg-3">
            <div class="title text-center mb-sm-5 mb-4">
                <h3 class="title-w3 text-bl text-center font-weight-bold">Our Gallery</h3>
                <div class="arrw">
                    <i class="fa fa-glass" aria-hidden="true"></i>
                </div>
            </div>

            <div class="news-grids pt-xl-4">




                <div class="row">
                    @foreach ($gals as $i=>$gal)

                        <?php $ar1 =array("gal1","gal2","gal3","gal4","gal5","gal6","gal7","gal8","gal9");

                        $ar2 = array("Pomeranian","Rottweiler","Maltese dog","Poodle","Retriever","Chihuahua","Dachshund","Beagle","Bulldog")
                        ?>

                            <div class="col-md-4 gal-img">

                                    <a href="#{{$ar1[$i]}}" title="{{$ar2[$i]}}"><img style="padding-bottom: 20px" src="{{asset('frontend/images/'.$gal->image)}}" alt="gallery" class="img-fluid"></a>

                            </div>
                    @endforeach
                </div>
            </div>





        </div>
    </div>
    <!-- popup-->

    @foreach ($gals as $i=>$gal)
        <?php $ar1 =array("gal1","gal2","gal3","gal4","gal5","gal6","gal7","gal8","gal9");?>
        <div id="{{$ar1[$i]}}" class="popup-effect animate">
            <div class="popup">
                <img src="{{asset('frontend/images/'.$gal->image)}}" alt="Popup Image" class="img-fluid" />
                <h5 class="text-name-pop mt-4">Celebration</h5>
                <p class="mt-3">{{$gal->et}}</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
  @endforeach


    <!-- //popup -->
    <!-- //gallery -->

    <!-- footer -->

    <!-- footer -->
    <!-- copyright -->
@stop

