@extends ('modeles/gestionnaire')
@section('contenu1')
    <section>
        <div id="accueil">
            @if ($message != "")
            <h3 class="success">{{ $message }}</h3>
            <?php $message=""; ?>
            @endif
            <h1>Bonjour {{ $gestionnaire['prenom'].' '.$gestionnaire['nom'] }}</h1>
            <h2>Bienvenue sur votre espace</h2>
            <div>
                <img src="{{ asset('images/logogsb.png') }}" alt="logoGsb">
            </div>
        </div>
    </section>
@endsection