@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin panel - {{ Auth::user()->name }}</div>
                    <hr>
                    <br>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/users') }}" >
                                    <div class="panel-item-image"></div>
                                    <hr>
                                    <h3 class="text-center">View users</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/users/create') }}" >
                                    <div class="panel-item-image"></div>
                                    <hr>
                                    <h3 class="text-center">Add users</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/appointments') }}" >
                                    <div class="panel-item-image"></div>
                                    <hr>
                                    <h3 class="text-center">View Appointments</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/appointments/create') }}" >
                                    <div class="panel-item-image"></div>
                                    <hr>
                                    <h3 class="text-center">Create Appointments</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
