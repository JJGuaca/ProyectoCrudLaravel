<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light pb-5 mb-3">
      <a class="navbar-brand" href="./">HOME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('productos.index') }}">PRODUCTOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cliente.index') }}">CLIENTES</a>
        </li>
    </ul>
</div>
</nav>
<div class="container my-5">
    <h4>Proveedores</h4>
    <div class="row ">
        <div class="col-12">
            <form action="{{route('proveedor.index')}}" method="get">
                <div class="form-row">
                    <div class="col-sm-4 my-1">
                        <input type="text" class="form-control" name="buscar" value="{{$buscar}}">
                    </div>
                    <div class="col-auto my-1" >
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                    <div class="col-auto my-1" >
                        <a href="{{route('proveedor.create')}}" class="btn btn-success">Nuevo Proveedor</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nomrbres</th>
                            <th colspan="2">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(count($proveedor)<=0)
                        <tr>
                            <td colspan="7" class="text-center">No hay resultados</td>
                        </tr>

                        @else
                        @foreach($proveedor as $proveedores)
                        <tr>
                            <td>{{$proveedores->id}}</td>
                            <td>{{$proveedores->nombres}}</td>
                            <td><a href="{{route('proveedor.edit',$proveedores->id)}}" class="btn btn-warning btn-block">Editar</a></td>
                            <td>
                                <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#delete-{{$proveedores->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('proveedor.delete')
                        @endforeach
                        @endif                         
                    </tbody>
                </table>
                {{$proveedor->links()}}
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>