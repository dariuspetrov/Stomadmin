@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="float-left">Edit a medical unit</p>
                        <p class="float-right"><a href="{{ URL::previous() }}">Back</a></p>
                    </div>
                    <br> <hr>
                    <div class="col-md-8 offset-md-2">
                        <form method="POST" action="/medicalunits/{{ $unit->unit_id }}">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <br>
                            <div class="form-group">
                                <label for="unitname">Unit Name ({{ $unit->name }}):</label>
                                <input type="text" class="form-control" id="unitname" placeholder="Unit Name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="address">Address ({{ $unit->address }}):</label>
                                <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone ({{ $unit->phone }}):</label>
                                <input type="text" class="form-control" id="phone" placeholder="+12 345 678 910" name="phone">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success pull-right">Edit unit</button>

                            @include('layouts.errorsdisplay')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
