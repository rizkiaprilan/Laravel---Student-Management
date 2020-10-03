@extends('layouts/master')

@section('title')
    majority | Home
@endsection

@section('header-content')
    majority Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Update Majority</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/majority" method="post">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value="{{$data->id}}">
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label >Majority Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Faculty Name" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label >Description</label>
                    <input type="text" class="form-control"  name="description" placeholder="Description" value="{{$data->description}}">
                </div>
                <div class="form-group">
                    <label>Faculty</label>
                    <select class="form-control" name="faculty_id">
                        @foreach ($faculty as $f)
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
