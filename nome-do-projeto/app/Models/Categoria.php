<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Permitir preenchimento em massa para 'nome' e 'descricao'
    protected $fillable = [
        'nome',
        'descricao',
    ];
}