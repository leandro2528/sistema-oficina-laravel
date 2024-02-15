<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedors = Fornecedor::orderBy('id', 'desc')->get();
        return view('fornecedors.index', ['fornecedors'=>$fornecedors]);
    }

    public function create() {
        $fornecedors = Fornecedor::all();
        return view('fornecedors.create', ['fornecedors'=>$fornecedors]);
    }

    public function store(Request $request) {
        Fornecedor::create($request->all());
        return redirect()->route('fornecedors-index');
    }

    public function edit($id) {
        $fornecedors = Fornecedor::where('id', $id)->first();
        return view('fornecedors.edit', ['fornecedors'=>$fornecedors]);
    }

    public function update(Request $request, $id) {
        $data = [
            'nome_razao_social' => $request->nome_razao_social,
            'nome_fantasia' => $request->nome_fantasia,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->uf,
            'cep' => $request->cep,
            'ponto_referencia' => $request->ponto_referencia
        ];

        $fornecedors = Fornecedor::where('id', $id)->update($data);
        return redirect()->route('fornecedors-index');
    }

    public function destroy($id) {
        $fornecedors = Fornecedor::where('id', $id)->delete();
        return redirect()->route('fornecedors-index');
    }
}
