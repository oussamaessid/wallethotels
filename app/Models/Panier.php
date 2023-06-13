<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;
    protected $table = 'panier';

    protected $fillable = ['id_plat', 'quantite', 'prix'];

    public function plat()
    {
        return $this->belongsTo(Plat::class);
    }

    public function getTotalAttribute()
    {
        return $this->quantite * $this->prix_unitaire;
    }
}
