<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'codigo_intero',
        'codigo_barra',
        'nome_produto',
        'marca',
        'valor_custo',
        'valor_margem',
        'valor_venda',
        'estoque',
        'estoque_minimo'
    ];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}