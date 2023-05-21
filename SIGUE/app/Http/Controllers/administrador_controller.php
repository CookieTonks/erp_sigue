<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models;
use PDF;




class administrador_controller extends Controller
{
    public function dashboard_administrador()
    {
        return view('modulos.administrador.dashboard_administrador');
    }

    public function alta_cliente(Request $request)
    {
        $cliente = new models\cliente();
        $cliente->name = $request->nombre;
        $cliente->save();

        return back()->with('mensaje-success', '¡Nuevo cliente registrado con éxito!');
    }
    
}
