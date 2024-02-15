<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servico;

class ServicoController extends Controller
{
    public function index() {
        $servicos = Servico::orderBy('id', 'desc')->get();
        return view('servicos.index', ['servicos'=>$servicos]);
    }

    public function create() {
        $servicos = Servico::all();
        return view('servicos.create', ['servicos'=>$servicos]);
    }

    public function store(Request $request) {
        Servico::create($request->all());
        return redirect()->route('servicos-index');
    }

    public function edit($id) {
        $servicos = Servico::where('id', $id)->first();
        return view('servicos.edit', ['servicos'=>$servicos]);
    }

    public function update(Request $request, $id) {
        $data = [
            'nome' => $request->nome,
            'tempo' => $request->tempo,
            'descricao' => $request->descricao,
            'valor_custo' => $request->valor_custo,
            'valor_servico' => $request->valor_servico
        ];

        $servicos = Servico::where('id', $id)->update($data);
        return redirect()->route('servicos-index');
    }

    public function destroy($id) {
        $servicos = Servico::where('id', $id)->delete();
        return redirect()->route('servicos-index');
    }
}
