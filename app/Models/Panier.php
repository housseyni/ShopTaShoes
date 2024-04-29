<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shoe;
use App\Models\Taille;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Ajoutez les autres champs si nécessaire
        'shoe_id',
        'taille_id',
        'quantity'

    ];

    protected $table = 'paniers';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shoe()
    {
        return $this->belongsTo(Shoe::class);
    }

    public function taille()
    {
        return $this->belongsTo(Taille::class);
    }
}
