@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Diagnostics list</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col"></th>
                                    <th scope="col">Nume</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($diagnostics as $diagnostic)
                                    <tr>
                                        <td><a href="{{ url('diagnostics').'/'.$diagnostic->diagnostic_id }}">{{$diagnostic->diagnostic_id}}</a></td>
                                      <td>{{ $diagnostic->id }}</td>
                                        <td>{{ $diagnostic->name }}</td>

                                        <td><form method="POST" action="/diagnostics/{{ $diagnostic->diagnostic_id }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger">Delete</button>
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
