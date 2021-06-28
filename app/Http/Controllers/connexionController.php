<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;

class connexionController extends Controller
{
    function connecter(){
        
        return view('connexion')->with('erreurs',null);
    } 
    function valider(Request $request){
        $login = $request['login'];
        $mdp = $request['mdp'];
        $visiteur = PdoGsb::getInfosVisiteur($login,$mdp);
        $gestionnaire = PdoGsb::getInfosGestionnaire($login,$mdp);
        if(!is_array($visiteur))
        {
            if(!is_array($gestionnaire))
            {
                $erreurs[] = "Login ou mot de passe incorrect(s)";
                return view('connexion')->with('erreurs',$erreurs);
            }
            else
            {
                session(['gestionnaire' => $gestionnaire]);
                $message="";
                return view('accueilGestionnaire')->with('gestionnaire',session('gestionnaire'))
                                                                            ->with('message', $message);
            }        
        }
        else{
            session(['visiteur' => $visiteur]);
            return view('sommaire')->with('visiteur',session('visiteur'));
        }
    } 
    function deconnecter(){
            session(['visiteur' => null]);
            return redirect()->route('chemin_connexion');
    }
    function getAccueilGestionnaire($message){
        return view('accueilGestionnaire')->with('gestionnaire',session('gestionnaire'))
                                                                    ->with('message', $message);
    }
    function getAccueil(){
        $message ="";
        return view('accueilGestionnaire')->with('gestionnaire',session('gestionnaire'))
                                                                    ->with('message', $message);
    }
       
}
