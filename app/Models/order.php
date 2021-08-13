<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'command_id',
        'plat_id',
        'quantity',
        'user_id',
        'adress_id',
        'date_livraison',
    ];

    public function plat()
    {
        return $this->belongsTo("App\Models\plat");
    }
}
