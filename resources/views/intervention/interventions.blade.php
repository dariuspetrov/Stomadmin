@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Interventions list</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Pacient</th>
                                    <th scope="col">Tip Interventie</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($interventions as $intervention)
                                    <tr>
                                        <td><a href="{{ url('interventions').'/'.$intervention->intervention_id }}">{{$intervention->intervention_id}}</a></td>
                                        <td>{{ $users->where('id', '=', $intervention->pacient_id)->first()->name }}</td>
                                        <td>{{ $intervention_types->where('intervention_id', '=', $intervention->intervention_type)->first()->name }}</td>
                                        <td><a href="{{ url('interventions').'/'.$intervention->intervention_id.'/edit' }}">Edit</a></td>

                                        <td><form method="POST" action="/interventions/{{ $intervention->intervention_id }}">
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
