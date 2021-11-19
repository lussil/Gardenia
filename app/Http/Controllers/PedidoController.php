<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\PedidoProduto;
use App\Models\User;
use Auth;
use Carbon\Carbon;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido = Pedido::where('status',1)->orderBy('created_at', 'desc')->get();
        $numeroDePedidos =Pedido::where('status',1)->count();
        return view('pedido.index', ['pedido' => $pedido ,'numeroDePedidos' => $numeroDePedidos ]);
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
        $date = Carbon::today()->format('Y-m-d');
        $pedido = Pedido::where('status',3)->where('updated_at', $date)->get();
        return view('pedido.concluidos', ['pedido' => $pedido]);
    }

    public function cancelados(Pedido $pedido)
    {
        $date = Carbon::today()->format('Y-m-d');
        $pedido = Pedido::where('status',4)->where('updated_at', $date)->get();
        return view('pedido.cancelados', ['pedido' => $pedido]);
    }

    public function statusAndamento($id)
    {
        $pedido = Pedido::find($id);
        $pedido->status = 2;
        $pedido->save();
        $pedido = Pedido::where('status',2)->orderBy('created_at', 'desc')->get();
        return view('pedido.andamento', ['pedido' => $pedido]);
    }


    public function statusConcluido($id)
    {
        $pedido = Pedido::find($id);
        $pedido->status = 3;
        $pedido->save();

        $date = Carbon::today()->format('Y-m-d');
        $pedido = Pedido::where('status',3)->where('updated_at', $date)->get();
        return view('pedido.concluidos', ['pedido' => $pedido]);
    }

    public function statusCancelado($id)
    {
        $pedido = Pedido::find($id);
        $pedido->status = 4;
        $pedido->save();
       
        $numeroDePedidos =Pedido::where('status',1)->count();
        $pedido = Pedido::where('status',1)->get();
        return view('pedido.index', ['pedido' => $pedido ,'numeroDePedidos' => $numeroDePedidos ]);
       
    }


    public function dashboard()
    {
        $ultimoMes = Carbon::today()->subDays(30)->format('Y-m-d');
        $pedidoDoMes = Pedido::where('status',3)->where('updated_at','>', $ultimoMes)->count();
        $pedidoNegados = Pedido::where('status',4)->where('updated_at','>', $ultimoMes)->count();
        $numeroDePedidos = Pedido::where('status',1)->count();
        $numeroDeProdutos = Produto::count();
        $user = Auth::user();
        return view('dashboard', ['pedidoNegados' => $pedidoNegados, 'pedidoDoMes' => $pedidoDoMes,'user' => $user, 'numeroDePedidos' => $numeroDePedidos, 'numeroDeProdutos' => $numeroDeProdutos]);
    }
    

}
