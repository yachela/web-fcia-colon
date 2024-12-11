<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
/**
 * @method bool hasRole(string|array $roles, string|null $guard = null)
 * @method bool hasAnyRole(string|array $roles, string|null $guard = null)
 * @method \Illuminate\Database\Eloquent\Builder role(string|array $roles, string|null $guard = null)
 * @method \Spatie\Permission\Contracts\Role assignRole(...$roles)
 * @method \Spatie\Permission\Contracts\Permission givePermissionTo(...$permissions)
 * @method \Spatie\Permission\Contracts\Permission syncPermissions(...$permissions)
 * @method bool hasPermissionTo(string $permission, string|null $guard = null)
 */
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if (!$user->hasRole('Customer')) {
                $user->assignRole('Customer');
            }
        });
    }

    public function cart()
{
    return $this->hasOne(Cart::class);
}
}
