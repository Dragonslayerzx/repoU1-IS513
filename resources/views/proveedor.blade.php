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
        <h2><b>Proveedores</b></h2>
        <div class="mt-3">
            <a href="{{route('proveedor.crear')}}" class="btn btn-primary">Crear Provedor</a>
        </div>
        <table class="table table-striped mt-3">
            <thead>
               <tr>
                   <th>Proveedor</th>
                   <th>Nombre</th>
                   <th>Fecha de Registro</th>
                   <th>Telefono</th>
                   <th>Correo</th>
               </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                <tr>
                    <th>{{$proveedor->proveedor}}</th>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->fechaRegistro}}</td>
                    <td>{{$proveedor->telefono}}</td>
                    <td>{{$proveedor->correo}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
</html>