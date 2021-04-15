<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja do Senac</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<body>
    <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container">
    <h1 class="navbar-brand" href="{{url('/')}}">Loja do SENAC</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuCategoria" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuCategoria">
            @foreach(\App\Models\Category::all() as $category)
                <li><a class="dropdown-item" href="#">{{$category->name}}</a></li>
            @endforeach
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuTag" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tags
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuTag">
            @foreach(\App\Models\Tag::all() as $tag)
                <li><a class="dropdown-item" href="#">{{$tag->nome}}</a></li>
            @endforeach
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<main class="container my-4">
@if(session()->has('success'))
    <div class="alert alert-success" role="alert"> {{ session()->get('success') }} </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger" role="alert"> {{ session()->get('error') }} </div>
@endif
@yield('content')
</main>
<footer class="container bg-primary text-white">
    <div class="row">
        <div class="col-6 my-4">
            <h2>Localização:</h2>
            <address>
                Rua Lorem, ipsum dolor. <br>
                Lorem, ipsum - Lorem. <br>
                CEP: 0000000 <br>
                Telefone: 00000000 <br>
            </address>
        </div>
        <div class="col-6 my-4">
            <h2> Horário de funcionamento: </h2>
            <ul class="list-unstyled">
                <li>X</li>
                <li>X</li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>