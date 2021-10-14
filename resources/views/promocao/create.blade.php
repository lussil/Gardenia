@extends('adminlte::page')

@section('title', 'Gardenia - Criar promocao')

@section('content_header')
    <h1>Promoções</h1>
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

    {{ Form::open(array('url' => '/promocao/create')) }}

    {{ Form::label('nome', 'Nome da promocao') }}
    {{ Form::text('nome', null , ['class' => 'form-control'] )}}
    
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
