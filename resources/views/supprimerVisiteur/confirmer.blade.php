@extends ('modeles/gestionnaire')
@section('contenu2')
<section id="confirmationSuppression">
    <div>
        <div class="cadre">
            <div class="flex_center titre">
                <img src="{{ asset('images/logoGsb.png')}}" alt="logo_Gsb" height="40px">
                <h1>Etes vous sûr de vouloir supprimer définitivement ce visiteur ?</h1>
            </div>
            <div class="cadreBlanc">
                <h4>Prenom: {{ $visiteur['prenom'] }}</h4>
                <h4>Nom:  {{ $visiteur['nom'] }}</h4>
                <h4>Adresse : {{ $visiteur['adresse'] }}</h4>
                <h4>Code Postal : {{ $visiteur['cp'] }}</h4>
                <h4>Ville : {{ $visiteur['ville'] }}</h4>
                <div>
                    <a href="{{ route('chemin_supprimer.selection.executer', ['id'=>$visiteur['id']]) }}"><button class="btnAccueil">Confirmer la suppression</button></a>
                    <a href="{{ route('chemin_Accueil') }}"><button class="annuler">Annuler</button></a>
                </div>
        </div>
    </div>
</section>
@endsection