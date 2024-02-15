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
}
