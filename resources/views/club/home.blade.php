@extends('layouts/master')

@section('title')
    Club | Home
@endsection

@section('header-content')
    Club Page
@endsection

@section('content')
    <div class="box">
        <a href="club/create">
            <button class="btn-primary">
                Create Club
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
                @foreach($club as $c)
                    <tr>
                        <td>{{$c->id}} </td>
                        <td>{{$c->name}}</td>
                        <td>{{$c->description}}</td>
                        <td><a href="/club/edit/{{$c->id}}">EDIT</a>|<a href="/club/delete/{{$c->id}}">DELETE</a></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
