@extends('layouts.app')

@section('title', 'Cadastro de Funcionarios')

@section('content')
<div class="container-fliud p-3">
    <div class="row">
        <div class="col-10">
            <h6>Cadastro de Funcionarios</h6>
        </div>
        <div class="col-2">
            <a class="btn btn-outline-secondary btn-sm" href="{{ route('funcionarios-index') }}">
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
            <form action="{{ route('funcionarios-store') }}" method="POST">
                @csrf
                <div class="form-group-box">

                    <div class="form-group d-flex justify-content-between">
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Cargo:</label>
                                <select class="form-select" name="cargo_id" id="cargo_id">
                                    <option value="select">-- Selecione um Cargo --</option>
                                    @foreach($cargos as $cargo)
                                        <option value="{{ $cargo->id }}">{{ $cargo->nome_cargo }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2 me-2">
                            <div class="group-item">
                                <label for="">Data de Adminssão:</label>
                                <input type="date" class="form-control" name="data_admissao">
                            </div>
                        </div>
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Data de Nascimento</label>
                                <input type="date" class="form-control" name="data_nacscimento">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2">
                            <div class="group-item">
                                <label for="">Nome:</label>
                                <input type="text" class="form-control" name="nome">
                            </div>
                        </div>

                    </div>

                    <div class="form-group d-flex justify-content-between mt-4">
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Telefone:</label>
                                <input type="text" class="form-control" name="telefone">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2 me-2">
                            <div class="group-item">
                                <label for="">CEP:</label>
                                <input type="text" class="form-control" name="cep">
                            </div>
                        </div>
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Endereço:</label>
                                <input type="text" class="form-control" name="endereco">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2">
                            <div class="group-item">
                                <label for="">Número:</label>
                                <input type="text" class="form-control" name="numero">
                            </div>
                        </div>

                    </div>

                    <div class="form-group d-flex justify-content-between mt-4">
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Bairro:</label>
                                <input type="text" class="form-control" name="bairro">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2 me-2">
                            <div class="group-item">
                                <label for="">Cidade:</label>
                                <input type="text" class="form-control" name="cidade">
                            </div>
                        </div>
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">UF:</label>
                                <input type="text" class="form-control" name="uf">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2">
                            <div class="group-item">
                                <label for="">RG:</label>
                                <input type="text" class="form-control" name="rg">
                            </div>
                        </div>

                    </div>

                    <div class="form-group d-flex justify-content-between mt-4">
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">PIS:</label>
                                <input type="text" class="form-control" name="pis">
                            </div>
                        </div>
                        <div class="form-group-items w-100 ms-2 me-2">
                            <div class="group-item">
                                <label for="">CPF:</label>
                                <input type="text" class="form-control" name="cpf">
                            </div>
                        </div>
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">CTPS:</label>
                                <input type="text" class="form-control" name="ctps">
                            </div>
                        </div>
                        <div class="form-group-items w-100">
                            <div class="group-item">
                                <label for="">Salário:</label>
                                <input type="text" class="form-control ms-2" name="salario">
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