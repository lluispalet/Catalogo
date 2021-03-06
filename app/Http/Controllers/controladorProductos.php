<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class controladorProductos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all()->where('categoria','carteras');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //render vistas
    public function create()
    {
        return view('agregar');
    }

    public function chequeras()
    {
        return view('chequeras');
    }

    public function billeteras()
    {
        return view('billeteras');
    }

     public function carteras()
    {
        return view('carteras');
    }

     public function cinturones()
    {
        return view('cinturones');
    }

     public function contacto()
    {
        return view('contacto');
    }

     public function monederos()
    {
        return view('monederos');
    }

    public function promociones()
    {
        return view('promociones');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //metodo ocupado para los datos que son enviados por post y agregar el producto
    public function store(Request $request)
    {
        //dd($request->all());
        $producto= new Productos();
        $producto->modelo=$request->modelo;
        $producto->rutaImagen=$request->rutaImagen;
        $producto->precio=$request->precio;
        $producto->descripcion=$request->descripcion;
        $producto->categoria=$request->categoria;
        $producto->save();
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
