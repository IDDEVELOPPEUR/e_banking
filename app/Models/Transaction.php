<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $fillable = [
        'envoyeur_id',
        'contact_id',
        'montant',
        'type',
    ];

    // Relation avec l'utilisateur envoyeur
    public function envoyeur()
    {
        return $this->belongsTo(User::class, 'envoyeur_id');
    }




    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }


}
