<?php

namespace Stomadmin\Http\Controllers;

use Stomadmin\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Stomadmin\User;
use Redirect;
use Session;
use Validator;
use Carbon\Carbon;

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

            //return the usernames with no id's
            return view('appointment.appointments')->with('appointments', $appointment::all());
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
        // no need to for a Gate::allows('create-appointments') since every type of user should be able to create an appointment.
        $doctors = User::where('role','=',2)->get();
        return view('appointment.create')->with('doctors', $doctors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'doctor_name' => 'required',
            'date'      => 'required',
            'time'      => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to("appointments/create")->withErrors($validator);
        }
        else{
            $doctor = new User;
            $appointment = new Appointment();

            $appointment->doctor_id = $doctor::where('name', '=', request('doctor_name'))->get()->first()->id;
            $appointment->pacient_id = request('pacient_id');
            $appointment->date = new Carbon(request('date').request('time'));
            $appointment->cancelled = 0;

            $appointment->save();

            return Redirect::to('appointments');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Stomadmin\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Appointment::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Stomadmin\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows('edit-appointment')){
            $data = [
                'appointment' => Appointment::where('appointment_id', '=', $id)->get()->first(),
                'doctors' => User::where('role','=',2)->get()
            ];

            if($data['appointment'] != null){
                return view('appointment.edit')->with($data);
            }
            else{
                return view('errors.404');
            }
        }
        else{
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Stomadmin\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'doctor_name' => 'required',
            'date'      => 'required',
            'time'      => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to("appointment/$id/edit")->withErrors($validator);
        }
        else {
            $doctor = new User;

            $appointment = Appointment::where('appointment_id', '=', $id)->first();
            $appointment->doctor_id = $doctor->where('name', '=', Input::get('doctor_name'))->first()->id;
            $appointment->date = new Carbon(Input::get('date').Input::get('time'));

            $appointment->save();

            return Redirect::to('appointments');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Stomadmin\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();

        return Redirect::to('appointments');
    }
}
