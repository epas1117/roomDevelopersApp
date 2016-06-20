<?php

namespace Cinema\Http\Controllers;

use Cinema\Categoria;
use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Tutorial;

class TutorialController extends Controller
{

    public function index()
    {
        $tutoriales = Tutorial::all();
        $categorias = Categoria::all();
        return view('tutorial.index', array('tutoriales' => $tutoriales, 'categorias' => $categorias));
    }

    public function filterCategoria($categoria_id)
    {
        $tutoriales = Tutorial::where('categoria_id', '=', $categoria_id)->get();
        $categorias = Categoria::all();
        return view('tutorial.index', array('tutoriales' => $tutoriales, 'categorias' => $categorias));
    }

    public function filterTitulo(Request $request)
    {
        $tutoriales = Tutorial::where('titulo', 'like', '%' . $request->input('buscar') . '%')->get();
        $categorias = Categoria::all();
        return view('tutorial.index', array('tutoriales' => $tutoriales, 'categorias' => $categorias));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutorial = Tutorial::find($id);
        return view('tutorial.detalle', ['tutorial' => $tutorial]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
