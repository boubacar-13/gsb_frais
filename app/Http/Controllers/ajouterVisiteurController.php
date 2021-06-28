<?php

namespace App\Http\Controllers;

use App\Facades\PdoGsb as FacadesPdoGsb;
use Illuminate\Http\Request;
use PdoGsb;
use MyDate;
use Carbon\Carbon;
use PDO;

class ajouterVisiteurController extends Controller{

    function getFormulaire(Request $request){
        if( session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');
            $dateMaxNow = Carbon::today();
            $message = " ";
            return view('ajouterVisiteur.ajoutVisiteur')
                    ->with('gestionnaire', $gestionnaire)
                    ->with('dateMaxNow', $dateMaxNow)
                    ->with('message',$message);
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
        
    }
    function enregistrer(Request $request){
        if(session('gestionnaire')!= null){
            $gestionnaire = session('gestionnaire');
            $dateMaxNow = Carbon::today();
            $visiteur = array(
                'nom' => ucFirst(htmlspecialchars($request['nom'])),
                'prenom' => ucFirst(htmlspecialchars($request['prenom'])),
                'adresse'=>htmlspecialchars($request['ville']),
                'ville' => htmlspecialchars($request['ville']),
                'cp' =>  htmlspecialchars($request['codePostal']),
                'dateEmbauche'=>$request['dateEmbauche'],
                'login'=>strtolower(substr($request['nom'],0,1). $request['prenom']),
                'mdp'=> PdoGsb::getMotDePasse(8),
                'id'=> PdoGsb::getMotDePasse(3),
            );
            if(isset($_POST['btn1'])){
                PdoGsb::sauvegardeVisiteur($visiteur['id'],$visiteur['nom'],$visiteur['prenom'],$visiteur['login'],$visiteur['mdp'],$visiteur['adresse'],$visiteur['ville'],$visiteur['cp'],$visiteur['dateEmbauche']);
                $message ='La fiche de '. $visiteur['prenom'].' '.$visiteur['nom'].' a bien été enregistrée ';
                $erreurs = null;
        	}
		    else{
                 $erreurs[] ="Tous les champs doivent être saisis";
                 $message = '';
             }
            return view('ajouterVisiteur.enregistrer')
                                                                                    ->with('gestionnaire', $gestionnaire)
                                                                                    ->with('dateMaxNow', $dateMaxNow)
                                                                                    ->with('visiteur', $visiteur)
                                                                                    ->with('message',$message)
                                                                                    ->with('erreurs',$erreurs);
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }
}




