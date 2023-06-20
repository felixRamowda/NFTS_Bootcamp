<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Collection;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    //Prueba de fillable en user model
    protected $fillable = [
        'name',
        'email',
        'password',

    ];

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
    /* El sentido de esta relacion
    es para saber el usuario de dicho items*/


    public function collections(): HasMany
    {
        return $this->hasMany(Collection::class);
    }

}