<?php

namespace Ciss;

use Illuminate\Database\Eloquent\Model;

class Adresse extends AbstractModel
{

    protected $table = "adresse";
    protected $primaryKey = "IDAdresse";

    /**
     * @return mixed
     */
    public function getAdresseA()
    {
        return $this->AdresseA;
    }

    /**
     * @param mixed $AdresseA
     */
    public function setAdresseA($AdresseA)
    {
        $this->AdresseA = $AdresseA;
    }

    /**
     * @return mixed
     */
    public function getAdresseB()
    {
        return $this->AdresseB;
    }

    /**
     * @param mixed $AdresseB
     */
    public function setAdresseB($AdresseB)
    {
        $this->AdresseB = $AdresseB;
    }

    /**
     * @return mixed
     */
    public function getAdresseC()
    {
        return $this->AdresseC;
    }

    /**
     * @param mixed $AdresseC
     */
    public function setAdresseC($AdresseC)
    {
        $this->AdresseC = $AdresseC;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->CodePostal;
    }

    /**
     * @param mixed $CodePostal
     */
    public function setCodePostal($CodePostal)
    {
        $this->CodePostal = $CodePostal;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * @param mixed $Ville
     */
    public function setVille($Ville)
    {
        $this->Ville = $Ville;
    }


    public function Utilisateur(){
        $this->belongsTo('Ciss\Utilisateur', 'IDUtilisateur');
    }
}
