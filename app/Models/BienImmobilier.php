<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BienImmobilier extends Model
{
    use HasFactory;

    protected $table = 'biens_immobiliers';

    protected $fillable = [
        'adresse',
        'prix',
        'description',
        'etat',
        'proprietaire_id'
    ];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }
}
