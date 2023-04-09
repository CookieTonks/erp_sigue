<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;


class ordenes_controller extends Controller
{
    public function dashboard_ordenes()
    {
        $ordenes = models\Order::all();
        return view('modulos.ordenes.dashboard_ordenes', compact('ordenes'));
    }

    public function registro_ordenes(Request $request)
    {

        $orden = new models\order();
        $orden->cliente = $request->cliente;
        $orden->descripcion = $request->descripcion;
        $orden->cantidad = $request->cantidad;
        $orden->save();
        return back()->with('mensaje-success', '¡Nueva orden de trabajo registrada con exito!');
    }
}
