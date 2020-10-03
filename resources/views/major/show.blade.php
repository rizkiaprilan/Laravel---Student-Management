@extends('layouts/master')

@section('title')
    Majority | Home
@endsection

@section('header-content')
    Majority Page
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
                    <th>DESCRIPTION</th>
                </tr>
                @foreach($data as $f)
                    <tr>
                        <td>{{$f->id}} </td>
                        <td>{{$f->name}}</td>
                        <td>{{$f->description}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
