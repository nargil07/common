<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 14/09/16
 * Time: 10:49
 */

namespace Ciss\Metier\Utilsateur;


use Ciss\AbstractModel;
use Ciss\Groupe;
use Ciss\Personne;
use Ciss\Utilisateur;

class MetierUtilisateurGroupe extends MetierUtilisateurPersonne
{
    /**
     * @var Groupe
     */
    private $groupe;

    /**
     * MetierUtilisateurGroupe constructor.
     * @param $groupe
     */
    public function __construct(Groupe $groupe)
    {
        $this->groupe = $groupe;
    }

    /**
     * @param Utilisateur $abstractModel
     * @throws \Exception
     */
    protected function create(AbstractModel &$abstractModel)
    {
        parent::create($abstractModel);
        $abstractModel->Personne->Groupes()->attach($this->groupe);
    }

    protected function delete(AbstractModel &$abstractModel)
    {
        if($abstractModel->Personne->Groupes()->detach($this->groupe) == 1){
            parent::delete($abstractModel);
        }else{
            throw new \Exception('Erreur lors du détach du groupe a la personne');
        }

    }

    /**
     * @param Utilisateur $utilisateur
     */
    public function ajouterUtilisateur(Utilisateur &$utilisateur, Personne &$personne)
    {
        $personne->save();
        $personne->Utilisateur()->save($utilisateur);
        $this->create($utilisateur);
    }

    /**
     * Cette methode doit supprimer un utilisateur
     * @param Utilisateur $utilisateur
     * @return void
     */
    public function supprimerUtilisateur(Utilisateur &$utilisateur)
    {
        $this->delete($utilisateur);
    }
}