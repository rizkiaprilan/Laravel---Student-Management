@extends('layouts/master')

@section('title')
    card | Home
@endsection

@section('header-content')
    card Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Update Card</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/card" method="post">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value="{{$data->id}}">
            </div>
            <div class="form-group">
                <label >Student Name</label>
                @if($errors->has('name'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{$errors->first('name')}}</li>
                        </ul>
                    </div>
                @endif
                <input type="text" name="name" value="{{$data->name}}"
                       class="form-control" placeholder="Input Student Name">
            </div>
            <div class="form-group">
                <label >Student ID</label>
                @if($errors->has('id'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{$errors->first('id')}}</li>
                        </ul>
                    </div>
                @endif
                <input type="text" name="id" value="{{$data->id}}"
                       class="form-control" placeholder="Input Student ID">
            </div>
{{--            <div class="box-body">--}}
{{--                <div class="form-group">--}}
{{--                    <label>Student Name</label>--}}
{{--                    <select class="form-control" name="name">--}}
{{--                        @foreach ($data as $d)--}}
{{--                            <option value="{{$d->id}}">{{$d->name}}</option>        //buat dropdown list--}}
{{--                        @endforeach--}}

{{--                    </select>--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label>Student Card ID</label>--}}
{{--                    <select class="form-control" name="name">--}}
{{--                        @foreach ($card as $d)--}}
{{--                            <option value="{{$d->name}}">{{$d->name}}</option>        //buat dropdown list--}}
{{--                        @endforeach--}}

{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label>Student ID</label>--}}
{{--                    <select class="form-control" name="student_id">--}}
{{--                        @foreach ($data as $d)--}}
{{--                            <option value="{{$d->id}}">{{$d->name}}</option>        //buat dropdown list--}}
{{--                        @endforeach--}}

{{--                    </select>--}}
{{--                </div>--}}


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
