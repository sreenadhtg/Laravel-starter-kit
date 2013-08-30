@extends('layouts.master')
@section('content')
    <div >
        <form name="loginForm" method="POST" action="" id="loginForm"/>
        <div>
            <label class="label">Username </label>
            <input type="text" name="email" id="email" />
        </div>

        <div>
            <label class="label">password </label>
            <input type="password" name="password" id="password" />
        </div>
        <input type="submit" class="btn" name="login" value="Sign In"/>
    </form>
    </div>
@stop



<style>

    body {
        margin:50px 0px; padding:0px;
        text-align:center;
    }

    #loginForm {
        width:425px;
        margin:0px auto;
        text-align:center;
        padding:5px 15px;
        border:1px dashed #333;
        background-color:#eee;
    }

    #loginForm .label {
        display: inline-block;
        width: 15%;
    }
    
    #loginForm .btn {
        padding: 5px;
        margin: 5px 0px;
    }
</style>