<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Projet;

class Counter extends Component
{
    public $project_id;

    public $download_number;

    private $project;

    // protected $listeners = ['download_nombre' => '$refresh'];

    public function mount($project_id)
    {
        $this->project= Projet::findOrFail($project_id);
        $this->download_number = $this->project->downloads;
    }

    public function increment()
    {
        $this->project= Projet::findOrFail($this->project_id);
        $this->project->downloads++;

        $this->download_number = $this->project->downloads;
        
        $this->project->save();
        $this->emit('download_number');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
