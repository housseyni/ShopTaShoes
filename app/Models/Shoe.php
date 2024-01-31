<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Panier;

class Shoe extends Model
{
    use HasFactory;


    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = ['nom', 'marque', 'couleur', 'price', 'image_path', 'categorie_id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    function panier()
    {
        return $this->belongsToMany(Panier::class);
    }

    public function tailles()
    {
        return $this->belongsToMany(Taille::class, 'shoe_tailles');
    }
}
