<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
    
    protected $fillable = [
        'landing_page_id',
        'fullname',
        'email',
        'phone',
        'state',
        'company',
        'adress',
        'notes'
    ];
    public function landingPage()
    {
        return $this->belongsTo(LandingPage::class);
    }
}
?>