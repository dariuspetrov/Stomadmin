<?php

namespace Stomadmin\Http\Controllers;

use Stomadmin\Intervention;
use Stomadmin\InterventionType;
use Stomadmin\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;
use Validator;

class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('view-interventions')){
            $interventions = Intervention::orderBy('pacient_id')->get();

            return view('intervention.interventions')->with('interventions',$interventions);
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
        $data = [
            'pacients' => User::where('role','=',0)->get(),
            'interventions' => InterventionType::all()
        ];

        return view('intervention.create')->with($data);
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
            'pacient_name' => 'required',
            'intervention_name' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to("intervention/create")->withErrors($validator);
        }
        else{
            $pacient = new User;
            $intervention = new Intervention();
            $interventiontype = new InterventionType();

            $intervention->pacient_id = $pacient::where('name', '=', request('pacient_name'))->get()->first()->id;
            $intervention->intervention_type = $interventiontype::where('name', '=', request('intervention_name'))->get()->first()->intervention_id;

            $intervention->save();

            return Redirect::to('interventions');
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
        return Intervention::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // should intervention have an edit/update?
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intervention = Intervention::find($id);
        $intervention->delete();

        return Redirect::to('interventions');
    }
}

