<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Funcionario;
use App\Models\Cargo;

class FuncionarioController extends Controller
{
    public function index() {
        $funcionarios = Funcionario::orderBy('id', 'desc')->with('cargo')->get();
        $cargos = Cargo::all();
        return view('funcionarios.index', ['funcionarios'=>$funcionarios, 'cargos'=>$cargos]);
    }

    public function create() {
        $funcionarios = Funcionario::all();
        $cargos = Cargo::all();
        return view('funcionarios.create', ['funcionarios'=>$funcionarios, 'cargos'=>$cargos]);
    }

    public function store(Request $request) {
        $request->validate([
            'cargo_id' => 'required',
            'data_admissao' => 'required',
            'cargo_id' => 'required',
            'data_nacscimento' => 'required',
            'nome' => 'required',
            'telefone' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'rg' => 'required',
            'pis' => 'required',
            'cpf' => 'required',
            'ctps' => 'required',
            'salario' => 'required'
        ]);

        Funcionario::create($request->all());
        return redirect()->route('funcionarios-index');
    }

    public function edit($id) {
        $funcionarios = Funcionario::findOrFail($id);
        $cargos= Cargo::all();
        return view('funcionarios.edit', ['funcionarios'=>$funcionarios, 'cargos'=>$cargos]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'cargo_id' => 'required',
            'data_admissao' => 'required',
            'cargo_id' => 'required',
            'data_nacscimento' => 'required',
            'nome' => 'required',
            'telefone' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'rg' => 'required',
            'pis' => 'required',
            'cpf' => 'required',
            'ctps' => 'required',
            'salario' => 'required'
        ]);

        $funcionarios = Funcionario::findOrFail($id);
        $funcionarios->update($request->all());
        $cargos = Cargo::all();

        return redirect()->route('funcionarios-index');
    }

    public function destroy($id) {
        $funcionarios = Funcionario::findOrFail($id);
        $funcionarios->delete();
        return redirect()->route('funcionarios-index');
    }
}
