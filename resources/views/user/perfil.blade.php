@extends('adminlte::page')

@section('title', 'Gardenia - Usuários')

@section('content_header')
    <h1 style="text-align: center;">Bem-Vindo {{ $user->name }}</h1>
@stop

@section('content')

<div class="container col-8">
	<p scope="row">ID:                   {{ $user->id }}</p>
    <p scope="row">Nome:                 {{ $user->name }}</p>
    <p scope="row">E-mail:               {{ $user->email }}</p>

    
    <p scope="row">Criação:             {{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i') }}</p>
    <p scope="row">Última modificação:  {{ Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i') }}</p>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop



