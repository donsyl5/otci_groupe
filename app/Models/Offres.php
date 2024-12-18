<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offres extends Model
{
    protected $fillable = ['nom', 'prenom', 'poste', 'cv', 'lettre'];
    use HasFactory;
}
