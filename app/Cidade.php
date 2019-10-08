<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Criei esta classe apenas para gerar tabela no banco
 * Para aproveitar no projeto de Programação
 * Também foi criado a migration referente
 */
class Cidade extends Model
{
    protected $fillable = ['nome'];

    /**
     * Representa a relação com o estado
     * Antes de salvar a cidade, devemos associar o estado
     * usando $cidade->estado()->associate($estado)
     * Para desassociar pode utilizar dissociate(...)
     */

    public function estado() {
        return $this->belongsTo('App\Estado');
    }
}
