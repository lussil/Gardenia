
@extends('adminlte::page')

@section('title', 'Gardenia - Criar produtos')

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

    {{ Form::open(array('url' => '/produto/create')) }}
    <div class="row">
        <div class="col-6">
            {{ Form::label('nome', 'Nome do produtos') }}
            {{ Form::text('nome', null , ['class' => 'form-control'] )}}
        </div>
        <div class="col-6">
            {{ Form::label('categoria', 'Categoria' , ['class' => 'form-select ']) }} 
            {{ Form::select('categoria_id', $categorias,null, array('class' => 'form-control ')) }} 
        </div>
        <div class="col-12">
            {{ Form::label('descricao', 'Descrição' , ['class' => ' '] ) }}
            {{ Form::text('descricao', null , ['class' => 'form-control  '] ) }}
        </div>
        <div class="col-4">
            {{ Form::label('valor', 'valor') }}
            {{ Form::number('valor', null , ['class' => 'form-control ' ,'step'=> 'any'] ) }} 
        </div>
        <div class="col-4">
        {{ Form::label('promocao', 'promocao') }}
        {{ Form::select('promocao', ['1' => 'Sim', '0' => 'Não'],'0', array('class' => 'form-control') ) }}
        </div>
    </div>
    {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-3']) }}
    
    {{ Form::close()  }}


</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


