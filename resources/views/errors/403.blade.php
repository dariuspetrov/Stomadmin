@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mt-5 offset-md-1">
                <center><h1>403 Forbidden</h1></center>
                <br>
                <center><a href="{{ url()->previous() }}"><h2>Back</h2></a></center>
            </div>
        </div>
    </div>
@stop
