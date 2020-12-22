<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="container">
            <div class="row my-5">
                <div class="col-lg-12 mx-auto">
                <h1 class="text-center text-muted my-4">CRUD</h1>
                </div>
                
                <div class="col-lg-6 py-5 mx-auto">
                    <div class="col-auto my-1 p-2">
                        <a href="{{ route('productos.index')}}" class="btn btn-success btn-block">PRODUCTOS</a>
                    </div>
                    <div class="col-auto my-1 p-2">
                        <a href="{{ route('proveedor.index')}}" class="btn btn-success btn-block">PROVEEDOR</a>
                    </div>
                    <div class="col-auto my-1 p-2">
                        <a href="{{ route('cliente.index')}}" class="btn btn-success btn-block">CLIENTE</a>
                    </div>
                </div>
            </div>
    </div>
        
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>
