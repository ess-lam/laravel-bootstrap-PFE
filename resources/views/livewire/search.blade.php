<div>
    <div class="search-container">
        <div class="row1">
            <input wire:model.debounce.210ms="etudiants"
            class="search-element"  placeholder="etudiants" type="search" />
    
            <input wire:model.debounce.220ms="encadrants"
            class="search-element" placeholder="encadrants" type="search" />
    
            <input wire:model.debounce.230ms="jurys"
            class="search-element"  placeholder="jurys" type="search" />
            
            <input wire:model.debounce.240ms="diplome"
            class="search-element"  placeholder="diplome" type="search" />
        </div>   
        
        
        
        <div class="row2">
            <input wire:model.debounce.250ms="annee"
            class="search-element" style="width:4.5em"  placeholder="annee" type="search" />

            <input wire:model.debounce.260ms="sujet"
            class="search-element"  placeholder="sujet" type="search" />
            
            <input wire:model.debounce.270ms="departement"
            class="search-element"  placeholder="departement" type="search" />
            
            <input wire:model.debounce.280ms="mots_cles"
            class="search-element"  placeholder="mots_cles" type="search" />        
        </div>    
        
        
        
        {{-- <button wire:click="search" >recherche</button> --}}

    </div>
    
    <div class="py-3">
        @if (is_iterable($projets))
            Total: {{ count($projets) }}
        @endif

        <div class="table-responsive">
            <table wire:loading.class.delay="opacity-75" class="table table-bordered table-striped  table-success ">
            @include('components.table')
            </table>
        </div>
        
        
    </div>
</div>
