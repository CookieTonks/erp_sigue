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
                <h2>Ordenes de trabajo</h2>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered  js-basic-example">
                            <thead>
                                <tr>
                                    <th tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" style="width: 116.8px;">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                                            Agregar
                                        </button>
                                    </th>
                                    <th>OT</th>
                                    <th>Cliente</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>


                                    </th>
                                    <th>OT</th>
                                    <th>Cliente</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($ordenes as $orden)
                                <tr>
                                    <td>
                                        <div style="width: -moz-max-content;width: max-content;">
                                            <a href="{{route('formato_orden', $orden->id)}}" class="btn btn-secondary btn-sm"> <i class="fa fa-file" aria-hidden="true"></i> </a>
                                            <a href="" class="btn btn-primary btn-sm"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a href="{{route('borrar_orden', $orden->id)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                    <td>{{$orden->id}}</td>
                                    <td>{{$orden->cliente}}</td>
                                    <td>{{$orden->descripcion}}</td>
                                    <td>{{$orden->cantidad}}</td>
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

<!-- Modal de registro -->



<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva: Orden de Trabajo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('registro_ordenes')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Cliente</label>
                        <input type="text" class="form-control" name="cliente" id="cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" required>
                    </div>
                    <div class="form-group">
                        <label for="">Cantidad</label>
                        <input type="number" class="form-control" name="cantidad" id="cantidad" required>
                    </div>
                    <div class="form-group">
                        <label for="">F. Entrega</label>
                        <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega" required>
                    </div>
                    <div class="form-group">
                        <label for="">Procesos</label>
                        <input type="text" class="form-control" name="procesos" id="procesos" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>