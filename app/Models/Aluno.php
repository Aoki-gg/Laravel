<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Pessoa;
use App\Models\Curso;

class Aluno extends Model
{
    protected $primaryKey =  "pessoa_id";

    public $incrementing = false;

    protected $fillable = ["pessoa_id", "curso_id", "horas_totais"];


    public function pessoa():BelongsTo{
        return $this->belongsTo(Pessoa::class, "pessoa_id", "id");
    }

    public function curso(): BelongsTo{
        return $this->belongsTo(Curso::class, "curso_id", "id");
    }

    public function certificados(): HasMany{
        return $this->hasMany(Certificado::class, "aluno_id", "pessoa_id");
    }
}
