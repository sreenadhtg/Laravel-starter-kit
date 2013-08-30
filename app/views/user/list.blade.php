@extends('layout')

@section('content')
    @foreach($users as $user)
        <a href="/user/{{$user->id}}">{{ $user->name }}</a> <br/>
    @endforeach
@stop





