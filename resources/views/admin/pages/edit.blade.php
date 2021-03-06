<!-- Create é o nome do método que exibe esta view -->

@extends('admin.layouts.template')

@section('title', "Editar produto: {$product->name}")


@section('content')
    <h1>Editar produto {{ $product->name }}</h1>

    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        <!-- Form so trabalha com POST ou GET, por isto deve-se usar: -->
        <!-- <input type="hidden" name="_method" value="PUT"> -->
        <!-- Ou conforme abaixo: -->
        {{-- comentario bladek --}}
        @method('PUT')
        <!-- Envia o token para este caso de alidação do próprio Laravel!! -->
        <!-- <input type="text" name="_token" value="{{ csrf_token() }}"> -->
        <!-- Ou pode-se usar apenas a diretiva abaixo: -->
        @include('admin.pages._partial.form')
        <button type="submit">Enviar</button>
    </form>

@endsection