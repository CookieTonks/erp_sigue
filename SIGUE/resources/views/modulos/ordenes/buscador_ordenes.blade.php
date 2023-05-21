@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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


