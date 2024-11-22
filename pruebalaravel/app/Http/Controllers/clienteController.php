<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    public function home()
    {
        return view('inicio');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaClientes = DB::table('cliente')->get();
        return view('clientes', compact ('consultaClientes'));
    }

    /**
     * sirve para abrir el formulario
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * aquí preparo el insert
     */
    public function store(validadadorCliente $request)
    
    {
        DB::table('cliente')->insert([
        "nombre"=>$request ->input('txtapellido'),
        "apellido"=>$request ->input('txtnombre'),
        "correo"=>$request ->input('txtcorreo'),
        "telefono"=>$request ->input('txttelefono'),
        "created_at"=>Carbon::now(),
        "updated_at"=>Carbon::now(),
        ]);

    $usuario = $request->input('txtnombre');
    //flash necesita 2 parametros en donde l parametro 1 va la llave y el el parametro 2 el mensaje
    //. para concatenar
    session()->flash('exito','se guardo el usuario: '.$usuario);

    //to_route para regresarnos a la ruta
    return to_route('rutacacas');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::table('cliente')->where('id', $id)->first();
        return view('edit_formulario', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, string $id)
{
    DB::table('cliente')->where('id', $id)->update([
        "nombre" => $request->input('txtnombre'),
        "apellido" => $request->input('txtapellido'),
        "correo" => $request->input('txtcorreo'),
        "telefono" => $request->input('txttelefono'),
        
        "updated_at" => Carbon::now(),
    ]);

    session()->flash('exito', 'El cliente ha sido actualizado.');
    return to_route('rutaconsulta');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('cliente')->where('id', $id)->delete();
    
        // Mensaje de éxito tras eliminar
        session()->flash('exito', 'Cliente eliminado exitosamente.');
        return to_route('rutaconsulta');
    }
}
