<?php

namespace App\Http\Controllers;

use App\Models\Produto;
// use App\Models\Categoria;
use Illuminate\Http\Request;

class PromocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // listar todos os promocoes
        $promocoes = Produto::where('promocao',1)->orderBy('categoria_id', 'ASC')->get();
        return view('promocao.index', ['promocoes' => $promocoes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('nome', 'id');
        return view('promocao.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'nome.required' => 'O campo nome é obrigatório!',
            'nome.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'descricao.required' => 'O campo descrição é obrigatório!',
            'valor.required' => 'O campo valor é obrigatório!',
            'categoria_id.required' => 'O campo categoria é obrigatório!',
        ];

        $validateData = $request->validate([
            'nome'      => 'required|min:7',
            'descricao' => 'required',
            'valor' => 'required',
            'categoria_id.required' => 'O campo categoria é obrigatório!',
        ], $message);


        $promocao = new Promocao;
        $promocao->nome      = $request->nome;
        $promocao->descricao = $request->descricao;
        $promocao->valor = $request->valor;
        $promocao->categoria_id = $request->categoria_id;
        
        $promocao->save();

        return redirect()->route('promocao.index')->with('message', "Promocao {$promocao->nome} criado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promocao = Promocao::findOrFail($id);
        
        return view('promocao.show', ['promocao' => $promocao]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promocao = Promocao::findOrFail($id);
        $categorias = Categoria::pluck('nome', 'id');
        return view('promocao.edit', ['promocao' => $promocao, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'nome.required' => 'O campo nome é obrigatório!',
            'nome.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'descricao.required' => 'O campo descrição é obrigatório!',
            'valor.required' => 'O campo valor é obrigatório!',
            'categoria_id.required' => 'O campo categoria é obrigatório!',
        ];

        $validateData = $request->validate([
            'nome'      => 'required|min:7',
            'descricao' => 'required',
            'valor'     => 'required',
            'categoria_id' => 'required',
            
        ], $message);

        $promocao = Promocao::findOrFail($id);
        $promocao->nome      =$request->nome;
        $promocao->descricao = $request->descricao;
        $promocao->valor     = $request->valor;
        $promocao->categoria_id = $request->categoria_id;

        $promocao->save();
       
        return redirect()->route('promocao.index')->with('message','Promocao Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promocao = Promocao::findOrFail($id);
        $promocao->delete();

        return redirect()->route('promocao.index')->with('message', 'Promocao excluido com sucesso!');
    }
}
