@extends('layouts/master')

@section('title')
    Card | Create
@endsection

@section('header-content')
    Card Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create Card</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/card" method="post">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="POST">
            </div>
            <div class="box-body">
                {{--                <div class="form-group">--}}
                {{--                    <label >Student Name</label>--}}
                {{--                    <input type="text" class="form-control" name="name" placeholder="Enter Student Name">--}}
                {{--                </div>--}}
                <div class="form-group">
                    <label>Student Name</label>
                    @if($errors->has('name'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{$errors->first('name')}}</li>
                            </ul>
                        </div>
                    @endif


                    <select class="form-control" name="name">
                        @foreach ($student as $s)
                            <option value="{{$s->name}}">{{$s->name}}</option>        //buat dropdown list
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label>Student ID</label>
                    @if($errors->has('student_id'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{$errors->first('student_id')}}</li>
                            </ul>
                        </div>
                    @endif
                    <select class="form-control" name="student_id">
                        @foreach ($student as $s)
                            <option value="{{$s->id}}">{{$s->name}}</option>        //buat dropdown list
                        @endforeach

                    </select>
                </div>


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
