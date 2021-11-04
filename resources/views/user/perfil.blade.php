@extends('adminlte::page')

@section('title', 'Gardenia - Usuários')


@section('content')

<div class="container col-8">
	<p>ID:                  {{ $user->id }}</p>
    <p>nome:                {{ $user->name }}</p>
    <p>email:               {{ $user->email }}</p>

    
    <p>Criação:             {{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i') }}</p>
    <p>Última modificação:  {{ Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i') }}</p>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop



