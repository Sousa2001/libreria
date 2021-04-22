<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;


class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
                //Instanciem la classe Libro
                $libro = new Libro;
                //Declarem el nom amb el request
                $libro->titulo = $request->titulo;
                $libro->autor = $request->autor;
                $libro->precio = $request->precio;
                $libro->isbn = $request->isbn;
                $libro->numpag = $request->numpag;
                //Desem els canvis
                $libro->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Libro::where('id', $id)->get();
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
        $libro = Libro::where('id',$id);
        //Declarem el nom amb el request
        /*$libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->precio = $request->precio;
        $libro->isbn = $request->isbn;
        $libro->numpag = $request->numpag;*/
        //Desem els canvis
        $libro->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro=Libro::where('id',$id);
        $libro->delete();
    }
}
