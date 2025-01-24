<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
      body{
        background-color: rgb(239, 238, 238);
      }
    </style>
</head>
<body>
    <form style="max-width: 700px" class="container" action="{{route('rutaAddUsuario')}}" method="POST">
      @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="">Nunca compartiremos tu correo con nadie.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Edad</label>
          <input type="number" class="form-control" name="edad">
        </div>
        <button type="submit" class="btn btn-primary">Agregar usuario</button>

        @error('nombre')
        <div class="alert alert-danger">
            {{$message}}<br>
        </div>


        @enderror
        @error('email')
        <div class="alert alert-danger">
            {{$message}}<br>
        </div>
        @enderror
        @error('edad')
        <div class="alert alert-danger">
            {{$message}}<br>
        </div>
        @enderror
      </form>

      
    
</body>
</html>