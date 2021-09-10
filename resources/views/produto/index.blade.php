@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
<script>
    function ConfirmDelete() {
        return confirm('Tem certeza que deseja excluir este registro?');
    }
</script>


@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="container col-8">
 <table class="table  no-margin">
    <thead>
        <tr>
            <td>ID</td>
            <td>Categoria</td>
            <td>Nome</td>
            <td>Preços</td>
            <td>Ações</td>
            
        </tr>
    </thead>      
    <tbody>
            <tr>
                @foreach ($produtos as $key => $value )
                <tr>
                    <td> {{$value->id}}</td>
                    <td> {{$value->categoria->nome}}</td>
                    <td> {{$value->nome}}</td>
                    
              <td><a class="btn btn-primary" href="{{ URL::to('produto/' . $value->id) }}">Visualizar</a>
              </td>    
              <td><a class="btn btn-warning" href="{{ URL::to('produto/' . $value->id . '/edit') }}"> editar</a>
              </td>   
              <td>          
            {{ Form::open(array('url' => 'produto/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
                
            </td>
                </tr>
                @endforeach
            </tr>
    </tbody>
 </table>
<a class="btn btn-success" href="{{URL::to ('produto/create')}}"> criar</a>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
