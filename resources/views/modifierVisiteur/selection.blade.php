@extends ('modeles/gestionnaire')
@section('contenu1')
    <section class="modifVisiteur">
        <div class="cadre">
            <div class="flex_center titre">
                <img src="{{ asset('images/logoGsb.png')}}" alt="logo_Gsb" height="40px">
                <h1>Selectionner le visiteur à modifier</h1>
            </div>
            <table>
                <thead>
                        <td>Nom</td>
                        <td>Prenom</td>
                        <td>Adresse</td>
                        <td>CP</td>
                        <td>Ville</td>
                        <td></td>
                </thead>
                    <tbody>
                        @foreach ($listeVisiteurs as $visiteur)
                    <tr>
                        <td>{{ $visiteur['nom'] }}</td>
                        <td>{{ $visiteur['prenom'] }}</td>
                        <td>{{ $visiteur['adresse'] }}</td>
                        <td>{{ $visiteur['cp'] }}</td>
                        <td style="text-align: center; text-transform: uppercase;">{{ $visiteur['ville'] }}</td>
                        <td><a href="{{ route('chemin_modifier.formulaire',['id'=> $visiteur['id']]) }}"><button>Modifier</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection