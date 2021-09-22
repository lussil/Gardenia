@extends('adminlte::page')

@section('title', 'Gardenia - Usuários')


@section('content')
<div class="container col-8">
    <table class="table  no-margin">
       <thead>
           <tr>
               <td>ID</td>
               <td>Email</td>
               <td>nome</td>
               <td>ações</td>
           </tr>
       </thead>      
       <tbody>
               <tr>
                   @foreach ($user as $key => $value )
                   <tr>
                       <td> {{$value->id}}</td>
                       <td> {{$value->email}}</td>
                       <td> {{$value->name}}</td>
                       
                       <td>
                   
                   <a class="btn btn-warning" href="#"> editar</a>
                   <a class="btn btn-danger" href="#"> deletar</a>
               </td>
                   </tr>
                   @endforeach
               </tr>
       </tbody>
    </table>
    <a class="btn btn-success btn-lg" href="{{URL::to ('/register')}}"> Novo Usuário</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop



