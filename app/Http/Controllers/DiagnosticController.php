<?php

namespace Stomadmin\Http\Controllers;

use Stomadmin\Diagnostic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Stomadmin\User;
use Redirect;
use Session;
use Validator;

class DiagnosticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnostics = Diagnostic::all();

        return view('diagnostic.diagnostics')->with('diagnostics', $diagnostics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diagnostics = Diagnostic::all();

        return view('diagnostic.create')->with('diagnostics',$diagnostics);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['diagnostic_name' => 'required'];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to("diagnostics/create")->withErrors($validator);
        }
        else{
            $diagnostic = new Diagnostic();
            $diagnostic->name = request('diagnostic_name');

            $diagnostic->save();

            return Redirect::to('diagnostics');
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
        return Diagnostic::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // no edit method
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
        // no update method
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnostic = Diagnostic::find($id);

        $diagnostic->delete();

        return Redirect::to('diagnostics');
    }
}
