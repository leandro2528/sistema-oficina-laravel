@extends('layouts.app')

@section('title', 'Cadastrar Serviços')

@section('content')
<div class="container-fluid p-3">
    <div class="row">
        <div class="col-10">
            <h6>Cadastrar Serviços</h6>
        </div>
        <div class="col-2">
            <a class="btn btn-outline-secondary btn-sm" href="{{ route('servicos-index') }}">
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
            <form action="{{ route('servicos-store'); }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="">Nome do Serviço</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="form-group my-3">
                    <label for="">Tempo do Servico</label>
                    <input type="text" class="form-control" name="tempo">
                </div>
                <div class="form-group my-3">
                    <label for="">Descrição</label>
                    <input type="text" class="form-control" name="descricao">
                </div>
                <div class="form-group my-3">
                    <label for="">Valor de Custo</label>
                    <input type="text" class="form-control" name="valor_custo">
                </div>
                <div class="form-group my-3">
                    <label for="">Valor do Serviço</label>
                    <input type="text" class="form-control" name="valor_servico">
                </div>

                <div class="form-group my-3">
                    <input type="submit" class="btn btn-outline-primary btn-sm" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection