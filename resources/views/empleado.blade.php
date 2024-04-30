<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h2><b>Empleados</b></h2>
        <div class="mt-3">
            <a href="{{route('empleado.crear')}}" class="btn btn-primary">Crear Producto</a>
        </div>
        <table class="table table-striped mt-3">
            <thead>
               <tr>
                   <th>Prestamo</th>
                   <th>Nombre</th>
                   <th>Apellido</th>
                   <th>fechaIngreso</th>
                   <th>salario</th>
               </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                <tr>
                    <th>{{$empleado->prestamo}}</th>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apellido}}</td>
                    <td>{{$empleado->fechaIngreso}}</td>
                    <td>{{$empleado->salario}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
</html>