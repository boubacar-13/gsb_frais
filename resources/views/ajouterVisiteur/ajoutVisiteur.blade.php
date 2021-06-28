@extends ('modeles/gestionnaire')
@section('contenu1')
    <section>
        <div>
            <div class="cadre">
                <div class="flex_center titre">
                    <img src="{{ asset('images/logoGsb.png')}}" alt="logo_Gsb" height="40px">
                    <h1>Ajouter un nouveau visiteur</h1>               
                 </div>

                <form method="post"  action="{{ route('chemin_ajouter.sauvegarder') }}">
                    {{ csrf_field() }}
                    <div class="legend">
                    <legend style="text-align: center;">Merci de renseigner le formulaire</legend>
                    </div>
                    <div>
                        <label for="prenom">Prénom : </label>
                        <input type="text" name="prenom" placeholder="Saisir prenom" value="<?= $prenom  ?? '' ?>" required></input>
                    </div>
                    <div>
                        <label for="nom">Nom : </label>
                        <input type="text" name="nom" placeholder="Saisir nom" value="<?= $nom ?? ''?>" required></input>
                    </div>
                    <div>
                        <label for="adresse">Adresse : </label>
                        <input type="text" name="adresse" placeholder="Saisir adresse" value="<?= $adresse  ?? '' ?>" required></input>
                    </div>
                    <div>
                        <label for="ville">Ville : </label>
                        <input type="text" name="ville" placeholder="Saisir ville" value="<?= $ville  ?? '' ?>" required></input>
                    </div>
                    <div>
                        <label for="codePostal">Code postal : </label>
                        <input type="text" name="codePostal" placeholder="Code postal" pattern="[0-9]{5}" value="<?= $cp  ?? '' ?>" required></input>
                    </div>
                    <div>
                        <label for="dateEmbauche">Date d'embauche : </label>
                        <input type="date" name="dateEmbauche" placeholder="Ex : 2020-01-01" max="{{$dateMaxNow->format('Y-m-d')}}" value="<?= $dateEmbauche  ?? '' ?>" required>
                    </div>
                    <div class="pied_Form">
                        <input id="ok" type="submit" value="Valider" name="btn1" size="20" />
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection