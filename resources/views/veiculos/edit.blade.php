@extends('layouts.app')

@section('title', 'Atualização de Veículos')

@section('content')
<div class="container-fluid p-3">
    <div class="row">
        <div class="col-10">
            <h6>Atualização de Veículos</h6>
        </div>
        <div class="col-2">
            <a class="btn btn-outline-secondary btn-sm" href="{{ route('veiculos-index') }}">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/>
                    </svg>
                </span>
                <span class="ms-2">Voltar</span>
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <form action="{{ route('veiculos-update', ['id'=>$veiculos->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group-box">

                    <div class="form-group d-flex justify-content-between">
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Placa:</label>
                                <input type="text" class="form-control" value="{{ $veiculos->placa }}" name="placa">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2 me-2">
                            <div class="group-item">
                                <label for="">Marca:</label>
                                <input type="text" class="form-control" value="{{ $veiculos->marca }}" name="marca">
                            </div>
                        </div>
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Ano:</label>
                                <input type="text" class="form-control" value="{{ $veiculos->ano }}" name="ano">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2">
                            <div class="group-item">
                                <label for="">Modelo:</label>
                                <input type="text" class="form-control" value="{{ $veiculos->modelo }}" name="modelo">
                            </div>
                        </div>

                    </div>

                    <div class="form-group d-flex justify-content-between mt-4">
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Cor:</label>
                                <input type="text" class="form-control" value="{{ $veiculos->cor }}" name="cor">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2 me-2">
                            <div class="group-item">
                                <label for="">Número do Chassi:</label>
                                <input type="text" class="form-control" value="{{ $veiculos->numero_chassi }}" name="numero_chassi">
                            </div>
                        </div>
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Cliente:</label>
                               <select class="form-select" value="{{ $veiculos->cliente->cpf }}" name="cliente_id" id="cliente_id">
                                <option value="select">-- Selecione um Cliente --</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->cpf }}</option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2">
                            <div class="group-item">
                                <label for="">Observações:</label>
                                <input type="text" class="form-control" value="{{ $veiculos->observacao }}" name="observacao">
                            </div>
                        </div>

                    </div>

                    <div class="form-group d-flex justify-content-between mt-4">
                        <input type="submit" class="btn btn-outline-warning btn-sm" value="Atualizar">
                    </div>
                    
                </div>

            </form>
        </div>
    </div>
</div>
@endsection