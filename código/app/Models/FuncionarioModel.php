<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuncionarioModel extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';

    protected $fillable = [
        'nome',
        'email',
        'endereco',
        'telefone',
        'cpf',
        'cargo'
    ];
}
