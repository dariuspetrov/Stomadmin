@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Create an appointment</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br> <hr>
                    <div class="col-md-8 offset-md-2">
                        <form method="POST" action="/user/create">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-success pull-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
