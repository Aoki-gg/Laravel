<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certificado extends Model
{
    protected $fillable = ["aluno_id", "curso_id", "nome", "descricao", "url"];

    public function aluno(): BelongsTo{
        return $this->belongsTo(Aluno::class, "aluno_id", "pessoa_id");
    }

}
