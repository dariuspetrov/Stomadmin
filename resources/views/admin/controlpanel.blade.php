@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin panel - {{ Auth::user()->name }} </div>
                    <hr>
                    <br>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/users') }}" >
                                    <div class="panel-item-image">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">View users</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/users/create') }}" >
                                    <div class="panel-item-image">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">Add users</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/appointments') }}" >
                                    <div class="panel-item-image">
                                        <i class="far fa-calendar-check"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">View Appointments</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/appointments/create') }}" >
                                    <div class="panel-item-image">
                                        <i class="far fa-calendar-plus"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">Create Appointments</h3>
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/medicalunits') }}" >
                                    <div class="panel-item-image">
                                        <i class="fas fa-hospital-alt"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">View Medical Units</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/medicalunits/create') }}" >
                                    <div class="panel-item-image">
                                        <i class="fas fa-file-medical"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">Create Medical Units</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/interventions/') }}" >
                                    <div class="panel-item-image">
                                        <i class="fas fa-syringe"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">View Interventions</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/interventions/create') }}" >
                                    <div class="panel-item-image">
                                        <i class="fas fa-file-medical-alt"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">Create Interventions</h3>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/referrals') }}" >
                                    <div class="panel-item-image">
                                        <i class="far fa-calendar-plus"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">View referrals</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/referrals/create') }}" >
                                    <div class="panel-item-image">
                                        <i class="far fa-calendar-plus"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">Create referrals</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/diagnostics') }}" >
                                    <div class="panel-item-image">
                                        <i class="far fa-calendar-plus"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">View diagnostics</h3>
                                </a>
                            </div>
                            <div class="col-md-3 panel-item">
                                <a href="{{ url('/diagnostics/create') }}" >
                                    <div class="panel-item-image">
                                        <i class="far fa-calendar-plus"></i>
                                    </div>
                                    <hr>
                                    <h3 class="text-center">Create diagnostics</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@stop

