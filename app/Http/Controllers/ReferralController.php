<?php

namespace Stomadmin\Http\Controllers;

use Stomadmin\Referral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Stomadmin\User;
use Stomadmin\MedicalUnit;
use Validator;
use Redirect;
use Session;
use Carbon\Carbon;

class ReferralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referrals = Referral::all();

        return view('referral.referrals')->with('referrals',$referrals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'pacients' => User::where('role','=',0)->get(),
            'units' => MedicalUnit::all()
        ];

        return view('referral.create')->with($data);
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
            'unit_name' => 'required',
            'doctor_id' => 'required',
            'pacient_name' => 'required',
            'date'      => 'required',
            'time'      => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to("referrals/create")->withErrors($validator);
        }
        else{
            $user = new User;
            $unit = new Medicalunit;
            $referral = new Referral;

            $referral->unit_id = $unit->where('name', '=', request('unit_name'))->first()->unit_id;
            $referral->pacient_id = $user->where('name', '=', request('pacient_name'))->first()->id;
            $referral->doctor_id = request('doctor_id');
            $referral->date = new Carbon(request('date').request('time'));

            $referral->save();

            return Redirect::to('referrals');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Referral::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'referral' => Referral::where('referral_id', '=', $id)->get()->first(),
            'pacients' => User::where('role','=',0)->get(),
            'units' => MedicalUnit::all()
        ];

        if($data['referral'] != null){
            return view('referral.edit')->with($data);
        }
        else{
            return view('errors.404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'pacient_name' => 'required',
            'unit_name' => 'required',
            'doctor_id' => 'required',
            'date'      => 'required',
            'time'      => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to("referrals/$id/edit")->withErrors($validator);
        }
        else {
            $user = new User;
            $unit = new Medicalunit;
            $referral = Referral::find($id);

            $referral->unit_id = $unit->where('name', '=', request('unit_name'))->first()->unit_id;
            $referral->pacient_id = $user->where('name', '=', request('pacient_name'))->first()->id;
            $referral->doctor_id = request('doctor_id');
            $referral->date = new Carbon(request('date').request('time'));

            $referral->save();

            return Redirect::to('referrals');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $referral = Referral::find($id);
        $referral->delete();
    }
}
