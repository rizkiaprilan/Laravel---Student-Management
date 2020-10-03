@extends('layouts/master')

@section('title')
    Credit | Home
@endsection

@section('header-content')
    Credit Page
@endsection

@section('content')
    <div class="box">
        <a href="/credit/create">
            <button class="btn-primary">
                Create Credit
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
{{--                    <th>STUDENT NAME/th>--}}
                    <th>STUDENT CARD ID</th>
                    <th>BALANCE</th>
                    <th>ACTION</th>
                </tr>
                @foreach($credit as $c)
                    <tr>
                        <td>{{$c->id}} </td>
{{--                        <td>{{$c->card->name}} </td>--}}
                        <td>{{$c->student_card_id}}</td>
                        <td>{{$c->balance}}</td>
                        <td><a href="/credit/edit/{{$c->id}}">EDIT</a>|<a href="/credit/delete/{{$c->id}}">DELETE</a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
