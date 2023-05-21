@extends('layouts.app')

<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Dashboard</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-cube"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right hidden-xs">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card w_card3">
                    <div class="body">
                        <div class="text-center"><i class="fa fa-bell" aria-hidden="true"></i>
                            <h5 class="m-t-20 mb-0">Ordenes de trabajo</h5>
                            <p class="text-muted"></p>
                            <a href="{{route('dashboard_ordenes')}}" class="btn btn-success btn-round">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card w_card3">
                    <div class="body">
                        <div class="text-center"><i class="fa fa-cogs" aria-hidden="true"></i>
                            <h5 class="m-t-20 mb-0">Produccion</h5>
                            <p class="text-muted"></p>
                            <a href="{{route('dashboard_produccion')}}" class="btn btn-success btn-round">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card w_card3">
                    <div class="body">
                        <div class="text-center"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                            <h5 class="m-t-20 mb-0">Administrador</h5>
                            <p class="text-muted"></p>
                            <a href="javascript:void(0);" class="btn btn-success btn-round">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>