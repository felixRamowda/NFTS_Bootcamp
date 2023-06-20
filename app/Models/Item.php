<?php

namespace App\Models;

use App\Models\Collection;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
//implementacion de Libreria
use Spatie\MediaLibrary\HasMedia; //Exportar
use Spatie\MediaLibrary\InteractsWithMedia; //Exportar
use Illuminate\Database\Eloquent\Relations\MorphOne;



class Item extends Model implements HasMedia
{
    //implementando el Hasmedia
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'price',
        'title',
        'description',
        'royalties',
        'size',
        'collection_id',
        'user_id'
    ];



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /* La relacion belongsTo esta definida en los dos modelos... User y Item
    dicha relacion nos sirve para retornar el item de x usuario
    o el usuario de x item por eso la relacion se define en los 2 modelos
    */


    // Que item solo puede tener una collection    
    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }

    //Relacion polimofica

    public function like(): MorphOne
    {
        return $this->morphOne(Like::class, 'likeable');
    }



}