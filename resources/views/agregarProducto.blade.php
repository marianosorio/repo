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
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Agregar Producto</h2>
                <br>
                <form action="{{ route('productos.guardar') }}" method="post">
                    @method('post')
                    @csrf
                    <div class="form-group">
                        <label for="color">descripcion:</label>
                        <input name="descripcion" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="metros">precio</label>
                        <input name="precio" type="text"class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Stock:</label>
                        <input name="stock" type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">PagaIsv:</label>
                        <input name="pagaIsv" type="text" class="form-control"/>
                    </div>

                    
                    <br>
                    <div class="form-group">
                        <a class="btn btn-warning" href="{{ route('productos.inicio') }}">Volver</a>
                        <button type="submit" class="btn btn-success">Guardar</button>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>