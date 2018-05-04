<?php

namespace Stomadmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Stomadmin\User;

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
            return view('admin.userlist')->with('usersdata', $user::all());
            //echo $user::all();
        }
        else
            echo 'Not allowed';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::allows('store-user')){
            $user = new User();

            $user->email = request('email');
            $user->name = request('name');
            $user->password = bcrypt(request('password'));
            $user->role = request('role');

            $user->save();

            return redirect('/');
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
            echo 'Not allowed';
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
        //
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
        //
    }
}
