@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Edit user : {{ $user->name }}</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br> <hr>
                    <div class="col-md-8 offset-md-2">
                        <form method="POST" action="/users/{{ $user->id }}">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <br>
                            <div class="form-group">
                                <label for="useremail">Email ({{ $user->email }}):</label>
                                <input type="email" class="form-control" id="email" placeholder="email@email.com" name="email">
                            </div>
                            <div class="form-group">
                                <label for="username">Name ({{ $user->name }})</label>
                                <input type="text" class="form-control" id="username" placeholder="Full Name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="pasword" placeholder="Password" name="password">
                            </div>
                            <p>Role</p>
                            <label class="radio-inline"><input type="radio" name="role" value="3">Admin</label> |
                            <label class="radio-inline"><input type="radio" name="role" value="2">Doctor</label> |
                            <label class="radio-inline"><input type="radio" name="role" value="1">Secretary</label> |
                            <label class="radio-inline"><input type="radio" name="role" value="0">User</label> |
                            <br>
                            <button type="submit" class="btn btn-success pull-right">Submit</button>

                            @include('layouts.errorsdisplay')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
