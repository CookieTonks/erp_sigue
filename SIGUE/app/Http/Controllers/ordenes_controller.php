<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models;
use PDF;




class ordenes_controller extends Controller
{
    public function dashboard_ordenes()
    {
        $ordenes = models\Order::all();
        $clientes = models\cliente::all();
        return view('modulos.ordenes.dashboard_ordenes', compact('ordenes', 'clientes'));
    }

    public function buscador_ordenes()
    {
        $ordenes = models\Order::all();
        return view('modulos.ordenes.buscador_ordenes', compact('ordenes'));
    }

    public function registro_ordenes(Request $request)
    {

        // Orden de trabajo
        $orden = new models\Order();
        $orden->cliente = $request->cliente;
        $orden->descripcion = $request->descripcion;
        $orden->cantidad = $request->cantidad;
        $orden->fecha_entrega = $request->fecha_entrega;
        $implode = implode(",", $request->Proceso);
        $orden->procesos = $implode;
        $orden->save();


        //Array de procesos
       // $array = explode(",", $request->procesos);

        $array_proceso = $request->Proceso;
        $arrlength = count($array_proceso);
        for ($i = 0; $i < $arrlength; $i++) {
          


            $alta_proceso = new Models\process;
            $alta_proceso->ot = $orden->id;
            $alta_proceso->proceso =  $array_proceso[$i];
            $alta_proceso->save();

        }


        //Tarea en produccion

        $production = new models\Production();
        $production->ot = $orden->id;
        $production->cliente = $orden->cliente;
        $production->descripcion = $orden->descripcion;
        $production->cantidad = $orden->cantidad;
        $production->fecha_entrega = $orden->fecha_entrega;
        $production->procesos = $orden->procesos;
        $production->total = count($array_proceso);
        $production->avance = 0;
        $production->estatus = "PENDIENTE";
        $production->save();


        return back()->with('mensaje-success', '¡Nueva orden de trabajo registrada con exito!');
    }

    public function formato_orden($id)
    {
        $orden = models\Order::findOrFail($id);

        $procesos = models\process::where('ot', '=', $id)->get();

        $pdf = PDF::loadView('modulos.ordenes.vista', compact('orden', 'procesos'));
        return $pdf->stream($orden->id . '.pdf');
    }


    public function borrar_orden($id)
    {
        $orden = models\Order::findOrFail($id);
        $orden->delete();
        return back()->with('mensaje-success', '¡Orden de trabajo eliminada con exito!');
    }

    public function mapeo_orden($id)
    {

        $registros = models\sigue_registros::where('ot', '=', $id)->get();
        return view('modulos.ordenes.mapeo_orden', compact('registros'));

    }

}
