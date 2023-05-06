<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Block extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'type',
        'ordre',
        'landingpage_id',
        'details',

    ];
    public function landingpage()
    {
        return $this->belongsTo(Landingpage::class, 'landingpage_id', 'id');
    }
}
