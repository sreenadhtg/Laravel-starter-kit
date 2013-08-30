@extends('layouts.master')


@section('content')
  <h3>My Profile</h3>

    Name : {{$user->name}} <br />
    Email : {{$user->email}}
@stop