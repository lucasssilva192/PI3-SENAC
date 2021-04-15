@extends('layouts.store')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Loja do Senac</a></li>
        <li class="breadcrumb-item"><a href="">{{ $product->category->name }}</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="">{{ $product->name }}</a></li>
    </ol>
</nav>
<div class="row">
    <div class="col-6 text-center">
        <img src="{{ asset($product->image) }}" style="width: 250px;">
    </div>
    <div class="col-6 text-center">
        <h2> {{ $product->name }} </h2>
        <p> {{ $product->description }} </p>
        <span class="h4"> R$ {{ $product->price }} </span>
        <button class="btn btn-primary"> Adicionar ao carrinho </button>
    </div>
</div>
@endsection
