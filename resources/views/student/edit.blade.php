@extends('layouts/master')

@section('title')
    Student | Home
@endsection

@section('header-content')
    Student Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Update Student</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/student" method="post">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value="{{$data->id}}">
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label >Student Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Student Name" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label >Address</label>
                    <input type="text" class="form-control"  name="address" placeholder="Description" value="{{$data->address}}">
                </div>
                <div class="form-group">
                    <label>Majority ID</label>
                    <select class="form-control" name="majority_id">
                        @foreach ($majority as $f)
                            <option value="{{$f->id}}">{{$f->name}}</option>        //buat dropdown list
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
