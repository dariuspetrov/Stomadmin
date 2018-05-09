@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Edit an appointment</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br> <hr>
                    <div class="col-md-8 offset-md-2">
                        <form method="POST" action="/appointments/{{ $appointment->appointment_id }}">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="sel1">Doctor: (Initial doctor : {{  $doctors->where('id', '=', $appointment->doctor_id)->first()->name  }}) </label>
                                <select class="selectpicker" name="doctor_name">
                                    @foreach($doctors as $doctor)
                                        <option>{{ $doctor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Date: {{ $appointment->date }}</label>
                                <input id="date" type="date" name="date" value="{{ $appointment->date }}">
                            </div>
                            <div class="form-group">
                                <label for="time">Time:</label>
                                <input id="time" type="time" name="time">
                            </div>
                            <input type="hidden" name="pacient_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success pull-right">Submit</button>
                            </div>

                            @include('layouts.errorsdisplay')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
