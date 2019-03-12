@extends('layouts.bd.bmain')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="pull-left">
                            <a href="{{ route('service.create') }}" class="btn btn-success">Add New</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body ">
                        @if (! $servs->count())
                            <div class="alert alert-danger">
                                <strong>No record found</strong>
                            </div>
                        @else
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td width="80">Action</td>
                                    <td>Title</td>
                                    <td width="120">Slug</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($servs as $serv)

                                    <tr>
                                        <td>
                                            {!! Form::open(['method' => 'DELETE' ,'action'=>['BackendController@destroy',$serv->id]]) !!}
                                            <a href="{{ route('service.edit', $serv->id) }}" class="btn btn-xs btn-default">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button type="submit" class="btn btn-xs btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>


                                            {!! Form::close() !!}
                                        </td>
                                        <td>{{ $serv->title }}</td>
                                        <td>{{ $serv->slug }}</td>


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