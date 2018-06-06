@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    @foreach($interventions as $intervention)
                        <p>{{ $intervention->type->name }} - {{ $intervention->type->price }} RON</p>
                    @endforeach
                    <p>Total: {{ $total }} RON</p>
                </div>
            </div>
        </div>
    </div>
@stop
