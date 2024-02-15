@extends('layouts.app')

@section('title', 'Cadastro de Produtos')

@section('content')
<div class="container-fluid p-3">
    <div class="row">
        <div class="col-10">
            <h6>Cadastro de Produtos</h6>
        </div>
        <div class="col-2">
            <a class="btn btn-outline-secondary btn-sm" href="{{ route('produtos-index') }}">
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
            <form action="{{ route('produtos-store') }}" method="POST">
                @csrf
                <div class="form-group-box">

                    <div class="form-group d-flex justify-content-between">
                    <div class="form-group-items w-100">
                        <div class="group-items">
                            <label for="">Categoria</label>
                            <select class="form-select" name="categoria_id" id="categoria_id">
                                <option value="select">-- Selecione uma Categoria --</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="form-group-items w-100 ms-2">
                            <div class="group-item">
                                <label for="">Código Inteiro:</label>
                                <input type="text" class="form-control" name="codigo_intero">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2 me-2">
                            <div class="group-item">
                                <label for="">Código de Barra:</label>
                                <input type="text" class="form-control" name="codigo_barra">
                            </div>
                        </div>
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Nome do Produto;</label>
                                <input type="text" class="form-control" name="nome_produto">
                            </div>
                        </div>
                       

                    </div>

                    <div class="form-group d-flex justify-content-between mt-4">
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Valor de Custo:</label>
                                <input type="text" class="form-control" name="valor_custo">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2 me-2">
                            <div class="group-item">
                                <label for="">Valor de Margem:</label>
                                <input type="text" class="form-control" name="valor_margem">
                            </div>
                        </div>
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Valor de Venda:</label>
                                <input type="text" class="form-control" name="valor_venda">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2">
                            <div class="group-item">
                                <label for="">Marca:</label>
                                <input type="text" class="form-control" name="marca">
                            </div>
                        </div>

                    </div>

                    <div class="form-group d-flex justify-content-between mt-4">

                        <div class="form-group-items w-100 ">
                            <div class="group-item">
                                <label for="">Estoque:</label>
                                <input type="number" class="form-control" name="estoque">
                            </div>
                        </div>

                        <div class="form-group-items w-100 ms-2">
                            <div class="group-item">
                                <label for="">Estoque Mínimo:</label>
                                <input type="number" class="form-control" name="estoque_minimo">
                            </div>
                        </div>

                    </div>

                    <div class="form-group d-flex justify-content-between mt-4">
                        <input type="submit" class="btn btn-outline-primary btn-sm" value="Cadastrar">
                    </div>
                    
                </div>

            </form>
        </div>
    </div>
</div>
@endsection