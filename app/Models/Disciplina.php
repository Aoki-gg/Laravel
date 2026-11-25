<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Curso;
use App\Models\Aluno;
use OwenIt\Auditing\Contracts\Auditable; 
use OwenIt\Auditing\Auditable as AuditableTrait; 

class Disciplina extends Model implements Auditable
{
    use SoftDeletes;
    use AuditableTrait;
    
    protected $fillable = [
        "nome",
        "carga_horaria",
        "curso_id"
    ];


    public function curso() : BelongsTo {
        return $this->belongsTo(Curso::class);
    }

    public function aluno() : BelongsToMany{
        return $this->belongsToMany(Aluno::class, "matriculas");
    }
}
