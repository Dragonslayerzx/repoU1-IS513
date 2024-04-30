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
        <h2>Crear un empleado</h2>
        <form action="{{route('empleado.guardar')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label for="">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="form-group">
                <label for="">Fecha de Ingreso</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="form-group">
                <label for="">Salario</label>
                <input type="text" class="form-control" name="salario">
            </div>
            <a href="{{route('productos.ver')}}" class="btn btn-warning">Volver</a>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>

    </div> 
</body>
</html>