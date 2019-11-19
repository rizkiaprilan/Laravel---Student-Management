@extends('layouts/master')

@section('title')
    Student | Home
@endsection

@section('header-content')
    Student Page
@endsection

@section('content')
    <div class="box">
        <a href="student/create">
            <button class="btn-primary">
                Create Student
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
                    <th>MAJORITY ID</th>
                    <th>ADDRESS</th>
                </tr>
                @foreach($student as $s)
                    <tr>
                        <td>{{$s->id}} </td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->majority_id}}</td>
                        <td>{{$s->address}}</td>
                        <td><a href="/student/edit/{{$s->id}}">EDIT</a>|<a href="/student/delete/{{$s->id}}">DELETE</a></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
