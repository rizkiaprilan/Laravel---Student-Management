@extends('layouts/master')

@section('title')
    Card | Home
@endsection

@section('header-content')
    Card Page
@endsection

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title">{{$judul}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-condensed">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                </tr>
                @foreach($data->student as $f)
                    <tr>
                        <td>#</td>
                        <td>{{$f->name}}</td>
                        <td>{{$f->address}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
