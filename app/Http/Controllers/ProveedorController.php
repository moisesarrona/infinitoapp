<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use App\Http\Requests\ProveedorRequest;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sugerencias = Proveedor::all();
        return view('proveedor.crear', compact('sugerencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedorRequest $request)
    {
        /*$proveedor = request()->except('_token');
        Proveedor::create($proveedor);*/
        $proveedor = new Proveedor($request->input());
        $proveedor->save();
        return redirect('proveedor/')->with('estatus', 'Se guardo correctamente: '.$proveedor->nombre);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedor.mostrar', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        $sugerencias = Proveedor::all();
        return view('proveedor.editar', compact(['proveedor', 'sugerencias']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(ProveedorRequest $request, Proveedor $proveedor)
    {
        /*$proveedor = request()->except('_method', '_token');
        Proveedor::where('id','=',$id)->update($proveedor);*/
        $proveedor->fill($request->all());
        $proveedor->save();
        return redirect('proveedor/'.$proveedor->id)->with('estatus', 'Se edito correctamente: '.$proveedor->nombre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        //
    }
}
