<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Resource;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use OwenIt\Auditing\Contracts\Auditable; 
use OwenIt\Auditing\Auditable as AuditableTrait; 


class Permission extends Model
{
    public $incrementing = false;

    protected $fillable = ["role_id", "resource_id"];

    public function role() : BelongsTo {
        return $this->belongsTo(Role::class);
    }

    public function resource() : BelongsTo {
        return $this->belongsTo(Resource::class);
    }
}
