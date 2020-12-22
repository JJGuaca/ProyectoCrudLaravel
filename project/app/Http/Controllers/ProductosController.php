<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = trim($request->get('buscar'));   
        $productos   = DB::table('productos')
                    ->select('id','nombres','precio','cantidad','user_id')
                    ->where('nombres', 'Like', '%'.$buscar.'%')
                    ->orderBy('nombres', 'asc')
                    ->paginate(10);
        return view('productos.index', compact('productos','buscar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Productos;
        $producto->nombres=$request->input('nombres');
        $producto->precio=$request->input('precio'); 
        $producto->cantidad=$request->input('cantidad'); 
        $producto->user_id=$request->input('usuario_id');
        $producto->save();
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Productos::findOrFail($id);
        return view('productos.edit', compact('productos'));
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
        $productos = Productos::findOrFail($id);
        $productos->Nombres=$request->input('Nombre');
        $productos->Precio=$request->input('precio');
        $productos->cantidad=$request->input('Cantidad');
        $productos->user_id=$request->input('proveedorid');
        $productos->save();
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = Productos::findOrFail($id);
        $productos->delete();
        return redirect()->route('productos.index');
    }
}
