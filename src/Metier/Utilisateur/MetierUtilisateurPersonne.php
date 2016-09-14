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
    protected function create(AbstractModel $abstractModel)
    {
        if($this->personne->save()){
            throw new \Exception("Erreur d'ajout de personne login : ".$this->personne->getMail());
        }
        if($this->personne->Utilisateur()->save($abstractModel)){
            throw new \Exception("Erreur d'ajout de utilisateur id : ".$abstractModel->getLogin());
        }
    }

    /**
     * @param Utilisateur $abstractModel
     */
    protected function delete(AbstractModel $abstractModel)
    {
        //Je récupère la personne de l'utilisateur que l'on vas supprimer
        //car il faut supprimer d'abord l'user et ensuite la personne.
        $personneLocal = $abstractModel->Personne;

        if($abstractModel->delete()){
            throw new \Exception("Erreur lors de la suppression de l'utilisateur " . $abstractModel->getLogin());
        }

        if($personneLocal->delete()){
            throw new \Exception("Erreur lors de la suppression de l'utilisateur " . $personneLocal->getMail());
        }
    }

    public abstract function ajouterUtilisateur(Utilisateur $utilisateur);
}