@extends('layouts.fd.join')

@section('content')
    <!-- //banner -->
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
                <a href="{{route('celeb')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Register Form</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- register -->
    <div class="register-w3 py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="title text-center mb-sm-5 mb-4">
                <h3 class="title-w3 text-bl text-center font-weight-bold">Event Register Form</h3>
                <div class="arrw">
                    <i class="fa fa-glass" aria-hidden="true"></i>
                </div>
            </div>
            <div class="comment-top mt-5">
                <div class="comment-bottom agileinfo_mail_grid_right text-center">
                    @if(session('message'))
                        <div class="alert alert-info">
                            {{ session('message') }}
                        </div>
                    @endif
                    {!! Form::open(['route' => ['join.sucs']]) !!}
                        <div class="row">
                            <div class="col-lg-6 form-group">


                                <div class="form-group required {{ $errors->has('name') ? 'has-error' : '' }}">
                                    {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Name']) !!}
                                    @if($errors->has('name'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="form-group required {{ $errors->has('number') ? 'has-error' : '' }}">

                                    {!! Form::text('number', null, ['class' => 'form-control','placeholder'=>'Phone Number']) !!}
                                    @if($errors->has('number'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('number') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <div class="form-group required {{ $errors->has('email') ? 'has-error' : '' }}">

                                    {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'Email']) !!}
                                    @if($errors->has('email'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="form-group required {{ $errors->has('pm') ? 'has-error' : '' }}">

                                    {!! Form::select('pm', array('paypal'=>'Paypal','cheque'=>'Cheque','dd'=>'DD'), null, ['placeholder' => 'Select Your Pay Type']) !!}
                                    @if($errors->has('pm'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('pm') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <div class="form-group required {{ $errors->has('state') ? 'has-error' : '' }}">

                                    {!! Form::select('state', array('state 1'=>'state 1','state 2'=>'state 2','state 3'=>'state 3'), null, ['placeholder' => 'Select Your State']) !!}
                                    @if($errors->has('state'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="form-group required {{ $errors->has('city') ? 'has-error' : '' }}">

                                    {!! Form::select('city', ['city 1'=>'city 1','city 2'=>'city 2','city 3'=>'city 3'], null, ['placeholder' => 'Select Your City']) !!}
                                    @if($errors->has('city'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <div class="form-group required {{ $errors->has('zip') ? 'has-error' : '' }}">

                                    {!! Form::text('zip', null, ['class' => 'form-control','placeholder'=>'Zip code']) !!}
                                    @if($errors->has('zip'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('zip') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="form-group required {{ $errors->has('tn') ? 'has-error' : '' }}">

                                    {!! Form::number('tn', null, ['class' => 'form-control','placeholder'=>'Number of Tickets']) !!}
                                    @if($errors->has('tn'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('tn') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group required {{ $errors->has('message') ? 'has-error' : '' }}">

                                {!! Form::textarea('message', null, ['row' => 6, 'class' => 'form-control','placeholder'=>'Message..']) !!}
                                @if($errors->has('message'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('message') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn submit mt-3">Buy Ticket</button>
                    {!! Form::close() !!}
                </div>
            </div>






        </div>
    </div>
    <!-- //blog -->

@stop