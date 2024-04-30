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
        <h2><b>Productos</b></h2>
        <div class="mt-3">
            <a href="{{route('productos.crear')}}" class="btn btn-primary">Crear Producto</a>
        </div>
        <table class="table table-striped mt-3">
            <thead>
               <tr>
                   <th>ID</th>
                   <th>Descripci&oacute;n</th>
                   <th>Precio</th>
                   <th>Stock</th>
                   <th>PagaIsv</th>
               </tr>
            </thead>
            <tbody>
                @foreach($productos as $product)
                <tr>
                    <th>{{$product->identity}}</th>
                    <td>{{$product->descripcion}}</td>
                    <td>{{$product->precio}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->pagaIsv}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
</html>