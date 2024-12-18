<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Realisations;
use App\Models\Categorie;

class Sous_categorie extends Model
{
    protected $fillable = ['nom', 'categorie_id'];
    use HasFactory;
    public function Categorie()
    {
        return $this->belongsTo(Categorie::class,'categorie_id');
    }

    public function realisation()
    {
        return $this->hasMany(Realisation::class);
    }
}
