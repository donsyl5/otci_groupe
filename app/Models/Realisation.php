<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sous_categorie;

class Realisation extends Model
{
    protected $fillable = ['titre', 'image', 'description', 'maitre', 'partenaire', 'mission', 'galerie', 'sous_categorie_id', 'montant', 'datee'];
    use HasFactory;
    public function sousCategorie()
    {
        return $this->belongsTo(Sous_categorie::class);
    }
}
