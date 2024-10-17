<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    
    public function home()
    {
        return view('inicio');
    }
    public function insert()
    {
        return view('formulario');
    }
    public function select()
    {
        return view('clientes');
    }
    public function procesarCliente(Request $peticion)
    {
        //respuesta a la petición POST
        //return 'La info del cliente a llegado al controlador';
        //mostamos la ip de la petición;
        //return $peticion->ip();
        //mostamos la ruta de la petición;
        //return $peticion->url();
        //Nos regresa todo lo que esta guardado en la petición:
        return $peticion->all();
    }
}