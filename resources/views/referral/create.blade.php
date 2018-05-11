@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Create an referral</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br> <hr>
                    <div class="col-md-8 offset-md-2">
                        <form method="POST" action="/referrals">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="doctor_name">Units:</label>
                                <select class="form-control" name="unit_name">
                                    @foreach($units as $unit)
                                        <option>{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pacient_name">Pacients:</label>
                                <select class="form-control" name="pacient_name">
                                    @foreach($pacients as $pacient)
                                        <option>{{ $pacient->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input id="date" type="date" name="date">
                            </div>
                            <div class="form-group">
                                <label for="time">Time:</label>
                                <input id="time" type="time" name="time">
                            </div>
                            <input type="hidden" name="doctor_id" value="{{ Auth::user()->id }}">
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
