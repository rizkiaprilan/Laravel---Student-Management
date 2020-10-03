@extends('layouts/master')

@section('title')
    Credit | Create
@endsection

@section('header-content')
    Credit Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create Credit</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/credit" method="post">
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
                    <label>Student Card ID</label>
                    <select class="form-control" name="card_id">
                        @foreach ($card as $d)
                            <option value="{{$d->id}}">{{$d->name}}</option>        //buat dropdown list
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label >Balance</label>
                    <input type="text" class="form-control"  name="balance" placeholder="Balance">
                </div>



            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
