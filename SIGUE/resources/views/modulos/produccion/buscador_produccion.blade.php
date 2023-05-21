@extends('layouts.app')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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
                <h2>Produccion - Programacion</h2>
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
                                @if($orden->estatus === "FINALIZADA")
                                <tr class="table-success">
                                    <td>
                                        <div style="width: -moz-max-content;width: max-content;">
                                            <a href="{{route('formato_orden', $orden->ot)}}" class="btn btn-secondary btn-sm"> <i class="fa fa-file" aria-hidden="true"></i> </a>
                                            <a href="{{route('edicion_produccion', $orden->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <button type="button" class="btn  btn-success btn-sm" data-toggle="modal" data-target="#salida_orden" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                <i class="icon-check"></i>
                                            </button>
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

                                @else
                                <tr>
                                    <td>
                                        <div style="width: -moz-max-content;width: max-content;">
                                            <a href="{{route('formato_orden', $orden->ot)}}" class="btn btn-secondary btn-sm"> <i class="fa fa-file" aria-hidden="true"></i> </a>
                                            <a href="{{route('edicion_produccion', $orden->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil" aria-hidden="true"></i></a>

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
                                @endif

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="salida_orden" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva: Reubicacion de orden.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('salida_produccion')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label for="dibujo">OT</label>
                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="dibujo">Cliente</label>
                            <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="dibujo">Descripcion</label>
                            <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="cantidad">Cantidad de piezas</label>
                            <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="tipo_salida">Tipo Salida</label>
                            <select name="tipo_salida" class="form-control custom-select d-block w-100" id="maquina">
                                <option value="">Selecciona una opcion...</option>
                                <option>SALIDA PARCIAL</option>
                                <option>SALIDA FINAL</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#salida_orden').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var ot = button.data('ot')
            var cliente = button.data('cliente')
            var descripcion = button.data('descripcion')


            var modal = $(this)
            modal.find('.modal-title').text('Validación de supervisor OT')
            modal.find('#ot').val(ot)
            modal.find('#cliente').val(cliente)
            modal.find('#descripcion').val(descripcion)


        })
    });
</script>