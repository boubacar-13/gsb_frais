
@extends ('modeles/gestionnaire')
@section('contenu1')
    <section id="validationAjout">
        <div>
            @if ($message != "")
                <h3 class="success">{{ $message }}</h3>
            <?php $message=""; ?>
            @endif
            <div class="cadre">
                <div >
                    <h2 style="color: #FAF7F2;">Voici ses Informations Personnelles :</h2> 
                    <div class="recap">
                        <div class="flex_center column">
                            <p>Identifiant : {{$visiteur['id']}} </p>
                            <p>Login : {{$visiteur['login']}}</p>
                            <p>Mot de passe : {{ $visiteur['mdp']}}</p>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;">
                    <a href="{{ route('chemin_Accueil') }}"><button class="btnAccueil">Retour à l'accueil</button></a>
                </div>
            </div>
        </div>
    </section>
@endsection

