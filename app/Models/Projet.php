<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'etudiants' => 'array',
        'encadrants' => 'array',
        'jurys' => 'array',
        'mots_cles' => 'array',
    ];

    // public function toSearchableArray(): array
    // {
    //     // Customize the data array...
    //     return [
    //         'etudiants' => $this->etudiants,
    //         'encadrants' => $this->encadrants,
    //         'jurys' => $this->jurys,
    //         'diplome' => $this->diplome,
    //         'sujet' => $this->sujet,
    //         'departement' => $this->departement,
    //         'annee' => $this->annee,
    //         'mots_cles' => $this->mots_cles,
    //     ];
    // }
}
