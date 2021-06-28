@extends ('modeles/gestionnaire')
@section('contenu1')
<section id="supprimer">
    <div>
        <div class="cadre">
            <div class="flex_center titre">
                <img src="{{ asset('images/logoGsb.png')}}" alt="logo_Gsb" height="40px">
                <h1>Merci de selectionner le visiteur à supprimer</h1>
            </div>
            <form action="{{ route('chemin_supprimer.selection') }}" method="post">
                {{ csrf_field() }}
                <div>
                    <label for="id">Selectionner le visiteur à supprimer</label>
                    <select style="font-size: 1rem;" name="id">
                    @foreach ($listeVisiteurs as $visiteur)
                        <option style="font-size: 1rem;" value="{{ $visiteur['id'] }}">{{ $visiteur['nom'].'  '.$visiteur['prenom'] }}</option>
                    @endforeach 
                    </select>
                </div>
                <div class="pied_Form ">
                <input type="submit" name="supprimer" value="valider"/>
                </div>
            </form>
</div>
</div>
</section>
@endsection
