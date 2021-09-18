<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\PedidoProduto;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pedido =  $pedido = Pedido::where('status',1)->get();
        return view('pedido.index', ['pedido' => $pedido]);
        // foreach ($pedido->produto as $produto) {
        //  echo ($produto->nome);
        //}

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             
        $pedido = Pedido::findOrFail($id);
       
        return view('pedido.show', ['pedido' => $pedido]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        
    }

    public function andamento(Pedido $pedido)
    {
        $pedido = Pedido::where('status',2)->get();
        return view('pedido.andamento', ['pedido' => $pedido]);
    }

    public function concluidos(Pedido $pedido)
    {
        $pedido = Pedido::where('status',3)->get();
        return view('pedido.concluidos', ['pedido' => $pedido]);
    }

    public function cancelados(Pedido $pedido)
    {
        $pedido = Pedido::where('status',4)->get();
        return view('pedido.cancelados', ['pedido' => $pedido]);
    }

    public function statusAndamento($id)
    {
        $pedido = Pedido::find($id);
        $pedido->status = 2;
        $pedido->save();
        
        $pedido = Pedido::where('status',2)->get();
        return view('pedido.andamento', ['pedido' => $pedido]);
    }


    public function statusConcluido($id)
    {
        $pedido = Pedido::find($id);
        $pedido->status = 3;
        $pedido->save();
        
        $pedido = Pedido::where('status',3)->get();
        return view('pedido.concluidos', ['pedido' => $pedido]);
    }

    public function statusCancelado($id)
    {
        $pedido = Pedido::find($id);
        $pedido->status = 4;
        $pedido->save();
        
        $pedido =  $pedido = Pedido::where('status',1)->get();
        return view('pedido.index', ['pedido' => $pedido]);
    }
    

}
