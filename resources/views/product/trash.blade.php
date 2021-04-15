<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Produtos Excluídos</title>
    <script> 
        function restore(){
            return confirm('Você deseja realmente restaurar o produto?');
        }
    </script>
</head>
<body>
@include('layouts.menu')
<main class="container mt-5">
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session()->get('success')}}
</div>
@endif
    <h1> Lista de Produtos </h1>
    <a href="{{Route('product.create')}}" class="btn btn-lg btn-primary"> Criar Produto </a>
    <div class="row mt-4">
        <table class="table table-stripped">
            <thead>  
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> Preço </th>
                    <th> Descrição </th>
                    <th> Categoria </th>
                    <th> Opções </th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->category->name}}</td>
                    <td> 
                        <form class="d-inline" method="POST" action="{{ route('product.restore', $product->id) }}" onsubmit="return restore();">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-primary btn-sm">Restaurar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </main>
</body>
</html>