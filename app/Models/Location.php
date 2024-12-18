<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut',
        'date_fin',
        'montant',
        'etat',
        'bien_immobilier_id',
        'client_id'
    ];

    // Ajouter ces lignes pour convertir automatiquement les dates en objets Carbon
    protected $dates = [
        'date_debut',
        'date_fin',
        'created_at',
        'updated_at'
    ];

    // Ou utilisez $casts (méthode alternative)
    protected $casts = [
        'date_debut' => 'datetime',
        'date_fin' => 'datetime'
    ];

    // Relation avec le bien immobilier
    public function bienImmobilier()
    {
        return $this->belongsTo(BienImmobilier::class, 'bien_immobilier_id');
    }

    // Relation avec le client
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
