@extends('layouts.bd.bmain')
@section('content')
    <h1>Edit Service</h1>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body ">
                        {!! Form::model($serv,['method' => 'patch','action'=>['BackendController@update',$serv->id],'files'=>true]) !!}
                        {{csrf_field()}}
                        <div class="form-group">

                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('title', null , ['class' => 'form-control']) !!}

                        </div>




                        <div class="form-group">

                            {!! Form::label('slug', 'Slug:') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}

                        </div>


                        <div class="form-group">

                            {!! Form::label('image', 'image:') !!}
                            {!! Form::file('image', null, ['class' => 'form-control']) !!}

                        </div>



                        <div class="form-group">

                            {!! Form::submit('Update Service', ['class' => 'btn btn-primary']) !!}

                        </div>

                        {!! Form::close() !!}


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- ./row -->
    </section>

@stop




