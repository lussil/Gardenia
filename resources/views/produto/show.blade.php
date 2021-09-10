
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')


<div class="container col-8">
	<p>ID:                  {{ $produto->id }}</p>
    <p>Nome:                {{ $produto->nome }}</p>
    <p>Descrição:           {{ $produto->descricao }}</p>
	<p>Valor:               {{ $produto->valor}}</p>
    <p>Categoria:           {{ $produto->categoria->nome }}</p>
    <p>Criação:             {{ Carbon\Carbon::parse($produto->created_at)->format('d/m/Y H:i') }}</p>
    <p>Última modificação:  {{ Carbon\Carbon::parse($produto->updated_at)->format('d/m/Y H:i') }}</p>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


