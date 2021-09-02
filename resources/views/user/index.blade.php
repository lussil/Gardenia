@extends('adminlte::page')

@section('title', 'Dashboard')


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
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  
</body>
</html>