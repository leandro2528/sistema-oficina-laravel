<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_id',
        'data_admissao',
        'data_nacscimento',
        'nome',
        'telefone',
        'cep',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'rg',
        'pis',
        'cpf',
        'ctps',
        'salario'
    ];

    public function cargo() {
        return $this->belongsTo(Cargo::class);
    }
}
