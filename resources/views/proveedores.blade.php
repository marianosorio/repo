<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
</head>
<body>
    <div class="container">        
    <h1>Proveedores</h1>
    <br>
    <a class="btn btn-success" href="{{ route('proveedores.agregar') }}">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id Proveedor</th>
                <th>Nombre</th>
                <th>Fecha de Registro</th>
                <th>telefono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $Proveedores)
            <tr>
                <td>{{ $proveedores->idProveedor }}</td>
                <td>{{ $proveedores->nombre }}</td>
                <td>{{ $proveedores->fechaRegistro }}</td>
                <td>{{ $proveedores->telefono}}</td>
                <td>{{ $proveedores->correo}}</td>
            </tr>
            @endforeach
            
            
            
        </tbody>

    </table>
    </div>
</body>
</html>