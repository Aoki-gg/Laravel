<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Aluno;
use App\Models\Disciplina;
use OwenIt\Auditing\Contracts\Auditable; 
use OwenIt\Auditing\Auditable as AuditableTrait; 

class Matricula extends Model implements Auditable
{
    use AuditableTrait;
    public $incrementing = false;
    
    protected $fillable = [
        "disciplina_id",
        "aluno_id"
    ];

    public function aluno() : BelongsTo {
        return $this->belongsTo(Aluno::class);
    }

    public function disciplina() : BelongsTo{
        return $this->belongsTo(Disciplina::class);
    }
}
