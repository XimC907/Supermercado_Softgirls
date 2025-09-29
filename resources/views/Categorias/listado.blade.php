<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</head>
<body>
    <h1 style="text-align: center">Listado de Categorías</h1>

    <div style="text-align:right">
            <a href="{{route('form_reg_categoria')}}" class="btn btn-success">Añadir</a>
    </div>

    <table style="width: 99%; margin: auto" class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <th style="text-align: center" scope="col">Id</th>
                <th style="text-align: center" scope="col">Nombre</th>
                <th style="text-align: center" scope="col">Descripcion</th>
                <th style="text-align: center" scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- $categorias se define desde el controlador en compact y $ca es la variable iteradora que recorre el ciclo -->
            @foreach($categorias as $ca)
            <tr>
                <th style="text-align: center" scope="row">{{$ca->id}}</th>
                <td style="text-align: center">{{$ca->nombreCategoria}}</td>
                <td style="text-align: center">{{$ca->descripcion}}</td>
                <td style="text-align: center"> 
                    <a class="btn btn-primary" href="{{route('form_edc_cat', $ca->id)}}">Editar</a>
                    <a class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>