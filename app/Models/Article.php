<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie_article;
use Illuminate\Support\Str;

class Article extends Model
{

    use HasFactory;
    protected $fillable = ['titre', 'description', 'image', 'datee', 'categorie_article_id'];

    public function sousCategorie()
    {
        return $this->belongsTo(Categorie_article::class,'categorie_article_id');
    }

    public function getRouteKeyName()
{
    return 'titre';
}

public function slug()
{
    return Str::slug($this->titre);
}
}
