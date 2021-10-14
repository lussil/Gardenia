@extends('adminlte::page')

@section('title', 'Gardenia - Promocao')

@section('content_header')
    <h1>Promocaos</h1>
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
            <td>Categoria</td>
            <td>Nome</td>
            
        </tr>
    </thead>      
    <tbody>
            <tr>
                @foreach ($promocoes as $key => $value )


                
                <tr>
                    <td> {{$value->id}}</td>
                    
                    <td> {{$value->nome}}</td>
                    <td>
                        @foreach ( $value->produto as $produto )
                        {{$produto->nome}} <br>
                        @endforeach

                    </td>
            
                    <!-- 
                         <td> {{-- $value->id --}}</td>
                         <td> {{-- $value->categoria->nome --}}</td>
                         <td> {{-- $value->nome--}}</td>
                        
                        
                        <td>
                        <a class="btn btn-primary" href="{{ URL::to('promocao/' . $value->id) }}">Visualizar</a>
                    </td>

                    <td> 
                        <a class="btn btn-warning" href="{{ URL::to('promocao/' . $value->id . '/edit') }}"> editar</a>
                    </td>
                    
                    <td>
                        {{ Form::open(array('url' => 'promocao/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td> -->
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
