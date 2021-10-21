@extends('adminlte::page')

@section('title', 'Gardenia - Promocao')

@section('content_header')
    <h1>Promoções</h1>
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

            
                @foreach ($promocoes as $key => $value )

               
                      <ul>                 
                            <li>{{$value->nome}}</li>
                        
                        @foreach ( $value->produto as $produto )
                        <ul>
                          <li> {{$produto->nome}} /  @if ($produto->promocao === 1)
                            Produto em promoção!
                        @else
                            Produto fora de promoção!
                        @endif</li>
                        </ul> 
                       
                        
                        @endforeach
                </ul>
                @endforeach
  
</div>
<form>
  
       
       
        
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
