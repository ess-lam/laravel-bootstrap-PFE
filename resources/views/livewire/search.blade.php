<div>
    <div class="d-flex flex-wrap justify-content-center">
            
        <input wire:model.debounce.210ms="etudiants"
        class=""  placeholder="etudiants" type="search" />

        <input wire:model.debounce.220ms="encadrants"
        class=""  placeholder="encadrants" type="search" />

        <input wire:model.debounce.230ms="jurys"
        class=""  placeholder="jurys" type="search" />
        
        <input wire:model.debounce.240ms="diplome"
        class=""  placeholder="diplome" type="search" />

        <input wire:model.debounce.250ms="annee"
        class=""  placeholder="annee" type="search" />

        <input wire:model.debounce.260ms="sujet"
        class=""  placeholder="sujet" type="search" />
        
        <input wire:model.debounce.270ms="departement"
        class=""  placeholder="departement" type="search" />
        
        <input wire:model.debounce.280ms="mots_cles"
        class=""  placeholder="mots_cles" type="search" />
        
        <button wire:click="search" >recherche</button>

    </div>
    
    <div class="pt-3">
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
