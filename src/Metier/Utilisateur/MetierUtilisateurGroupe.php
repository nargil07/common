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
    protected function create(AbstractModel $abstractModel)
    {
        parent::create($abstractModel);
        $this->Personne->Groupes()->attach($this->groupe);
    }

    protected function delete(AbstractModel $abstractModel)
    {
        $abstractModel->Personne->Groupes()->detach($this->groupe);
        parent::delete($abstractModel);
    }

    /**
     * @param Utilisateur $utilisateur
     */
    public function ajouterUtilisateur(Utilisateur $utilisateur, Personne $personne)
    {
        $personne->save();
        $personne->Utilisateur()->save($utilisateur);
        $this->create($utilisateur);
    }
}