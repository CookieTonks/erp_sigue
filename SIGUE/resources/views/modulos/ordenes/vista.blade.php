<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="gb18030">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<style media="screen">
  .table {
    margin-bottom: 0rem !important;
  }

  .table th,
  .table td {
    padding: 0rem !important;
  }
</style>

<body>
  <table class="table table-borderless">
    <thead>
      <tr>
        <th><img src="logo.png" width="100px"></th>
        <th style="text-align: right;">
          <p>Orden de Trabajo: {{$orden->id}}
            </br>
            Revision: FPR 00, Rev - 00</p>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>

      </tr>
    </tbody>
  </table>
  <p>
  <p>


    <!--Primer cuadro-->
  <div class="card bg-success" style="font-size:x-small;">
    <div style="text-align:center;" class="card-header">Datos Generales</div>
  </div>
  <table class="table table-borderless">
    <tr>
      <td scope="col">
        <div class="form-group">
          <label style="font-size:x-small;">Cliente</label>
          <input type="text" value="{{$orden->cliente}}" style="font-size:xx-small;padding: 0.35rem 0.50rem;width: 95%;display: block;color: #495057;background-color: #fff;background-clip: padding-box;border: 1px solid #ced4da;border-radius: 0.25rem;">
        </div>
      </td>
      <td scope="col">
        <div class="form-group">
          <label style="font-size:x-small;">Cantidad de Piezas</label>
          <input type="text" value="{{$orden->cantidad}}" style="font-size:xx-small;padding: 0.375rem 0.50rem;width: 93%;display: block;color: #495057;background-color: #fff;background-clip: padding-box;border: 1px solid #ced4da;border-radius: 0.25rem;">
        </div>
      </td>
    </tr>
    <tr>
      <td scope="col">
        <div class="form-group">
          <label style="font-size:x-small;">Fecha de Expedicion</label>
          <input type="text" value="{{$orden->created_at}}" style="font-size:xx-small;padding: 0.375rem 0.75rem;width: 95%;display: block;color: #495057;background-color: #fff;background-clip: padding-box;border: 1px solid #ced4da;border-radius: 0.25rem;">
        </div>
      </td>
      <td scope="col">
        <div class="form-group">
          <label style="font-size:x-small;">Fecha de Entrega</label>
          <input type="text" value="{{$orden->fecha_entrega}}" style="font-size:xx-small;padding: 0.375rem 0.75rem;width: 90%;display: block;color: #495057;background-color: #fff;background-clip: padding-box;border: 1px solid #ced4da;border-radius: 0.25rem;">
        </div>
      </td>
    </tr>
  </table>


  <div class="card bg-success" style="font-size:x-small;">
    <div style="text-align:center;" class="card-header">Procesos de OT</div>
  </div>
<br>
  <table class="table table-borderless">
    @foreach ($procesos as $proceso)
    <tr>
      <th scope="col">
      <input type="text" value="{{$proceso->proceso}}" style="font-size:xx-small;padding: 0.375rem 0.75rem;width: 96%;display: block;color: #495057;background-color: #fff;background-clip: padding-box;border: 1px solid #ced4da;border-radius: 0.25rem;">
      </th>
    </tr>
    @endforeach

  </table>

  <!--Primer cuadro-->


  <br>
  <table class="table table-borderless">
    <tr style="text-align: center;">
      <td scope="col" style="font-size:xx-small;;">
        ____________________________ <br>
        Entrega (Nombre y Firma)
      </td>
      <td scope="col" style="font-size:xx-small;;">
        ____________________________ <br>
        Recibe (Nombre y Firma)
      </td>
    </tr>
  </table>
  <br>
  <table class="table table-borderless">
    <tr style="text-align: center; font-size:xx-small;">
      <td scope="col">
        <p> Fecha de termino: </p>
      </td>
      <td scope="col">
        <p> Recibio en calidad: </p>
      </td>
      <td>
        <p> Fecha de recibido: </p>
      </td>
    </tr>
  </table>
  <center>
    <p style="font-size:xx-small;">DOCUMENTO INTERNO DE MAQUINADOS SIGUE</p>
  </center>
</body>

</html>
<style>
  .square {
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    position: relative;
    width: 100px;
    height: 50px;

  }

  .square:after {
    content: "";
    display: block;
    padding-bottom: 100%;
  }

  .content {
    position: absolute;
    width: 100px;
    height: 50px;
  }
</style>