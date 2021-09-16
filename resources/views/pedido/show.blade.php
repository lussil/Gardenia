@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Novos pedidos</h1>
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
 

   
     </table>
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
                    
                    <tr>
                        <td> {{$pedido->id}}</td> 
                        <td> {{$pedido->nome}}</td> 
                        <td> {{$pedido->telefone}}</td>
                        <td> {{$pedido->observacao}}</td> 
                        <td> {{$pedido->rua}}</td>
                        <td> {{$pedido->numero}}</td><br> 
                        <td> {{$pedido->complemento_observacao}}</td>
                    </tr>
                 @foreach ($pedido->produto as $value )
                 <td> {{$value->nome}}</td> 
                 @endforeach
                </tr>
        </tbody>
     </table>
   
 
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
