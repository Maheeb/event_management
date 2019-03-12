@extends('layouts.fd.join')
@section('content')

    <!-- //banner -->
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
                <a href="{{route('celeb')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- contact -->
    <section class="contact-wthree py-5" id="contact">
        <div class="container py-xl-5 py-lg-3">
            <div class="title text-center mb-sm-5 mb-4">
                <h3 class="title-w3 text-bl text-center font-weight-bold">Contact Us</h3>
                <div class="arrw">
                    <i class="fa fa-glass" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row pt-xl-4">
                <div class="col-lg-7">
                    @if(session('message'))
                        <div class="alert alert-info">
                            {{ session('message') }}
                        </div>
                    @endif
                        {!! Form::open([

                  'route'=>'contact.sucs'

               ]) !!}
                    <div class="contact-form-wthreelayouts">

                        <div class="form-group required {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Name']) !!}
                            @if($errors->has('name'))
                                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                            @endif
                        </div>
                        <div class="form-group required {{ $errors->has('number') ? 'has-error' : '' }}">

                            {!! Form::text('number', null, ['class' => 'form-control','placeholder'=>'Phone Number']) !!}
                            @if($errors->has('number'))
                                <span class="help-block">
                        <strong>{{ $errors->first('number') }}</strong>
                    </span>
                            @endif
                        </div>
                        <div class="form-group required {{ $errors->has('email') ? 'has-error' : '' }}">

                            {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'Email']) !!}
                            @if($errors->has('email'))
                                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                            @endif
                        </div>
                        <div class="form-group required {{ $errors->has('message') ? 'has-error' : '' }}">

                            {!! Form::textarea('message', null, ['row' => 6, 'class' => 'form-control','placeholder'=>'Message..']) !!}
                            @if($errors->has('message'))
                                <span class="help-block">
                        <strong>{{ $errors->first('message') }}</strong>
                    </span>
                            @endif
                        </div>
                            <div class="form-group mt-4 mb-0">
                                <button type="submit" class="btn btn-w3layouts w-100">Send</button>
                            </div>

                    </div>
                        {!! Form::close() !!}
                </div>
                <div class="col-lg-5 text-center mt-lg-0 mt-5">
                    <div class="row flex-column">
                        <div class="contact-w3">
                            <span class="fa fa-envelope-open  mb-3"></span>
                            <div class="d-flex flex-column">
                                <a href="mailto:example@email.com" class="d-block">info@example1.com</a>
                                <a href="mailto:example@email.com" class="my-2 d-block">info@example2.com</a>
                                <a href="mailto:example@email.com">info@example3.com</a>
                            </div>
                        </div>
                        <div class="contact-w3 my-4">
                            <span class="fa fa-phone mb-3"></span>
                            <div class="d-flex flex-column">
                                <p>+456 123 7890</p>
                                <p class="my-1">+456 123 7890</p>
                                <p>+856 123 7890</p>
                            </div>
                        </div>
                        <div class="contact-w3">
                            <span class="fa fa-home mb-3"></span>
                            <address>71 Pilgrim Avenue <br>44 Shirley Ave.<br> Goldfield Rd. Broome St, Newyork.</address>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- map -->
    <div class="map p-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798902705!2d-74.25986790365911!3d40.697670067823786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1536917325197"
                allowfullscreen></iframe>
    </div>
    <!-- //map -->

@stop


