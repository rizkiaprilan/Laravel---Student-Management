@extends('layouts/master')

@section('title')
    Card | Home
@endsection

@section('header-content')
    Card Page
@endsection

@section('content')
    <div class="box">
        <a href="/card/create">
            <button class="btn-primary">
                Create Card
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
                    <th>STUDENT ID</th>
                    <th>ACTION</th>
                </tr>
                @foreach($card as $c)
                    <tr>
                        <td>{{$c->id}} </td>
                        <td>{{$c->student->name}}</td>
                        <td><a href="/card/show/{{$c->id}}">{{$c->student->id}}</a></td>
                        <td>
{{--                            <a href="/card/edit/{{$c->id}}">EDIT</a>|--}}
                            <a href="/card/delete/{{$c->id}}">DELETE</a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
