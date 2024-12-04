<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $encabezado;
    public $titulo;
    public $textoBoton;
    /**el constructr tiene que tener 3 parametros ya que son los que definimos */
    public function __construct($encabezado,$titulo,$textoBoton)
    {
        /**this para apuntar a los parametros del constructor */
        $this->encabezado=$encabezado;
        $this->titulo=$titulo;
        $this->textoBoton=$textoBoton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
