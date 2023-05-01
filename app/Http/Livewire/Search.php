<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Projet;

class Search extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $etudiants;
    public $encadrants;
    public $jurys;
    public $annee;
    public $diplome;
    public $sujet;
    public $departement;
    public $mots_cles;

    protected $projets;
    public $nombre_projets;

    

    public function search()
    {
        if (!empty($this->etudiants) || !empty($this->encadrants) || !empty($this->jurys) || !empty($this->diplome) || 
        !empty($this->annee) || !empty($this->sujet) || !empty($this->departement) || !empty($this->mots_cles)) {
            $results = Projet::
                when(!empty($this->etudiants), function($query) {
                    return $query->where('etudiants', 'like', '%'.$this->etudiants.'%');
                })
                ->when(!empty($this->encadrants), function($query) {
                    return $query->where('encadrants', 'like', '%'.$this->encadrants.'%');
                })
                ->when(!empty($this->jurys), function($query) {
                    return $query->where('jurys', 'like', '%'.$this->jurys.'%');
                })
                ->when(!empty($this->diplome), function($query) {
                    return $query->where('diplome', 'like', '%'.$this->diplome.'%');
                })
                ->when(!empty($this->annee), function($query) {
                    return $query->where('annee', 'like', '%'.$this->annee.'%');
                })
                ->when(!empty($this->sujet), function($query) {
                    return $query->where('sujet', 'like', '%'.$this->sujet.'%');
                })
                ->when(!empty($this->departement), function($query) {
                    return $query->where('departement', 'like', '%'.$this->departement.'%');
                })
                ->when(!empty($this->mots_cles), function($query) {
                    return $query->where('mots_cles', 'like', '%'.$this->mots_cles.'%');
                });
        } else {
            return ;
        }

        $this->projets = $results->get();
        return $this->projets;
    }

    public function render()
    {   //$this->search()
        return view('livewire.search',['projets'=> $this->search()])
        ->layout('search');
    }
}
