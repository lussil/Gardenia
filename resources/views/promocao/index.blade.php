@extends('adminlte::page')

@section('title', 'Gardenia - Promocao')

@section('content_header')
    <h1 style="text-align: center;">Promoções</h1>
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

    <a class="btn btn-lg btn-success mb-2" href="{{URL::to ('promocao/create')}}">Criar Promoções
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg>
    </a>
            
                @foreach ($promocoes as $key => $value )

               
                <ul class="list-group" >              
                    <li class="list-group-item active">{{$value->nome}}</li>
                        
                        @foreach ( $value->produto as $produto )
                        <ul>
                            <li class="list-group-item"> {{$produto->nome}} /  @if ($produto->promocao === 1)
                            Produto em promoção!
                        @else
                            
                        @endif</li>
                        </ul> 
                       
                        
                        @endforeach
                </ul>
                @endforeach
  
                
</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
