<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\User;
use Cinema\Http\Requests\UserCreaterequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Cinema\Http\Requests;
use Cinema\Http\Requests\LoginRequest;
use Session;
use Redirect;
use Auth;
use Illuminate\Routing\Route;

class UsuarioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //$users = User::onlyTrashed()->paginate(2);
        $users = User::paginate(2);
        return view('usuario.index', compact('users'));
    }

    //Muestra el perfil de la pagina lo controla
    public function mostrarPerfil()
    {
        return view('usuario.perfil');
    }

    public function log(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return Redirect::to('tutorial');
        }
        Session::flash('message-error', 'Datos son incorrectos');
        return Redirect::to('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreaterequest $request)
    {
        //   User::create([
        //     'name' => $request['name'],
        //   'email' => $request['email'],
        // 'password' => $request['password']
        //]);
        User::create($request->all());
        Session::flash('message', 'Please log in to continue...');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = user::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message', 'Usuario editado correctamente');
        return Redirect::to('\usuario');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('message', 'Usuario eliminado correctamente');
        return Redirect::to('\usuario');
    }
}
