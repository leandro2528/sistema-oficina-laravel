<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'marca',
        'ano',
        'modelo',
        'cor',
        'numero_chassi',
        'cliente_id',
        'observacao'
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
}