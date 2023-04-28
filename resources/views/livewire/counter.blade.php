<div>
    <a wire:click="increment" href={{ route('file.download',$project_id) }}> 
        telecharger le document
    </a> <br>
    <span>
        {{ $download_number }} téléchargements
    </span>
</div>


