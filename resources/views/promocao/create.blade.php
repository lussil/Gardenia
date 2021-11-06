@extends('adminlte::page')

@section('title', 'Gardenia - Adicionar Promoção')

@section('content_header')
    <h1 style="text-align: center">Promoções</h1>
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

    {{ Form::label('produto', 'Produto') }}
    {{ Form::select('produto_id', $produtos,  null, array('class' => 'form-control')) }}
    
    
    
    {{ Form::label('valor', 'valor') }}
    {{ Form::number('valor', null , ['class' => 'form-control' ,'step'=> 'any', 'placeholder' => 'Ex: 4,00'] ) }}

    {{ Form::submit('Adicionar Promoção' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
    <a class="btn btn-primary " href="{{URL::to('promocao/')}}">Voltar</a>
    {{ Form::close()  }}

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    
    

     </script>
@stop
