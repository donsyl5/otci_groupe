<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sous_categories;

class Categorie extends Model
{
    protected $fillable = ['nom'];
    use HasFactory;

    public function Sous_categorie()
    {
        return $this->hasMany(Sous_categories::class);
    }
}
