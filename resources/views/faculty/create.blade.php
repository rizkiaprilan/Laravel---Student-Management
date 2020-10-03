@extends('layouts/master')

@section('title')
    faculty | Create
@endsection

@section('header-content')
    faculty Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create Faculty</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/faculty" method="post">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="POST">
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label >Faculty Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Faculty Name">
                </div>
                <div class="form-group">
                    <label >Description</label>
                    <input type="text" class="form-control"  name="description" placeholder="Description">
                </div>


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    @endsection
