<?php

namespace Stomadmin\Http\Controllers;

use Stomadmin\MedicalUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;

class MedicalUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('view-medical-units')){
            $unit = new MedicalUnit();
            return view('medicalunit.medicalunits')->with('units', $unit::all());
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
        return view('medicalunit.create');
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
            'name'       => 'required|string',
            'address'    => 'required|string',
            'phone'      => 'required|string'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to("/medicalunits/create")->withErrors($validator)->withInput(Input::except('password'));
        }
        else {
            if(Gate::allows('store-unit')){
                $unit = new MedicalUnit();

                $unit->name = request('name');
                $unit->address = request('address');
                $unit->phone = request('phone');

                $unit->save();

                return Redirect::to('medicalunits');
            }
            else{
                return response()->view('errors.403');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Stomadmin\MedicalUnit  $medicalUnit
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalUnit $medicalUnit, $medicalunitid)
    {
        return $medicalUnit->where('unit_id','=',$medicalunitid)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Stomadmin\MedicalUnit  $medicalUnit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows('edit-unit')){
            $unit = MedicalUnit::where('unit_id', '=', $id)->first();

            if($unit != null){
                return view('medicalunit.edit')->with('unit', $unit);
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
     * @param  \Stomadmin\MedicalUnit  $medicalUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'       => 'required|string',
            'address'    => 'required|string',
            'phone'      => 'required|string'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to("/medicalunits/$id/edit")->withErrors($validator);
        }
        else {
            if(Gate::allows('edit-unit')){
                $unit = MedicalUnit::where('unit_id', '=', $id)->first();

                $unit->name = request('name');
                $unit->address = request('address');
                $unit->phone = request('phone');

                $unit->save();

                return Redirect::to('medicalunits');
            }
            else{
                return response()->view('errors.403');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Stomadmin\MedicalUnit  $medicalUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalUnit $medicalUnit)
    {
        //
    }
}
