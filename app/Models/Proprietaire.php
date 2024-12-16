<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'utilisateur_id',
    ];
    // Relation avec le modèle User
    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'utilisateur_id');
    }

    // Relation avec les biens immobiliers
    public function biensImmobiliers()
    {
        return $this->hasMany(BienImmobilier::class, 'proprietaire_id');
    }
}
