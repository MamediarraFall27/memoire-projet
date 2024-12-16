<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Locataire extends Model
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

