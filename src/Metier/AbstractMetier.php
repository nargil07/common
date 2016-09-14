<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 14/09/16
 * Time: 09:41
 */

namespace Ciss\Metier;


use Ciss\AbstractModel;

abstract class AbstractMetier
{
    private $mapModel = [];

    protected abstract function create(AbstractModel $abstractModel);

    protected abstract function edit(AbstractModel $abstractModel);

    protected abstract function delete(AbstractModel $abstractModel);

    /**
     * fonction qui doit retourner une cle unique de l'objet donné en paramètre
     * @param AbstractModel $abstractModel
     * @return string
     */
    protected abstract function getKey(AbstractModel $abstractModel);

    /**
     * Recherche un model en fonction de la clé donné en parametre
     * renvoie un objet abstractModel ou null si n'existe pas.
     * @param $key string
     * @return AbstractModel
     */
    protected function search($key)
    {
        $result = null;

        if (array_key_exists($key, $this->mapModel)) {
            $result = $this->mapModel[$key];
        }

        return $result;
    }

    /**
     * Retourne la liste des modeles stocké dans la variable mapModel
     * @return array
     */
    protected function getListModel()
    {
        return array_values($this->mapModel);
    }

    /**
     * Vide la map de modèle et insere ceux passé en paramètre
     * @return array
     */
    protected function setListModel($listModele)
    {
        $this->mapModel = [];
        if ($listModele != null) {
            foreach ($listModele as $model) {
                $this->mapModel[$this->getKey($model)] = $model;
            }
        }
    }

    /**
     * @param AbstractModel $abstractModel
     */
    protected function addModel(AbstractModel $abstractModel)
    {
        if ($abstractModel != null) {
            $key = $this->getKey($abstractModel);

            if ($this->search($key) == null) {
                $this->mapModel[$key] = $abstractModel;
            }
        }
    }

    /**
     * Insère dans la map une liste de model
     * Vériie que le model n'existe pas déjà a l'intérieur avant de l'insérer.
     * @param array $listModels
     */
    protected function addModels($listModels)
    {
        if ($listModels != null) {
            foreach ($listModels as $model) {
                $this->addModel($model);
            }
        }
    }

    /**
     * Supprime de la map l'abstractModel passé en parametre.
     * @param AbstractModel $abstractModel
     */
    protected function delModel(AbstractModel $abstractModel)
    {
        if ($abstractModel != null) {
            $key = $this->getKey($abstractModel);

            if ($this->search($key) != null) {
                unset($this->mapModel[$key]);
            }
        }
    }
}