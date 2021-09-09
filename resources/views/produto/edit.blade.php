@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produtos</h1>
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

    {{ Form::model($produto,array('route' => array('produto.update', $produto->id), 'method' => 'PUT')) }}

    {{ Form::label('nome', 'Nome do produtos') }}
    {{ Form::text('nome', $produto->nome , ['class' => 'form-control'] )}}

    {{ Form::label('categoria', 'Categoria') }}
    {{ Form::select('categoria_id', $categorias , ['class' => 'form-control'] ) }}
    
    <br>
    
    {{ Form::label('descricao', 'Descrição') }}
    {{ Form::text('descricao', $produto->descricao , ['class' => 'form-control'] ) }}

    {{ Form::label('descricao', 'Descrição') }}
    {{ Form::number('valor', $produto->valor, ['class' => 'form-control']) }}
            
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






