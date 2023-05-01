<thead>
    <tr>
        <th scope="col"> ÉTUDIANTS </th>
        <th scope="col"> ENCADRANTS </th>
        <th scope="col"> JURYS</th>
        <th scope="col"> DIPLOME </th>
        <th scope="col"> ANNÉE </th>
        <th scope="col"> SUJET </th>
        <th scope="col"> DEPARTEMENT </th>
        <th scope="col"> DOCUMENT </th>
        <th scope="col"> MOTS CLÉS </th>
    </tr>
</thead>
<tbody class="table-group-divider">
    @if (is_iterable($projets))
        @forelse ($projets as $projet)
        <tr>
            {{-- etudiant --}}
            <td>
                <ul class="list-e">
                @foreach ($projet->etudiants as $etudiant)
                    <li>{{$etudiant}}</li>
                @endforeach
                </ul>
            </td>
            {{-- encadrant --}}
            <td>
                <ul class="list-e">
                @foreach ($projet->encadrants as $enadrant)
                    <li>{{$enadrant}}</li>
                @endforeach
                </ul>
            </td>

            {{-- jurys --}}
            <td>
            @if ($projet->jurys !== [""])
                <ul class="list-e">
                @foreach ($projet->jurys as $jury)
                    <li>{{$jury}}</li>
                @endforeach
                </ul>
            @endif
            </td>
            <td> {{$projet->diplome}} </td>
            <td> {{$projet->annee}} </td>
            <td> {{$projet->sujet}} </td>
            <td> {{$projet->departement}} </td>
            {{-- document --}}
            <td>
                @livewire('counter', ['project_id' => $projet->id], key($projet->id))

            {{-- 
                @if(substr($projet->document,0,7)=="http://" or substr($projet->document,0,8)=="https://")
                <a href={{$projet->document}}> lien de document </a>
                @else
                @livewire('counter', ['project_id' => $projet->id])
                @endif 
            --}}
            </td>
            
            {{-- mots cles --}}
            <td>
                {{implode(' , ',$projet->mots_cles)}}
            </td>
        </tr>
        @empty
        <tr>
            <td class="py-4" colspan="9" >
                <span class="fs-4 text-secondary">no records found..</span>
            </td>
        </tr>
        @endforelse
    @else
    <tr>
        <td class="py-4" colspan="9" >
            <span class="fs-4 text-secondary">...</span>
        </td>
    </tr>
    @endif
    
</tbody> 


