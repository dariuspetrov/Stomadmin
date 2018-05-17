@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Create an intervention</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br> <hr>
                    <div class="col-md-8 offset-md-2">
                        <form method="POST" action="/interventions">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="sel1">Pacient list:</label>
                                <select class="form-control" name="pacient_name">
                                    @foreach($pacients as $pacient)
                                        <option>{{ $pacient->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Intervention list:</label>
                                <select class="form-control" name="intervention_name">
                                    @foreach($interventions as $intervention)
                                        <option>{{ $intervention->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="pacient_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success pull-right">Submit</button>
                            </div>
                            @include ('layouts.errorsdisplay')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
