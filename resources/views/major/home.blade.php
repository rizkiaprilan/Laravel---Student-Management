@extends('layouts/master')

@section('title')
    Major | Home
@endsection

@section('header-content')
    Major Page
@endsection

@section('content')
    <div class="box">
        <a href="/majority/create">
            <button class="btn-primary">
                Create Majority
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
                    <th>FACULTY ID</th>
                    <th>DESCRIPTION</th>
                    <th>ACTION</th>
                </tr>
                @foreach($major as $m)
                    <tr>
                        <td>{{$m->id}} </td>
                        <td>{{$m->name}}</td>
                        <td>{{$m->faculty_id}}</td>
                        <td>{{$m->description}}</td>
                        <td><a href="/majority/edit/{{$m->id}}">EDIT</a>|<a href="/majority/delete/{{$m->id}}">DELETE</a></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
