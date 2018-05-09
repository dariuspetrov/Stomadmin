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
                        <form method="POST" action="/appointments">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="sel1">Select list:</label>
                                <select class="form-control" name="doctor_name">
                                    @foreach($doctors as $doctor)
                                        <option>{{ $doctor->name }}</option>
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
