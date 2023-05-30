<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commandes';

    protected $fillable = ['user_id', 'pack_id', 'quantity', 'price', 'ref' , 'total'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function pack()
    {
        return $this->belongsTo(Pack::class, 'id');
    }
}
?>