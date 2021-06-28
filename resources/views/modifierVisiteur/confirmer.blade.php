@extends ('modeles/gestionnaire')
@section('contenu1') 
    <section>
        <div>
            <div class="cadre">
                <div class="flex_center titre">
                    <img src="{{ asset('images/logoGsb.png')}}" alt="logo_Gsb" height="40px">
                    <h1>Enregistrer les modifications</h1>
                </div>
                    <div class="recap">
                        <div class="flex_center column">
                            <h3>Adresse : {{ $visiteur['adresse'] }}</h3>
                            <h3>Code Postal : {{ $visiteur['cp'] }}</h3>
                            <h3>Ville : {{ $visiteur['ville'] }}</h3>
                            <div class="identifiants">
                                <h2>Login : {{ $visiteur['login'] }}</h2>
                                <h2>Mot de passe : {{ $visiteur['mdp'] }}</h2>
                            </div>
                            <div class="flex_center">
                                <form action="{{ route('modifier.formulaire.confirmer.enregistrer') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ serialize($visiteur) }}" name="visiteur">
                                    <input type="submit" name="enregistrer" value="Enregistrer">
                                </form>
                                <a href="{{ route('chemin_Accueil') }}"><button class="annuler">Annuler</button></a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
