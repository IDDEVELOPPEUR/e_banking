<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfere extends Model
{
    protected  $filiable = [
        'montant',
        'type-transfert',
        'rib-source',
        'rib-destination',
        'compte_id',
    ];
}
