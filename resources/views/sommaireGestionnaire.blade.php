<aside>
    <ul >
        <h3 style="text-align: center;">Bonjour {{ $gestionnaire['prenom'] . ' ' . $gestionnaire['nom'] }}</h3>
        <li class="smenu">
            <a href="{{ route('chemin_ajouter') }}" title="Ajouter un utilisateur"><button>Ajouter un visiteur</button> </a>
        </li>
        <li class="smenu">
            <a href="{{ route('chemin_modifier') }}" title="Modifier un utilisateur"><button>Modifier un visiteur</button></a>
        </li>
        <li class="smenu">
            <a href="{{ route('chemin_supprimer') }}" title="Supprimer un utilisateur"><button>Supprimer un visiteur</button></a>
        </li>  
        <li class="smenu">
           <a href="{{ route('chemin_deconnexion') }}" title="Se déconnecter"><button class="alert" >Déconnexion</button></a>
        </li>
    </ul>
</aside>
