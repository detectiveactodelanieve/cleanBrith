<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\Models\Inicio;*/
use App\Models\Infromaciones;
use App\Models\Misvis;
use App\Models\Servicios;
use App\Models\Redes;
use App\Models\Imagenes;
use App\Models\Categoria;

class paginacontroller extends Controller
{
    public function inicio(){
        $getInformaciones = Infromaciones::all();
        $getMisvis = Misvis::all();
        $getServicios = Servicios::all();
        $getRedes = Redes::all();
        $getImagenes = Imagenes::all();
        $getCategorias = Categoria::all();
        
        return view('sitioweb/index', compact(
            'getInformaciones',
            'getImagenes',
            'getMisvis',
            'getServicios',
            'getRedes',
            'getCategorias'
        ));
    }

    public function paneldecontrol(){
        return view('layaouts/admin');
    }
}
