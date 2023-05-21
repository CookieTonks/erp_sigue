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

        <div class="col-sm-4">
            <div class="card-group hk-dash-type-2">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <div>
                                <span class="d-block font-15 text-dark font-weight-500">Alta cliente</span>
                            </div>
                            <div>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#alta_cliente">
                                    <i class="icon-plus"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="alta_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo: Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('alta_cliente')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="nombre">Razon social</label>
                            <input name="nombre" class="form-control" id="nombre" placeholder="" value="" type="text" required>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>