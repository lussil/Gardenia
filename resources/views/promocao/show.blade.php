@extends('adminlte::page')

@section('title', 'Gardenia - detalhes da promocao')

@section('content_header')
    <h1>Promocaos</h1>
@stop

@section('content')
<div class="container col-8">
	<p>ID:                  {{ $promocao->id }}</p>
    <p>Nome:                {{ $promocao->nome }}</p>
   
    <p>Criação:             {{ Carbon\Carbon::parse($promocao->created_at)->format('d/m/Y H:i') }}</p>
    <p>Última modificação:  {{ Carbon\Carbon::parse($promocao->updated_at)->format('d/m/Y H:i') }}</p>
   
    <a class="btn btn-primary btn-lg" href="{{URL::to('promocao/')}}">Voltar</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
