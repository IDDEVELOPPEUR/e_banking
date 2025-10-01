<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected array $filiable = [
        'nom',
        'prenom',
        'adresse',
        'telephone',
        'Mib'
    ];

}
