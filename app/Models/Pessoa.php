<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Telefone;

class Pessoa extends Model
{
    protected $fillable = ["nome", "data_nascimento", "endereco", "email", "cpf"];


    public function aluno(): HasOne{

        return $this.hasOne(Aluno::class, "pessoa_id", "id");
    }

    public function professor(): HasOne{

        return $this.hasOne(Professor::class, "pessoa_id", "id");
    }

    public function telefone(): HasMany {

        return $this.hasMany(Telefone::class, "pessoa_id", "id");
    }
}
