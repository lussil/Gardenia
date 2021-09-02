@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
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
    <thead class="thead-dark">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            
            <td>ações</td>
            <td></td>
            <td></td>
        </tr>
    </thead>      
    <tbody>
            <tr>
                @foreach ($categorias as $key => $value )
                <tr>
                    <td> {{$value->id}}</td>
                    <td> {{$value->nome}}</td>
                   
                    <td>
                        <a class="btn btn-primary" href="{{ URL::to('categoria/' . $value->id) }}">Visualizar</a>
                    </td>

                    <td> 
                        <a class="btn btn-warning" href="{{ URL::to('categoria/' . $value->id . '/edit') }}"> editar</a>
                    </td>
                    
                    <td>
                        {{ Form::open(array('url' => 'categoria/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tr>
    </tbody>
 </table>
<a class="btn btn-success" href="{{URL::to ('categoria/create')}}"> criar</a>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
