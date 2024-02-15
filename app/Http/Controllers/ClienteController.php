<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index() {
        $clientes = cliente::orderBy('id', 'desc')->get();
        return view('clientes.index', ['clientes'=>$clientes]);
    }

    public function create() {
        $clientes = Cliente::all();
        return view('clientes.create', ['clientes'=>$clientes]);
    }

    public function store(Request $request) {
        Cliente::create($request->all());
        return redirect()->route('clientes-index');
    }

    public function edit($id) {
        $clientes = Cliente::where('id', $id)->first();
        return view('clientes.edit', ['clientes'=>$clientes]);
    }

    public function update(Request $request, $id) {
        $data = [
            'cpf' => $request->cpf,
            'insc_estadual' => $request->insc_estadual,
            'nome_razao_social' => $request->nome_razao_social,
            'nome_fantasia' => $request->nome_fantasia,
            'telefone' => $request->telefone,
            'cep' => $request->cep,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->uf,
            'ponto_referencia' => $request->cpf
        ];

        $clientes = cliente::where('id', $id)->update($data);
        return redirect()->route('clientes-index');
    }

    public function destroy($id) {
        $clientes = Cliente::where('id', $id)->delete();
        return redirect()->route('clientes-index');
    }
}
