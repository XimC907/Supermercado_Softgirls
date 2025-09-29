@extends('..formato')
 @yield('contenido')

 <div class="container">
    <h1>Registro Categorias</h1>
    <form action="{{url('/categorias/registro')}}" method="POST">
        <!-- Para proteger los datos que viajen por el formulario (que estén en plantilla blade) -->
         <!-- FORMULARIO: campos botón de  acción SUBMIT (dentro de etiqueta form) -->
          <!-- form siempre tiene una accion "action"(hacia donde) y "method"(cómo lo hace) -->
        @csrf 
        <div class="mb-3">
            <label for="nombre_categoria" class="form-label">Nombre Categoria</label>
            <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria">
        </div>

        <div class="mb-3">
            <label for="descripcion_categoria" class="form-label">Descripcion Categoria</label>
            <input type="text" class="form-control" id="descripcion_categoria" name="descripcion_categoria">
        </div>
  
  
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>


 </div>

