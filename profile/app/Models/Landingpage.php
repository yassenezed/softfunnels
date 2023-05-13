<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landingpage extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'state',
        'slug',
        'visitors',
        'price',
        'user_id',
    ];
    

    public function blocks()
    {
        return $this->hasMany(Block::class);
    }
}
