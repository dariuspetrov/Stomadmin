<?php

namespace Stomadmin\Http\Controllers;

use Stomadmin\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
use Validator;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function showUserPanel(){
        if(Gate::allows('view-user-panel')){
            return view('user.controlpanel');
        }
        else{
            return back();
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('view-users')){
            $user = new User;
            return view('user.users')->with('usersdata', $user::all());
        }
        else
            return response()->view('errors.404');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('view-create-user-panel')){
            return view('user.create');
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
        $rules = array(
            'name'         => 'required|string',
            'email'        => 'required|email',
            'password'     => 'required|string',
            'role'         => 'required|numeric'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to("/users/create")->withErrors($validator)->withInput(Input::except('password'));
        }
        else{
            if(Gate::allows('store-user')){
                $user = new User();

                $user->email = request('email');
                $user->name = request('name');
                $user->password = bcrypt(request('password'));
                $user->role = request('role');

                $user->save();

                return Redirect::to('users');
            }
            else{
                return response()->view('errors.403');
            }
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
        if(Gate::allows('view-user')){
            $user = new User;
            echo $user::find($id);
        }
        else{
            return response()->view('errors.403');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows('edit-user')){
            $user = User::find($id);

            if($user != null){
                return view('user.edit')->with('user', $user);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'         => 'required|string',
            'email'        => 'required|email',
            'password'     => 'required|string',
            'role'         => 'required|numeric'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to("/users/$id/edit")->withErrors($validator)->withInput(Input::except('password'));
        }
        else{
            if(Gate::allows('edit-user')){
                $user = User::find($id);

                $user->email = request('email');
                $user->name = request('name');
                $user->password = bcrypt(request('password'));
                $user->role = request('role');

                $user->save();

                return Redirect::to('users');
            }
            else{
                return response()->view('errors.403');
            }
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
        $user = User::find($id);

        try {
            $user->delete();
            return Redirect::to('users');
        }
        catch (\Exception $e) {
            return view('errors.userappointed');
        }
    }
}
