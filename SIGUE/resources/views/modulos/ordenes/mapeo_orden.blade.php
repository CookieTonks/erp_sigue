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
                                    <th>OT</th>
                                    <th>MOVIMIENTO</th>
                                    <th>RESPONSABLE</th>
                                    <th>HORA</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>OT</th>
                                    <th>MOVIMIENTO</th>
                                    <th>RESPONSABLE</th>
                                    <th>HORA</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($registros as $registro)
                                <tr>
                                    <td>{{$registro->ot}}</td>
                                    <td>{{$registro->movimiento}}</td>
                                    <td>{{$registro->responsable}}</td>
                                    <td>{{$registro->created_at }}</td>
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