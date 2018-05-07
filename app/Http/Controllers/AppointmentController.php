<?php

namespace Stomadmin\Http\Controllers;

use Stomadmin\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('view-appointments')){
            $appointment = new Appointment();
            return $appointment->all();
        }
        else{
            return response()->view('errors.403');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointment.create');
        if(Gate::allows('view-create-appointment-panel')){
        }
        else{
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();

    }

    /**
     * Display the specified resource.
     *
     * @param  \Stomadmin\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment,$appointmentid)
    {
        return $appointment->where('appointment_id','=',$appointmentid)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Stomadmin\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Stomadmin\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Stomadmin\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
