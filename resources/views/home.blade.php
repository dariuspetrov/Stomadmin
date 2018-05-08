@switch(Auth::user()->role)
    @case(3)
        <script>window.location = "/admin";</script>
    @break
    @case(2)
        <script>window.location = "/doctor";</script>
    @break
    @case(1)
        <script>window.location = "/secretary";</script>
    @break
    @case(0)
        <script>window.location = "/user";</script>
    @break
@endswitch

@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <hr>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!,
                </div>
            </div>
        </div>
    </div>
</div>
@stop
