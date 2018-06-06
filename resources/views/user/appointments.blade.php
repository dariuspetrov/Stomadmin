@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    @foreach($appointments as $appointment)
                        <p> Aveți o programare în data de <u>{{ $appointment->date }}</u> la doctorul <u>{{ $appointment->doctor->name }}</u></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
