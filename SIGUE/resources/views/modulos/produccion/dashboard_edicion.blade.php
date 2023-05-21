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

                <div class="body">
                    <h1>Produccion: Edicion OT</h1>
                    <form action="{{route('edicion_produccion_post', $orden->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>Cliente</label>
                                <input name="cliente" type="text" class="form-control" value="{{$orden->cliente}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>Descripcion</label>
                                <input name="descripcion" type="text" class="form-control" value="{{$orden->descripcion}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Cantidad</label>
                                <input name="cantidad" type="text" class="form-control" value="{{$orden->cantidad}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>F. Entrega</label>
                                <input name="fecha_entrega" type="text" class="form-control" value="{{$orden->fecha_entrega}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Tecnico</label>
                                <select class="form-control" name="tecnico">
                                    <option  value="{{$orden->tecnico}}" selected>{{$orden->tecnico}}</option>
                                    @foreach($tecnicos as $tecnico)
                                    <option value="{{$tecnico->name}}">{{$tecnico->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Estatus</label>
                                <input name="estatus" type="text" class="form-control" value="{{$orden->estatus}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{route('dashboard_produccion')}}" class="btn btn-secondary"> Regresar</a>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>