<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Pessoa;

class Telefone extends Model
{
    protected $fillable = ["pessoa_id", "telefone"];

    public function pessoa(): BelongsTo {

        return $this.belongsTo(Pessoa::class, "pessoa_id", "id");
    }
}
