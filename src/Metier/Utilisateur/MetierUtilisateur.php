<?php

namespace Ciss\Metier\Utilsateur;
use Ciss\AbstractModel;
use Ciss\Groupe;
use Ciss\Magasin;
use Ciss\Metier\AbstractMetier;
use Ciss\Utilisateur;

/**
 * Created by PhpStorm.
 * User: antony
 * Date: 14/09/16
 * Time: 09:40
 */
abstract class MetierUtilisateur extends AbstractMetier
{
    /**
     * MetierUtilisateur constructor.
     */
    private function __construct()
    {
    }

    public static function getInstance(AbstractModel $abstractModel){
        if($abstractModel instanceof Groupe){
            return new MetierUtilisateurGroupe($abstractModel);
        }elseif($abstractModel instanceof Magasin){
            return new MetierUtilisateurMagasin($abstractModel);
        }else{
            return null;
        }
    }
    /**
     * @param Utilisateur $abstractModel
     * @throws \Exception
     */
    protected function create(AbstractModel &$abstractModel)
    {
        if(!$abstractModel->save()){
            throw new \Exception("Erreur d'ajout de l'utisateur id : ".$abstractModel->getLogin());
        }
        $this->addModel($abstractModel);
    }

    /**
     * @param Utilisateur $abstractModel
     * @throws \Exception
     */
    protected function edit(AbstractModel &$abstractModel)
    {
        if(!$abstractModel->save()){
            throw new \Exception("Erreur de modification de l'utisateur id : ".$abstractModel->getIDUtilisateur());
        }
    }

    /**
     * @param Utilisateur $abstractModel
     * @throws \Exception
     */
    protected function delete(AbstractModel &$abstractModel)
    {
        if(!$abstractModel->delete()){
            throw new \Exception("Erreur de suppression de l'utisateur id : ".$abstractModel->getIDUtilisateur());
        }
        $this->delModel($abstractModel);
    }

    /**
     * fonction qui doit retourner une cle unique de l'objet donné en paramètre
     * @param Utilisateur $abstractModel
     * @return string
     */
    protected function getKey(AbstractModel $abstractModel)
    {
        return $abstractModel->getLogin();
    }
}