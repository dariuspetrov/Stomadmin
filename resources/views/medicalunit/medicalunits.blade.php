@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Medical units list</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($units as $unit)
                                    <tr>
                                        <td><a href="{{ url('medicalunits').'/'.$unit->unit_id }}">{{$unit->unit_id}}</a></td>
                                        <td>{{$unit->name}}</td>
                                        <td>{{$unit->address}}</td>
                                        <td>{{$unit->phone}}</td>
                                        <td><a href="{{ url('medicalunits').'/'.$unit->unit_id.'/edit' }}">Edit</a></td>

                                        <td><form method="POST" action="/medicalunits/{{ $unit->unit_id }}">
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
