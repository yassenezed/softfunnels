<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserPacking extends Model
{
    protected $table = 'user_packing';

    protected $fillable = ['user_id', 'pack_id', 'start_date', 'end_date'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pack()
    {
        return $this->belongsTo(Pack::class, 'pack_id');
    }
}