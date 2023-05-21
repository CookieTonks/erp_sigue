<?php

namespace App\Http\Controllers;

use App\Models;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class produccion_controlador extends Controller
{
    public function dashboard_produccion()
    {
        $ordenes = models\production::where('estatus', '<>', 'TERMINADA')->get();
        return view('modulos.produccion.dashboard_produccion', compact('ordenes'));
    }

    public function buscador_produccion()
    {
        $ordenes = models\production::all();
        return view('modulos.produccion.buscador_produccion', compact('ordenes'));
    }


    public function edicion_produccion($id)
    {
        $orden = models\Production::findorfail($id);
        $tecnicos = models\User::all();
        return view('modulos.produccion.dashboard_edicion', compact('orden', 'tecnicos'));
    }

    public function edicion_produccion_post(Request $request, $id)
    {

        $production = models\production::findorfail($id);
        $production->cliente = $request->cliente;
        $production->descripcion = $request->descripcion;
        $production->cantidad = $request->cantidad;
        $production->fecha_entrega = $request->fecha_entrega;
        $production->estatus = $request->estatus;
        $production->tecnico = $request->tecnico;
        $production->save();
        return back()->with('mensaje-success', '¡Orden de trabajo editada con exito!');
    }

    public function dashboard_tecnico()
    {
        $ordenes = models\Production::where('tecnico', '=',  Auth::user()->name)->where('estatus', '<>', 'FINALIZADA')->get();
        return view('modulos.produccion.dashboard_tecnico', compact('ordenes'));
    }

    public function salida_produccion(Request $request)
    {

        $now = Carbon::now();

        $salida =  new models\salidas_produccion();
        $salida->ot = $request->ot;
        $salida->cliente = $request->cliente;
        $salida->cantidad = $request->cantidad;
        $salida->estatus = $request->tipo_salida;

        if ($request->tipo_salida === "SALIDA FINAL") {
            $produccion = models\Production::where('ot', '=', $request->ot)->first();
            $produccion->estatus = "TERMINADA";
            $produccion->save();

            $registro_jets = new models\sigue_registros();
            $registro_jets->ot = $produccion->ot;
            $registro_jets->movimiento = 'PRODUCCION - FINAL';
            $registro_jets->responsable = Auth::user()->name;
            $registro_jets->save();
        }
        $salida->save();

        return back()->with('mensaje-success', '¡OT enviada a las: ' . $now . ' a calidad!');
    }

    public function iniciar_orden($id)
    {

        $now = Carbon::now();

        $orden_programador = models\production::findorfail($id);

        $registro_maquina = new models\registros_maquinas();
        $registro_maquina->ot = $orden_programador->ot;
        $registro_maquina->tipo = 'INICIO';
        $registro_maquina->maquina = $orden_programador->maquina_asignada;
        $registro_maquina->hora_inicio = $now;
        $registro_maquina->responsable = Auth::user()->name;
        $registro_maquina->save();

        $orden_programador->estatus = 'EN MAQUINA';
        $orden_programador->save();





        $registro_jets = new models\sigue_registros();
        $registro_jets->ot = $orden_programador->ot;
        $registro_jets->movimiento = 'PRODUCCION - INICIADA';
        $registro_jets->responsable = Auth::user()->name;
        $registro_jets->save();




        return back()->with('mensaje-success', '¡OT iniciada a las: ' . $now . ' registrada');
    }




    public function pausar_orden($id)
    {

        $now = Carbon::now();

        $orden_programador = models\production::findorfail($id);

        $registro_maquina = new models\registros_maquinas();
        $registro_maquina->ot = $orden_programador->ot;
        $registro_maquina->tipo = 'PAUSADA';
        $registro_maquina->maquina = $orden_programador->maquina_asignada;
        $registro_maquina->hora_inicio = $now;
        $registro_maquina->responsable = Auth::user()->name;
        $registro_maquina->save();

        $orden_programador->estatus = 'PAUSADA';
        $orden_programador->save();





        $registro_jets = new models\sigue_registros();
        $registro_jets->ot = $orden_programador->ot;
        $registro_jets->movimiento = 'PRODUCCION - PAUSADA';
        $registro_jets->responsable = Auth::user()->name;
        $registro_jets->save();




        return back()->with('mensaje-success', '¡OT pausada a las: ' . $now . ' registrada');
    }

    public function terminar_orden($id)
    {
        $now = Carbon::now();

        $orden_programador = models\production::findorfail($id);

        $registro_maquina = new models\registros_maquinas();
        $registro_maquina->ot = $orden_programador->ot;
        $registro_maquina->tipo = 'FINALIZADA';
        $registro_maquina->maquina = $orden_programador->maquina_asignada;
        $registro_maquina->hora_inicio = $now;
        $registro_maquina->responsable = Auth::user()->name;
        $registro_maquina->save();

        $orden_programador->estatus = 'FINALIZADA';
        $orden_programador->save();





        $registro_jets = new models\sigue_registros();
        $registro_jets->ot = $orden_programador->ot;
        $registro_jets->movimiento = 'PRODUCCION - FINALIZADA';
        $registro_jets->responsable = Auth::user()->name;
        $registro_jets->save();




        return back()->with('mensaje-success', '¡OT finalizada a las: ' . $now . ' registrada');
    }
}
