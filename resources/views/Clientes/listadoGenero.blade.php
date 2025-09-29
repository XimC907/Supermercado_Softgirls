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
    <h1 style="text-align: center">Listado de Clientes</h1>
    <div style="text-align:right">
            <a class="btn btn-success">Añadir Cliente</a>
        </div>
    <table style="width: 99%; margin: auto" class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <th style="text-align: center" scope="col">Id</th>
                <th style="text-align: center" scope="col">Nombre</th>
                <th style="text-align: center" scope="col">Cédula</th>
                <th style="text-align: center" scope="col">Dirección</th>
                <th style="text-align: center" scope="col">Teléfono</th>
                <th style="text-align: center" scope="col">Género</th>
                <th style="text-align: center" scope="col">Foto</th>
                <th style="text-align: center" scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
             @foreach($gender as $g)
            <tr>
                <th style="text-align: center" scope="row">{{$g->id}}</th>
                <td style="text-align: center">{{$g->nombreCliente}}</td>
                <td style="text-align: center">{{$g->cedulaCliente}}</td>
                <td style="text-align: center">{{$g->direccionCliente}}</td>
                <td style="text-align: center">{{$g->telefonoCliente}}</td>
                <td style="text-align: center">{{$g->generoCliente}}</td>
                <td style="text-align: center"><img src="{{ asset('images/clientes/' . $g->fotoCliente) }}" alt="Foto de {{$g->nombreCliente}}" class="img-thumbnail" 
                style="width: 70px; height: 70px; object-fit: cover;"></td>
                <td style="text-align: center"> 
                    <a class="btn btn-primary">Editar</a>
                    <a class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>