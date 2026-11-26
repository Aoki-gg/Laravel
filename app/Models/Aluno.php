<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Matricula;
use OwenIt\Auditing\Contracts\Auditable; 
use OwenIt\Auditing\Auditable as AuditableTrait; 


class Aluno extends Model implements Auditable
{
    use SoftDeletes;
    use AuditableTrait;
    

    protected $fillable = [
        "nome",
        "turma",
        "curso_id"
    ];

    public function curso(): BelongsTo{
        return $this->belongsTo(Curso::class);
    }

    public function disciplina() : BelongsToMany{
        return $this->belongsToMany(Disciplina::class, 'matriculas');
    }

    public function matricula() : HasOne {
        return $this->hasOne(Matricula::class);
    }
}
