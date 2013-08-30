

@extends('layouts.master')


@section('content')
  <h1>Profile....</h1>

    <?php echo $user->name?> <br />
    <?php echo $user->email?>
@stop
