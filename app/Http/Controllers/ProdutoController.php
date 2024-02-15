<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::orderBy('id', 'desc')->with('categoria')->get();
        $categorias = Categoria::all();
        return view('produtos.index', ['produtos'=>$produtos, 'categorias'=>$categorias]);
    }

    public function create() {
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('produtos.create', ['produtos'=>$produtos, 'categorias'=>$categorias]);
    }

    public function store(Request $request) {
        $request->validate([
            'categoria_id' => 'required',
            'codigo_intero' => 'required',
            'codigo_barra' => 'required',
            'nome_produto' => 'required',
            'valor_custo' => 'required',
            'valor_margem' => 'required',
            'valor_venda' => 'required',
            'marca' => 'required',
            'estoque' => 'required',
            'estoque_minimo' => 'required',
        ]);

        Produto::create($request->all());
        
        return redirect()->route('produtos-index');
    }

    public function edit($id) {
        $produtos = Produto::findOrFail($id);
        $categorias = Categoria::all();

        return view('produtos.edit', ['produtos'=>$produtos, 'categorias'=>$categorias]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'categoria_id' => 'required|integer',
            'codigo_intero' => 'required',
            'codigo_barra' => 'required',
            'nome_produto' => 'required',
            'valor_custo' => 'required',
            'valor_margem' => 'required',
            'valor_venda' => 'required',
            'marca' => 'required',
            'estoque' => 'required',
            'estoque_minimo' => 'required',
        ]);

        $dadosProduto = [
            'categoria_id' => $request->categoria_id,
            'codigo_intero' => $request->codigo_intero,
            'codigo_barra' => $request->codigo_barra,
            'nome_produto' => $request->nome_produto,
            'valor_custo' => $request->valor_custo,
            'valor_margem' => $request->valor_margem,
            'valor_venda' => $request->valor_venda,
            'marca' => $request->marca,
            'estoque' => $request->estoque,
            'estoque_minimo' => $request->estoque_minimo,
        ];

        $produto = Produto::findOrFail($id);
        $produto->update($dadosProduto);

        return redirect()->route('produtos-index');
    }

    public function destroy($id) {
        $produtos = Produto::findOrFail($id);
        $produtos->delete();

        return redirect()->route('produtos-index');
    }
}
