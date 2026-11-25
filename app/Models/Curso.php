<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Aluno;
use App\Models\Disciplina;
use OwenIt\Auditing\Contracts\Auditable; 
use OwenIt\Auditing\Auditable as AuditableTrait; 

class Curso extends Model implements Auditable
{
    use AuditableTrait;
    use SoftDeletes;
    

    

    protected $fillable = [
        "nome",
        "duracao",
    ];

    public function disciplina() : HasMany{
        return $this->hasMany(Disciplina::class);
    }

    public function aluno() : HasMany {
        return $this->hasMany(Aluno::class);
    }
}
