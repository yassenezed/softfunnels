<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company',
        'adress',
        'notes',
        'user_id'

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
?>