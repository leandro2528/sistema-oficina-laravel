@extends('layouts.app')

@section('title', 'Clientes Cadastrados')

@section('content')
<div class="container-fluid p-4">
    <div class="row">
        <div class="col-10">
            <h6>Clientes cadastrados</h6>
        </div>
        <div class="col-2">
            <a class="btn btn-outline-primary btn-sm" href="{{ route('clientes-create') }}">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </span>
                <span class="ms-2">Novo cliente</span>
            </a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <table class="table table-hover">
                <thead style="font-size: 12px;">
                    <tr>
                        <th>CPF</th>
                        <th>Inscrição Estadual</th>
                        <th>Nome / Razão Social</th>
                        <th>Nome Fantasia</th>
                        <th>Telefone</th>
                        <th>CEP</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>UF</th>
                        <th>Ponto de Referência</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody style="font-size: 10px;">
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->insc_estadual }}</td>
                        <td>{{ $cliente->nome_razao_social }}</td>
                        <td>{{ $cliente->nome_fantasia }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->cep }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->numero }}</td>
                        <td>{{ $cliente->bairro }}</td>
                        <td>{{ $cliente->cidade }}</td>
                        <td>{{ $cliente->uf }}</td>
                        <td>{{ $cliente->ponto_referencia }}</td>
                        <td class="d-flex">
                            <a class="btn btn-outline-warning btn-sm" href="{{ route('clientes-edit', ['id'=>$cliente->id]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                </svg>
                            </a>
                            <form action="{{ route('clientes-destroy', ['id'=>$cliente->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger btn-sm ms-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection