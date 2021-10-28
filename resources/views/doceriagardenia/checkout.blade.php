@extends('adminlte::master')


@extends('components.layout')

@section('title','Doceria Gardenia - checkout')

@section('inicio','Opa, Estamos Quase Lá!')

@section('content')
   <h5 class="text-center"> confira seus futuros produtos</h5>
<div class="card-body">
 

<div class="row">

  <div class="col-12 col-md-6">
  form de contato aqui
  
  </div>
<div class="col-12 col-md-5">
  <div class="card">
    <div class="card-header border-transparent">
      <h3 class="card-title  text-black">Meus Produtos</h3>
      <p class="card-text text-secondary">Confira seus produtos antes de finalizar sua encomenda.</p>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table m-0">
          <thead>
          <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor</th>
            
          </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="pages/examples/invoice.html">Brigadeiro</a></td>
              <td>2</td>
              <td>R$ 6,90</td>
              
            </tr>
            <tr>
              <td><a href="pages/examples/invoice.html">Brigadeiro</a></td>
              <td>2</td>
              <td>R$ 6,90</td>
              
            </tr>
            <tr>
              <td><a href="pages/examples/invoice.html">Brigadeiro</a></td>
              <td>2</td>
              <td>R$ 6,90</td>
              
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix ">
      <p class="text-black float-right mt-2 "> Total: <span class="text-secondary ">(15 items)</span> <span class="text-black  mt-2">R$ 15,90</span></p>
    </div>
  </div>

    <div class="card-footer clearfix">
      <a href="javascript:void(0)" class="btn btn-md btn-success ">Enviar</a>
      <a href="javascript:void(0)" class="btn btn-md btn-secondary float-right">Voltar</a>
    </div>
    <!-- /.card-footer -->
  



</div>



</div>

</div>


 @endsection

