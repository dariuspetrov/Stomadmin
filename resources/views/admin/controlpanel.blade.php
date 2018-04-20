@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin panel - {{ Auth::user()->name }}</div>
                    <hr>
                    <div class="panel-body">
                        <a href="{{ url('/admin/viewusers') }}" >
                            <div class="col-md-3 panel-item">
                                <div class="panel-item-image"></div>
                                <hr>
                                <h3 class="text-center">View users</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
