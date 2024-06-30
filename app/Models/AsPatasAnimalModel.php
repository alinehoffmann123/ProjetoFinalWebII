<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsPatasAnimalModel extends Model {
    use HasFactory;

    protected $table = 'aspatasanimal';
    protected $fillable = [
          'NOME_ANIMAL'
        , 'ESPECIE'
        , 'RACA'
        , 'IDADE'
        , 'DESCRICAO_ANIMAL'
        , 'LOCALIZACAO_ENCONTRO'
        , 'ESTADO_ANIMAL'
        , 'IMAGEM'
        , 'PESSOA_NOME'
        , 'PESSOA_EMAIL'
        , 'PESSOA_TELEFONE'
        , 'PESSOA_ENDERECO'
    ];
}
