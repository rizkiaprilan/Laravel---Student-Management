@extends('layouts/master')

@section('title')
    faculty | Home
@endsection

@section('header-content')
    faculty Page
@endsection

@section('content')
    <div class="box">
        <a href="faculty/create">
            <button class="btn-primary">
                Create faculty
            </button>
        </a>
        <div class="box-header">
            <h3 class="box-title">{{$title}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-condensed">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>ACTION</th>
                </tr>
                @foreach($faculty as $f)
                    <tr>
                        <td>{{$f->id}} </td>
                        <td><a href="/faculty/show/{{$f->id}}">{{$f->name}}</a></td>
                        <td>{{$f->description}}</td>
                        <td><a href="/faculty/edit/{{$f->id}}">EDIT</a>|<a href="/faculty/delete/{{$f->id}}">DELETE</a></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
