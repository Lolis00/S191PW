<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepasoController extends Controller
{
    public function index() {
        return view('repaso1');
    }
    public function convertir(Request $request) {
        $cantidad = $request->input('cantidad');
        $unidad = $request->input('unidad');
        $resultado = '';
    
        switch($unidad) {
            case 'mb_to_gb':
                $resultado = $cantidad . ' MB son ' . ($cantidad / 1024) . ' GB';
                break;
            case 'gb_to_mb':
                $resultado = $cantidad . ' GB son ' . ($cantidad * 1024) . ' MB';
                break;
            case 'gb_to_tb':
                $resultado = $cantidad . ' GB son ' . ($cantidad / 1024) . ' TB';
                break;
            case 'tb_to_gb':
                $resultado = $cantidad . ' TB son ' . ($cantidad * 1024) . ' GB';
                break;
        }
    
        return view("repaso1", ['resultado' => $resultado]);
    }
    
    
}
