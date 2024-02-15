<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'insc_estadual',
        'nome_razao_social',
        'nome_fantasia',
        'telefone',
        'cep',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'ponto_referencia'
    ];
}