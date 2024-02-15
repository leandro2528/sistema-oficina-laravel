@extends('layouts.app')

@section('title', 'Veículos Cadastrados')

@section('content')
<div class="container-fluid p-3">
    <div class="row">
        <div class="col-10">
            <h6>Veículos Cadastrados</h6>
        </div>
        <div class="col-2">
            <a class="btn btn-outline-primary btn-sm" href="">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </span>
                <span>Novo</span>
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <table class=" table table-hover">
                <thead style="font-size: 12px;">
                    <tr>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Ano</th>
                        <th>Modelo</th>
                        <th>Cor</th>
                        <th>Número Chassi</th>
                        <th>Cliente</th>
                        <th>Observação</th>
                    </tr>
                </thead>
                <tbody  style="font-size: 10px;">
                @foreach($veiculos as $veiculo)
                    <tr>
                        <td>{{ $veiculo->placa }}</td>
                        <td>{{ $veiculo->marca }}</td>
                        <td>{{ $veiculo->ano }}</td>
                        <td>{{ $veiculo->modelo }}</td>
                        <td>{{ $veiculo->cor }}</td>
                        <td>{{ $veiculo->numero_chassi }}</td>
                        <td>{{ $veiculo->cliente->nome_fantasia }}</td>
                        <td>{{ $veiculo->observacao }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection