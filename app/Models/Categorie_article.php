<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artiles;

class Categorie_article extends Model
{
    protected $fillable = ['nom'];
    use HasFactory;
    public function article()
    {
        return $this->hasMany(Articles::class);
    }
}
