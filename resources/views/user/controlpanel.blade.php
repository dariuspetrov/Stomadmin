@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">User Panel</div>
                    <hr>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/userinterventions/'.Auth::user()->id) }}" >
                                    <div class="panel-item-image">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">View interventions</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/userappointments/'.Auth::user()->id) }}" >
                                    <div class="panel-item-image">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">View Appointments</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
