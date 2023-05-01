<div>
    <a wire:click="increment" href={{ route('file.download',$project_id) }}
    style="color: inherit; font-weight:bolder;"> 
        telecharger le document
    </a> <br>
    <span>
        {{ $download_number }} téléchargements
    </span>
</div>


