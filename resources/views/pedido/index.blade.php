@extends('adminlte::page')

@section('title', 'Gardenia - Novos pedidos')

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
 
    <div class="callout callout-info">
@if ($pedido->count() < 0)

    <P >AGUARDE NOVOS PEDIDOS</P > 
@else
 <P>NOVOS PEDIDOS </P >

@endif
</div>
    <table class="table  no-margin">
        <thead>
            <tr>
                <td>Nome</td>
                <td>Telefone</td>
                <td>detalhes do pedido</td> 
            </tr>
        </thead>
        <tbody>
                <tr>
                    @foreach ($pedido as $value) 
                        <td>    {{$value->nome}}</td> 
                        <td>    {{$value->telefone}}</td>
                        <td><a class="btn btn-primary" href="{{ URL::to('pedido/' . $value->id) }}">Detalhar</a></td>
                </tr>
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
