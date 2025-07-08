<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'active'
    ];

    public function user(): BelongsTo {
        return $this -> belongsTo(User::class, foreignkey: 'user_id');
    }
}
