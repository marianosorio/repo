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
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Agregar Proveedor</h2>
                <br>
                <form action="{{ route('proveedores.guardar') }}" method="post">
                    @method('post')
                    @csrf
                    <div class="form-group">
                        <label for="color">Nombre:</label>
                        <input name="nombre" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="metros">Fecha de Registro</label>
                        <input name="fechaRegistro" type="text"class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Telefono:</label>
                        <input name="telefono" type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Correo:</label>
                        <input name="correo" type="text" class="form-control"/>
                    </div>

                    
                    <br>
                    <div class="form-group">
                        <a class="btn btn-warning" href="{{ route('proveedores.inicio') }}">Volver</a>
                        <button type="submit" class="btn btn-success">Guardar</button>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>