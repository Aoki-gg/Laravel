<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Pessoa;

class Professor extends Model
{
    protected $primaryKey = "pessoa_id"

    public $incrementing = false;

    protected $fillable = ["pessoa_id", "curso_id" ,"matricula_siap", "formacao"];

    public function pessoa(): BelongsTo{
        return $this->belongsTo(Pessoa::class, "pessoa_id", "id");
    }
}
