@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Create a diagnostic</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br> <hr>
                    <div class="col-md-8 offset-md-2">
                        <form method="POST" action="/diagnostics">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="sel1">Diagnostic name:</label>
                                <input type="text" class="form-control" name="diagnostic_name">
                                </input>
                            </div>
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
