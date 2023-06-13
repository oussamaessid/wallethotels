<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EvenementImage;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
    ];

    public function evenementImages()
    {
        return $this->hasMany(EvenementImage::class);
    }
}
