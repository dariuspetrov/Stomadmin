@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Referrals list</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col"></th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Pacient</th>
                                    <th scope="col">Medical Unit</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($referrals as $referral)
                                    <tr>
                                        <td><a href="{{ url('referrals').'/'.$referral->referral_id }}">{{$referral->referral_id}}</a></td>
                                        <td>{{ $referral->id }}</td>
                                        <td>{{ $referral->doctor->name }}</td>
                                        <td>{{ $referral->pacient->name }}</td>
                                        <td>{{ $referral->unit->name }}</td>
                                        <td>{{ $referral->date }}</td>
                                        <td><a href="{{ url('referrals').'/'.$referral->referral_id.'/edit' }}">
                                            <button class="btn btn-primary">Edit</button>
                                        </a></td>

                                        <td><form method="POST" action="/referrals/{{ $referral->referral_id }}">
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
