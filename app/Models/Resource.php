<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use OwenIt\Auditing\Contracts\Auditable; 
use OwenIt\Auditing\Auditable as AuditableTrait; 

class Resource extends Model
{

    protected $fillable = ["name"];

    public function role() : BelongsToMany {
        return $this->belongsToMany(Role::class, "permissions");
    }
}
