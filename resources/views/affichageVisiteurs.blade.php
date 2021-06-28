{{-- @extends ('sommaireGestionnaire')
@section('contenu2') 
<table class="resultat">
    <caption><h4>Selectionner le visiteur à modifier</h4></caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th> 
            <th>Modifier</th> 
        </tr>
    </thead>
    <tbody>  
            @foreach ($listeVisiteurs as $visiteur){ 
                <tr>
                    
                    <td>{{$visiteur['nom']}}</td>
                    <td>{{$visiteur['prenom']}}</td>
                    <td><a href="{{route('chemin_formulaireModification')}}" name='idVisiteur' value='{{$visiteur['id']}}'>Modifier Visiteur {{$visiteur['id']}} </a></td>
                    </form>
                </tr>
               
            @endforeach 
    </tbody> 
</table>
@endsection --}}