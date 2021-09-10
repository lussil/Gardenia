@extends('adminlte::page')

@section('title', 'Dashboard')
<h1>Usuários</h1>

@section('content')

<div class="container col-8">

            {{ Form::open(array('url' => '/user/create')) }}

            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name', null , ['class' => 'form-control'] )}}
            
            {{ Form::label('email', 'E-mail') }}
            {{ Form::text('email', null , ['class' => 'form-control'] ) }}

            {{ Form::label('password', 'senha') }}
            {{ Form::password('password', null, ['class' => 'form-control']) }}
                
            {{ Form::label('password', 'confirmar senha') }}
            {{ Form::password('password', null, ['class' => 'form-control']) }}
                
            {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success ']) }}

        
            {{ Form::close()  }}
        
            {{ Form::close()  }}



        </div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


