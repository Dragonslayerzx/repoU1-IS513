<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 col-md-4">
        <h2>Crear un Proveedor</h2>
        <form action="{{route('proveedor.guardar')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">ID proveedor</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label for="">Fecha de Registro</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="form-group">
                <label for="">Telefono</label>
                <input type="text" class="form-control" name="telefono">
            </div>
            <div class="form-group">
                <label for="">Correo</label>
                <input type="text" class="form-control" name="correo">
            </div>
            <a href="{{route('proveedor.ver')}}" class="btn btn-warning">Volver</a>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>

    </div> 
</body>
</html>