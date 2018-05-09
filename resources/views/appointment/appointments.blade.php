@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Appointments list</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Pacient</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td><a href="{{ url('appointments').'/'.$appointment->appointment_id }}">{{ $appointment->appointment_id }}</a></td>
                                        <td>{{$appointment->id}}</td>
                                        <td>{{$appointment->doctor_id}}</td>
                                        <td>{{$appointment->pacient_id}}</td>
                                        <td>{{$appointment->date}}</td>
                                        <td><a href="{{ url('appointment').'/'.$appointment->appointment_id.'/edit' }}">Edit</a></td>

                                        <td><form method="POST" action="/medicalunits/{{ $appointment->appointment_id }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button>Delete</button>
                                        </form></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
