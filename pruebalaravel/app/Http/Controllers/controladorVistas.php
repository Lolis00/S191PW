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
    //en la peticion se guardan los cambios de los campos
    public function procesarCliente(Request $peticion)
    {
    //hacemos una validacion y es obligatoria no como la otra, tenemos que cumplir con estas reglas para que se pueda ejecutar lo demas 
        $validacion=$peticion->validate([
    //hay diferentes validaiones y se van concatenando con | 
    //validacion min y max
    //validacion de numero numeric
    //validacion correo email, rfc, dns
    //validacion 

            'txtnombre'=>'required|min:3|max:20',
            'txtapellido'=>'required',
            'txtcorreo'=>'required|email:rfc:dns',
            'txttelefono'=>'required|numeric',
        ]);
//---------------------------------------------

        //respuesta a la petición POST
        //return 'La info del cliente a llegado al controlador';
        //mostamos la ip de la petición;
        //return $peticion->ip();

        //mostamos la ruta de la petición;
        //return $peticion->url();

        //Nos regresa todo lo que esta guardado en la petición:
        //return $peticion->all();
//-------------------------------------------------------------------------------------------------------------------
        //redireccionando usando la ruta (nos redirecciona al inicio)
        //return redirect('/');

        //redireccion usando el nombre de ruta (usamos el apodo de nuestra ruta)
        //return redirect ()->route('rutaconsulta');

        //redirección al origen de la petición
        //return back();

        //redirección con valores adjuntos (variables, arreglos, etc...)
        //$id=[['usuario'=>'1'],['usuario'=>'2']];
        //compact = función para redireccinar valores
        //return view('formulario', compact('id'));

        //para ver que si lo hacemos podemos utilizar una función llamada tom en formulario.blade

        //---------------------------------

        //sesion: tenemos que matenerla el tiempo que se necesite para hacer mensjes de comfirmaciones o de errores
        //preparamos un mensaje
        //declaramos una variable llamada usuario con el imput txtnombre para signarle el nombre.
        //usamos la sesion con un mensaje flash
        $usuario=$peticion->input('txtnombre');
        //flash necesita 2 parametros en donde l parametro 1 va la llave y el el parametro 2 el mensaje
        //. para concatenar
        session()->flash('exito','se guardo el usuario: '.$usuario);

        //to_route para regresarnos a la ruta
        return to_route('rutacacas');

    }
}