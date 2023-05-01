<div class="show-p">
    <div class="sujet"> {{$projet['sujet']}} </div>
    
    <div class="etudiant"> 
      <span class="label">Étudiants: </span>
      {{implode(' , ',$projet['etudiants'])}} </div>
      
    <div class="encadrant"> 
      <span class="label">Encadrants: </span>
      {{implode(' , ',$projet['encadrants'])}} </div> 

    <div class="departement"> 
      <span class="label">Département:</span>
      {{$projet['departement']}} </div> 

      <div class="mot-cle"> 
        <span class="label">mots clés: </span>
        {{implode(' , ',$projet['mots_cles'])}} </div>
        
    <div class="diplome"> {{$projet['diplome']}} </div> 

    <div class="annee"> {{$projet['annee']}} </div>
    
  </div>