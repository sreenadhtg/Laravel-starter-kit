@extends('layouts.master')


@section('content')
    <a href="/profile">My account</a> <br/>
    <a href="/users">Users</a> <br/>
    <a href="/logout">Logout</a>

    <div style="margin:0px auto;width:500px;text-align: center;">
        <h3>Hi {{$user->name}} , Welcome to home page.<h3>
    </div>
@stop
