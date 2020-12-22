<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Editar Producto</h4>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <form action="{{route('productos.update', $productos->id)}}" method="Post">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" required class="form-control" value="{{$productos->nombres}}">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" required class="form-control" value="{{$productos->precio}}">
                    </div>
                    <div class="form-group">
                        <label for="Cantidad">Cantidad</label>
                        <input type="number" name="Cantidad" required class="form-control" value="{{$productos->cantidad}}">
                    </div>
                    <div class="form-group">
                        <label for="proveedorid">Proveedor id</label>
                        <input type="number" name="proveedorid" required class="form-control" value="{{$productos->user_id}}">
                    </div>
                    <div class="form-group">
                        <input type="submit"  class="btn btn-primary" value="Guardar">
                        <input type="reset"  class="btn btn-danger" value="Cancelar">
                        <a href="javascript:history.back()">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>