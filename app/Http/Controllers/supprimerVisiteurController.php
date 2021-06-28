<?php
namespace App\Http\Controllers;

use PdoGsb;
use Illuminate\Http\Request;


class supprimerVisiteurController extends Controller
{
    function selection(){
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');
            $listeVisiteurs = PdoGsb::getLesVisiteursSansFrais();
            return view('supprimerVisiteur/selection') ->with('gestionnaire', $gestionnaire)
                                                                                                            ->with('listeVisiteurs', $listeVisiteurs);
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }
    function confirmation(Request $request){
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');
            $visiteur= PdoGsb::getVisiteur($request['id']);
            return view('supprimerVisiteur.confirmer')->with('gestionnaire', $gestionnaire)
                                                                                            ->with('visiteur', $visiteur);
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }
    function executer($id){
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');
            $visiteur= PdoGsb::getVisiteur($id);
            $suppression = PdoGsb::supprimerUnVisiteur($id);
            $message = "Le visiteur à bien été supprimé";
            return redirect()->route('chemin_retourAccueil',['message'=>$message, 'gestionnaire'=>$gestionnaire]);
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }
}
