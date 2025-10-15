<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected  $filiable = [
        'rib',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
