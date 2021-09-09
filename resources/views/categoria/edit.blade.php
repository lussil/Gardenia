@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
<div class="container col-8">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{ Form::model($categoria,array('route' => array('categoria.update', $categoria->id), 'method' => 'PUT')) }}

    {{ Form::label('nome', 'Nome do categorias') }}
    {{ Form::text('nome', $categoria->nome , ['class' => 'form-control'] )}}
    
   
    {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success ']) }}

    {{ Form::close()  }}
   
 

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
