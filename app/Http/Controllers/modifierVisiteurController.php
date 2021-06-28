<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;
use MyDate;

class modifierVisiteurController extends Controller
{

    public function selectionVisiteur(){
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');
            $listeVisiteurs= PdoGsb::getListeVisiteurs();
            return view('modifierVisiteur.selection')->with('gestionnaire',$gestionnaire)
                                                                                    ->with('listeVisiteurs',$listeVisiteurs);
        } 
    }
    public function formulaire(Request $request ,$id){
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');
            $visiteur= PdoGsb::getVisiteur($id);
            return view('modifierVisiteur.formulaire') ->with('gestionnaire',session('gestionnaire'))
                                                                                        ->with('visiteur',$visiteur); 
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }
    public function confirmer(Request $request){
        if(session('gestionnaire') != null){
            // $gestionnaire = session('gestionnaire');
            if(isset($_REQUEST['nouveauMdp'])){
                $mdp =PdoGsb::getMotDePasse(8);
            }
            else{
                $mdp = $request['motDePasse'];
            }
            $visiteur = $_POST;
            $visiteur['mdp']= $mdp;
            return view('modifierVisiteur.confirmer')
                                                ->with('visiteur',$visiteur)
                                                ->with('gestionnaire',session('gestionnaire'));
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }
    public function enregistrer(Request $request){
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');
            $visiteur = unserialize($request['visiteur']);
            $modification = PdoGsb::modifierDonneesUtilisateur($visiteur['id'],$visiteur['adresse'],$visiteur['cp'],$visiteur['ville'],$visiteur['mdp']);
            if(isset($modification)){
                $message = "La fiche de ".$visiteur['prenom']." ".$visiteur['nom']." à bien été modifiée";
            }
            else{
                $message = "Une erreur est survenue, veuillez recommencer les modifications";
            }
            return redirect()->route('chemin_retourAccueil',['message'=>$message, 'gestionnaire'=>$gestionnaire]);
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }

}