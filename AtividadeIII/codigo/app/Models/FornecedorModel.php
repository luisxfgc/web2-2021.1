<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FornecedorModel extends Model
{
    use HasFactory;

    protected $table = "fornecedores";

    protected $fillable = [
        'nome',
        'cnpj',
        'descricao'
    ];
}
