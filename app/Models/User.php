<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Role;
use OwenIt\Auditing\Contracts\Auditable; 
use OwenIt\Auditing\Auditable as AuditableTrait; 
use Laravel\Sanctum\HasApiTokens;


#[Fillable(['name', 'email', 'password', "role_id"])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements Auditable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable,AuditableTrait,HasApiTokens;

    protected $auditExclude = ["password", "remember_token"];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    

    public function role() : BelongsTo{
        return $this->belongsTo(Role::class);
    }
}
