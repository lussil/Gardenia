
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

    {{ Form::label('nome', 'Nome do produtos') }}
    {{ Form::text('nome', null , ['class' => 'form-control mb-3'] )}}
     
    {{ Form::label('categoria', 'Categoria' , ['class' => 'form-select ']) }} 
    <br>
    {{ Form::select('categoria_id', $categorias,null, array('class' => 'form-control')) }} 
    <br>
    {{ Form::label('descricao', 'Descrição' , ['class' => 'mt-3 '] ) }}
    {{ Form::text('descricao', null , ['class' => 'form-control mb-3 '] ) }}

    {{ Form::label('valor', 'valor') }}
    {{ Form::number('valor', null , ['class' => 'form-control mb-3' ,'step'=> 'any'] ) }}

    

    
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


