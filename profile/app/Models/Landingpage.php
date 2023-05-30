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
        // 'type',
        'visitors',
        // 'price',
        'user_id',
    ];
    

    public function blocks()
    {
        //Returnin The Order as it should be
        return $this->hasMany(Block::class)->orderBy('ordre');
    }

    public function forms()
    {
        //Returnin The Order as it should be
        return $this->hasMany(Form::class, 'landing_page_id')->orderByDesc('created_at');
    }

}
