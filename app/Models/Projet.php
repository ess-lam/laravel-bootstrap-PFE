<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Projet extends Model
{
    use HasFactory, Searchable;

    public function toSearchableArray(): array
    {
        // Customize the data array...
        return [
            'etudiant' => $this->etudiant,
            'encadrant' => $this->encadrant,
            'theme' => $this->theme
        ];
    }
}
