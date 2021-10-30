@extends('adminlte::master')


@extends('components.layout')

@section('title','Doceria Gardenia - checkout')

@section('inicio','Opa, Estamos Quase Lá!')

@section('content')
   <h5 class="text-center"> confira seus futuros produtos</h5>
<div class="card-body container-lg">
<div class="row">

  <div class="col-12 col-md-6 ">
    <div class="card" style="background-color:#ffd000" >
      <div class="card-body">
        <form action="">
            <div  class="form-group">
              <label for="cep">CEP <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="cep" id="cep" >
            </div>
            <div  class="form-group">
              <label for="logradouro">Rua <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="logradouro" id="logradouro" readonly >
            </div>
            <div class="form-group">
              <label for="bairro">Bairro <span class="text-danger">*</span></label>
              <input type="text" class="form-control"  name="bairro"  id="bairro" readonly >
            </div>
            <div class="form-group">
              <label for="numero_casa">Número <span class="text-danger">*</span></label>
              <input type="text" class="form-control"  name="numero_casa"  id="numero_casa" >
            </div>
            <div class="form-group">
              <label for="complemento">Complemento <span class="text-danger">*</span></label>
              <input type="text" class="form-control"  name="complemento"  id="complemento" >
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control"  name="email"  id="email" >
            </div> 
            <div class="form-group">
              <label for="telefone">Telefone <span class="text-danger">*</span></label>
              <input type="text" class="form-control"  name="Telefone"  id="Telefone" >
            </div>
    

          <div class="form-floating">
            <textarea class="form-control" placeholder="Deixe uma Observação" id="observacao" style="height: 100px"></textarea>
            <label for="observacao">Observação</label>
          </div>
        </form>
      </div>
    </div>
</div>
<div class="col-12 col-md-6">
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



@section('scriptSlide')
<script type="text/javascript">
	$("#cep").focusout(function(){
	//Aqui vai o código		
	});
</script>
<script type="text/javascript">
	$("#cep").focusout(function(){
		$.ajax({
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			dataType: 'json',
			success: function(resposta){
				$("#logradouro").val(resposta.logradouro);
				$("#bairro").val(resposta.bairro);
				$("#numero_casa").focus();
			}
		});
	});
</script>

@endsection
 @endsection

