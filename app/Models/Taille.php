<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taille extends Model
{
    use HasFactory;


    public function shoes()
    {
        return $this->belongsToMany(Shoe::class, 'shoe_sizes');
    }
}
