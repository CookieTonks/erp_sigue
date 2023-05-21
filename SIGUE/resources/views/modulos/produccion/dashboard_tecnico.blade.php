@extends('layouts.app')

<div id="main-content">
    <div class="block-header">
        @if (session('mensaje-error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('mensaje-error')}}
            <script type="text/javascript">
                $('.alert').alert()
            </script>
        </div>
        @elseif (session('mensaje-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('mensaje-success')}}
            <script type="text/javascript">
                $('.alert').alert()
            </script>
        </div>
        @endif

        <div class="row clearfix">
            <div class="col-md- col-sm-12">
                <h2>Produccion - Tecnico</h2>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered  js-basic-example">
                            <thead>
                                <tr>
                                    <th tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" style="width: 116.8px;">
                                       
                                    </th>
                                    <th>OT</th>
                                    <th>Cliente</th>
                                    <th style="width: 10%">Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>F.Entrega</th>
                                    <th>Procesos</th>
                                    <th>Tecnico</th>
                                    <th><i class="fa fa-tasks" aria-hidden="true"></i></th>
                                    <th><i class="fa fa-spinner" aria-hidden="true"></i></th>
                                    <th>Estatus</th>
                                </tr>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>
                                    </th>
                                    <th>OT</th>
                                    <th>Cliente</th>
                                    <th style="width: 10%">Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>F.Entrega</th>
                                    <th>Procesos</th>
                                    <th>Tecnico</th>
                                    <th><i class="fa fa-tasks" aria-hidden="true"></i></th>
                                    <th><i class="fa fa-spinner" aria-hidden="true"></i></th>
                                    <th>Estatus</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($ordenes as $orden)
                                <tr>
                                    <td>
                                        <div style="width: -moz-max-content;width: max-content;">
                                            <a href="{{route('iniciar_orden', $orden->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-play" aria-hidden="true"></i> </a>
                                            <a href="{{route('pausar_orden', $orden->id)}}" class="btn btn-warning btn-sm"> <i class="fa fa-stop" aria-hidden="true"></i></a>
                                            <a href="{{route('terminar_orden', $orden->id)}}" class="btn btn-success btn-sm"> <i class="fa fa-check" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                    <td>{{$orden->ot}}</td>
                                    <td>{{$orden->cliente}}</td>
                                    <td style="width: 10%">{{$orden->descripcion}}</td>
                                    <td>{{$orden->cantidad}}</td>
                                    <td>{{$orden->fecha_entrega}}</td>
                                    <td>{{$orden->procesos}}</td>
                                    <td>{{$orden->tecnico}}</td>
                                    <td>{{$orden->total}}</td>
                                    <td>{{$orden->avance}}</td>
                                    <td>{{$orden->estatus}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>