<?php

        /*-------------------- Use case connexion---------------------------*/
Route::get('/',['as' => 'chemin_connexion','uses' => 'connexionController@connecter']);
Route::post('/',['as'=>'chemin_valider','uses'=>'connexionController@valider']);
Route::get('deconnexion',['as'=>'chemin_deconnexion','uses'=>'connexionController@deconnecter']);
         /*-------------------- Use case état des frais---------------------------*/
Route::get('selectionMois',['as'=>'chemin_selectionMois','uses'=>'etatFraisController@selectionnerMois']);
Route::post('listeFrais',['as'=>'chemin_listeFrais','uses'=>'etatFraisController@voirFrais']);
        /*-------------------- Use case gérer les frais---------------------------*/
Route::get('gererFrais',['as'=>'chemin_gestionFrais','uses'=>'gererFraisController@saisirFrais']);
Route::post('sauvegarderFrais',['as'=>'chemin_sauvegardeFrais','uses'=>'gererFraisController@sauvegarderFrais']);



    /*-------------------- ACCUEIL GESTIONNAIRE---------------------------*/
Route::get('/AccueilGestionnaire',['as'=>'chemin_Accueil', 'uses'=>'connexionController@getAccueil']);
Route::get('/AccueilGestionnaire/{message}',['as'=>'chemin_retourAccueil','uses'=>'connexionController@getAccueilGestionnaire']);

        /*-------------------- AJOUTER VISITEUR---------------------------*/
Route::get('ajouter',['as' => 'chemin_ajouter', 'uses' => 'ajouterVisiteurController@getFormulaire']);
Route::post('ajouter/sauvegarder', [ 'as' => 'chemin_ajouter.sauvegarder','uses' => 'ajouterVisiteurController@enregistrer']);
        
        /*-------------------- MODIFIER UN VISITEUR----------------------------*/
Route::get('/modifier',['as' =>'chemin_modifier' , 'uses' => 'modifierVisiteurController@selectionVisiteur']);
Route::get('modifier/{id}',['as'=>'chemin_modifier.formulaire', 'uses'=>'modifierVisiteurController@formulaire']);
Route::post('modifier/confirmer',['as'=>'chemin_modifier.formulaire.confirmer', 'uses'=>'modifierVisiteurController@confirmer']);
Route::post('modifier/enregistrer',['as'=>'modifier.formulaire.confirmer.enregistrer', 'uses'=>'modifierVisiteurController@enregistrer']);

/*-------------------- SUPPRIMER VISITEUR---------------------------*/
Route::get('supprimer', ['as' =>'chemin_supprimer', 'uses' => 'supprimerVisiteurController@selection']);
Route::post('Supprimer/selection',['as' => 'chemin_supprimer.selection', 'uses' => 'supprimerVisiteurController@confirmation']);
Route::get('Supprimer/selection/{id}',['as' => 'chemin_supprimer.selection.executer', 'uses' => 'supprimerVisiteurController@executer']); 