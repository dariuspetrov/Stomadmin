@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mt-5 offset-md-1">
                <center><h1>404 Not found</h1></center>
                <br>
                <center><a href="{{ url('users') }}"><h2>Users list</h2></a></center>
            </div>
        </div>
    </div>
@stop
