<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <div class="container">        
    <h1>Productos</h1>
    <br>
    <a class="btn btn-success" href="{{ route('productos.agregar') }}">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id </th>
                <th>descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>PagaIsv</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $Productos)
            <tr>
                <td>{{ $productos->idProducto }}</td>
                <td>{{ $productos->descripcion}}</td>
                <td>{{ $productos->precio }}</td>
                <td>{{ $productos->stock}}</td>
                <td>{{ $productos->pagaIsv}}</td>
            </tr>
            @endforeach
            
            
            
        </tbody>

    </table>
    </div>
</body>
</html>