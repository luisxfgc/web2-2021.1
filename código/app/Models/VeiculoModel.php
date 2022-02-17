<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeiculoModel extends Model
{
    use HasFactory;

    protected $table = 'veiculos';

    protected $fillable = [
        'nome',
        'marca',
        'modelo',
        'ano',
        'cor',
        'numeroPlaca'
    ];
}
