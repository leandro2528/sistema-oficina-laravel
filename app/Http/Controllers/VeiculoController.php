<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function index() {
        $veiculos = Veiculo::orderBy('id', 'desc')->with('cliente')->get();
        $clientes = Cliente::all();
        return view('veiculos.index', ['veiculos'=>$veiculos, 'clientes'=>$clientes]);
    }

    public function create() {
        $veiculos = Veiculo::all();
        $clientes = Cliente::all();
        return view('veiculos.create', ['veiculos'=>$veiculos, 'clientes'=>$clientes]);
    }

    public function store(Request $request) {
        $request->validate([
            'placa' => 'required',
            'marca' => 'required',
            'ano' => 'required',
            'modelo' => 'required',
            'cor' => 'required',
            'numero_chassi' => 'required',
            'cliente_id' => 'required',
            'observacao' => 'required'
        ]);

        Veiculo::create($request->all());
        $clientes = Cliente::all();

        return redirect()->route('veiculos-index');
    }

    public function edit($id) {
        $veiculos = Veiculo::findOrFail($id);
        $clientes = Cliente::all();
        return view('veiculos.edit', ['veiculos'=>$veiculos, 'clientes'=>$clientes]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'placa' => 'required',
            'marca' => 'required',
            'ano' => 'required',
            'modelo' => 'required',
            'cor' => 'required',
            'numero_chassi' => 'required',
            'cliente_id' => 'required',
            'observacao' => 'required'
        ]);
        $veiculos = Veiculo::findOrFail($id);
        $veiculos->update($request->all());

        return redirect()->route('veiculos-index');
    }

    public function destroy($id) {
        $veiculos = Veiculo::findOrFail($id);
        $veiculos->delete();
        $clientes = Cliente::all();
        return redirect()->route('veiculos-index');
    }
}
