@extends('components.layout')

@section('title','Doceria Gardenia - Adicionar {{$produto->nome}} Ao Carrinho')



@section('content')

@if (\Session::has('message'))
<div class="alert alert-success">
    {!! \Session::get('message') !!}
</div>
@endif
        <div class="box-body d-flex justify-content-center">      
     
      
        <div class="card card-primary col-5">
          {{ Form::open(array('url' => '/addProduto')) }}  
          {{ Form::hidden('produto_id', $produto->id) }}
          {{ Form::hidden('nome', $produto->nome) }}
          {{ Form::hidden('valor', $produto->valor) }}
            <div class="card-body">
              <div class="form-group">
                {{ $produto->nome}}
              </div>
              <div class="form-group">
                {{ $produto->valor}}
              </div>
              <div class="form-group">
                {{ $produto->descricao}}
              </div>    
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row g-3">
                <div class="col-12">
                  {{ Form::label('quantidade', 'Quantidade' , ['class' => 'form col-12 ']) }} 
                 
                </div>
                <div class="col-6">
                  {{ Form::number('quantidade', 1, array('class' => 'form-control ', 'min' => '1')) }}
                </div>
                <div class="col-6">
                  {{ Form::submit('Adicionar ao Carrinho', array('class' => 'btn btn-primary ' )) }}
                </div>
              </div>
            </div>

            
            {{ Form::close() }}
        </div>
        
      </div>
@endsection