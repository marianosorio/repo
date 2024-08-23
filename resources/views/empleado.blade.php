<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <div class="container">        
    <h1>Empleados</h1>
    <br>
    <a class="btn btn-success" href="{{ route('empleados.agregar') }}">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id Empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Ingreso</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $Empleados)
            <tr>
                <td>{{ $empleados->idEmpleado}}</td>
                <td>{{ $empleados->nombre }}</td>
                <td>{{ $empleados->apellido}}</td>
                <td>{{ $empleados->fechaIngreso}}</td>
                <td>{{ $empleados->salario}}</td>
            </tr>
            @endforeach
            
            
            
        </tbody>

    </table>
    </div>
</body>
</html>