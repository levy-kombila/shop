<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requete extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'code',
        'nom_complet',
        'email',
        'phone',
        'objet',
        'message',
        'active',

    ];

    public function user(): BelongsTo
    {
        return $this -> belongsTo(relqted: User::class, foreignkey: 'user_id');
    }
}
