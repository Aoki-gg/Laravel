<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resource;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use OwenIt\Auditing\Contracts\Auditable; 
use OwenIt\Auditing\Auditable as AuditableTrait; 

class Role extends Model
{

    protected $fillable = ["name"];

    public function resource() : BelongsToMany{
        $this->belongsToMany(Resource::class, "permissions");
    }

    
}
