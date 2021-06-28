@extends ('modeles/gestionnaire')
@section('contenu1')
<section id="formulaireModif">
    <div>
        <div class="cadre">
            <div class="flex_center titre">
                <img src="{{ asset('images/logoGsb.png')}}" alt="logo_Gsb" height="40px">
                <h1>Modifier les informations de {{$visiteur['prenom']." ".$visiteur['nom']}}</h2>
            </div>
                <form action="{{ route('chemin_modifier.formulaire.confirmer') }}" method="POST">
                    @csrf
                    <div>
                        <label for="id">Id</label>
                        <input type="text" name="id" value="{{$visiteur['id']}}" readonly />
                    </div>
                    <div>   
                        <label for="prenom">Prénom : </label>
                        <input type="text" name = "prenom" value="{{ $visiteur['prenom'] }}" readonly />
                    </div>
                    <div>   
                        <label for="nom">Nom : </label>
                        <input type="text" name = "nom" value="{{$visiteur['nom']}}" readonly />
                    </div>
                    <div>  
                        <label for="adresse">Adresse : </label>
                        <input type="text"  name = "adresse" value="{{ $visiteur['adresse'] }}" placeholder="{{ $visiteur['adresse'] }}" />
                    </div>
                    <div>   
                        <label for="cp">Code Postal : </label>
                        <input type="text" name = "cp" value="{{ $visiteur['cp'] }}" />
                    </div>
                    <div>  
                        <label for="ville">Ville : </label>
                        <input type="text"  name = "ville" value="{{ $visiteur['ville'] }}" />
                    </div>
                    <div>   
                        <label for="dateEmbauche">Date Embauche : </label>
                        <input type="date" name="dateEmbauche" value="{{$visiteur['dateEmbauche']}}" readonly />
                    </div>
                    <div>
                        <label for="login">Login : </label>
                        <input type="text" name="login" value="{{$visiteur['login']}}" readonly/>   
                    </div>
                    <div>
                        <label for="motDePasse">Mot de passe : </label>
                        <input type="text" name="motDePasse" value="{{$visiteur['mdp']}}" readonly/>  
                    </div>   
                    <div>
                        <label for="nouveauMdp"> Souhaitez-vous générer un nouveau mot de passe ? </label>
                        <input type="checkbox" name="nouveauMdp" value="true">
                    </div>
                    <input type="submit" value="valider" name="validerModif">
                </form>
        </div>
    </div>
</section>
@endsection

