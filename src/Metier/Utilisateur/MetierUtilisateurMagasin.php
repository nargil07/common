<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 14/09/16
 * Time: 10:52
 */

namespace Ciss\Metier\Utilsateur;


use Ciss\AbstractModel;
use Ciss\Magasin;
use Ciss\Utilisateur;

class MetierUtilisateurMagasin extends MetierUtilisateurPersonne
{
    /**
     * @var Magasin
     */
    private $magasin;
    /**
     * MetierUtilisateurMagasin constructor.
     */
    public function __construct(Magasin $magasin)
    {
        $this->magasin = $magasin;
    }

    /**
     * @param Utilisateur $abstractModel
     * @throws \Exception
     */
    protected function create(AbstractModel $abstractModel)
    {
        $abstractModel->Personne->Magasin()->associate($this->magasin);
        parent::create($abstractModel);
    }


    protected function delete(AbstractModel $abstractModel)
    {
        $abstractModel->Personne->Magasin()->dissociate();
        if(!$abstractModel->Personne->save()){
            throw new \Exception("Erreur lors de la discociation du magasin " . $this->magasin->getIDMagasin()
                . "et la personne " . $abstractModel->Personne->getIDPersonne());
        }
        parent::delete($abstractModel);
    }
}