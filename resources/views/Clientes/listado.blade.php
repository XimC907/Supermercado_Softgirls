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
    <table style="width: 99%; margin:auto" class="table table-dark table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cédula</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Género</th>
                <th scope="col">Foto Cliente</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $c)
            <tr>
                <td style="justify-content: center; text-align: center; vertical-align: middle" scope="row">{{$c->id}}</td>
                <td style="vertical-align: middle">{{$c->nombreCliente}}</td>
                <td style="vertical-align: middle" >{{$c->cedulaCliente}}</td>
                <td style="vertical-align: middle" >{{$c->direccionCliente}}</td>
                <td style="vertical-align: middle" >{{$c->telefonoCliente}}</td>
                <td style="vertical-align: middle" >{{$c->generoCliente}}</td>
                <td><img src="{{ asset('images/clientes/' . $c->fotoCliente) }}" alt="Foto de {{$c->nombreCliente}}" class="img-thumbnail" 
                style="width: 70px; height: 70px; object-fit: cover;"></td>
                <td style="vertical-align: middle" >
                    <a class="btn btn-primary">Editar</a>
                    <a class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>