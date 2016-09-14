<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 14/09/16
 * Time: 11:18
 */

namespace Ciss\Metier\Utilsateur;


use Ciss\AbstractModel;
use Ciss\Personne;
use Ciss\Utilisateur;

abstract class MetierUtilisateurPersonne extends MetierUtilisateur
{

    /**
     * @param Utilisateur $abstractModel
     */
    protected function delete(AbstractModel &$abstractModel)
    {
        //Je récupère la personne de l'utilisateur que l'on vas supprimer
        //car il faut supprimer d'abord l'user et ensuite la personne.
        $personneLocal = $abstractModel->Personne;

        if($abstractModel->delete()){
            throw new \Exception("Erreur lors de la suppression de l'utilisateur " . $abstractModel->getLogin());
        }

        if($personneLocal->delete()){
            throw new \Exception("Erreur lors de la suppression de la personne " . $personneLocal->getMail());
        }
    }

    /**
     * Cette methode doit lié des le debut la personne est l'utilisateur avant de creer la suite.
     * @param Utilisateur $utilisateur
     * @param Personne $personne
     * @return void
     */
    public abstract function ajouterUtilisateur(Utilisateur &$utilisateur, Personne &$personne);

    /**
     * Cette methode doit supprimer un utilisateur
     * @param Utilisateur $utilisateur
     * @return void
     */
    public abstract function supprimerUtilisateur(Utilisateur &$utilisateur);
}