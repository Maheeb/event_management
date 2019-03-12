@extends('layouts.bd.bmain')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="pull-left">
                            <a href="{{ route('event.create') }}" class="btn btn-success">Add New</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body ">
                        @if (! $evs->count())
                            <div class="alert alert-danger">
                                <strong>No record found</strong>
                            </div>
                        @else
                            <table class="table table-bordered">
                                <thead>
                                <tr>

                                    <td width="80">Action</td>
                                    <td>Title</td>
                                    <td width="120">Extra text</td>
                                    <td width="120">Duration</td>
                                    <td width="120">Location</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($evs as $ev)

                                    <tr>
                                        <td>
                                            {!! Form::open(['method' => 'DELETE' ,'action'=>['EveController@destroy',$ev->id]]) !!}
                                            <a href="{{ route('event.edit', $ev->id) }}" class="btn btn-xs btn-default">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button type="submit" class="btn btn-xs btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>


                                            {!! Form::close() !!}
                                        </td>

                                        <td>{{ $ev->title }}</td>
                                        <td>{{ $ev->et }}</td>
                                        <td>{{ $ev->duration }}</td>
                                        <td>{{ $ev->loc }}</td>


                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- ./row -->
    </section>
@stop