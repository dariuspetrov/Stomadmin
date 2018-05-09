@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mt-5 offset-md-1">
                <center><h1>That user has an appointment! you have to remove the appointment first.</h1></center>
                <br>
                <center><a href="{{ url('appointments') }}"><h2>Appointments list</h2></a></center>
            </div>
        </div>
    </div>
@stop
