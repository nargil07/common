<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 13/09/16
 * Time: 14:19
 */

namespace Ciss;


class Groupe extends AbstractModel
{
    protected $table = "groupe";
    protected $primaryKey = "IDGroupe";

//    protected $IDGroupe;
//    protected $IDGroupeMaitre;
//    protected $Logo;
//    protected $RaisonSociale;
//    protected $Enseigne;
//    protected $SIRET;
//    protected $TVAIntracommunautaire;
//    protected $ModeAffichageEstMembreDe;
//    protected $CodeCreation;
//    protected $IDGestionnaire;
//    protected $xmlModelePersonne;
//    protected $Observation;

    public function Personnes(){
        return $this->belongsToMany('Ciss\Personne', 'estpartagepar', 'IDGroupe', 'IDPersonne');
    }

    public function EstPartagePars(){
        return $this->hasMany('Ciss\EstPartagePar', 'IDGroupe', 'IDGroupe');
    }

    /**
     * @return mixed
     */
    public function getObservation()
    {
        return $this->Observation;
    }

    /**
     * @param mixed $Observation
     */
    public function setObservation($Observation)
    {
        $this->Observation = $Observation;
    }

    /**
     * @return mixed
     */
    public function getIDGroupe()
    {
        return $this->IDGroupe;
    }

    /**
     * @param mixed $IDGroupe
     */
    public function setIDGroupe($IDGroupe)
    {
        $this->IDGroupe = $IDGroupe;
    }

    /**
     * @return mixed
     */
    public function getIDGroupeMaitre()
    {
        return $this->IDGroupeMaitre;
    }

    /**
     * @param mixed $IDGroupeMaitre
     */
    public function setIDGroupeMaitre($IDGroupeMaitre)
    {
        $this->IDGroupeMaitre = $IDGroupeMaitre;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->Logo;
    }

    /**
     * @param mixed $Logo
     */
    public function setLogo($Logo)
    {
        $this->Logo = $Logo;
    }

    /**
     * @return mixed
     */
    public function getRaisonSociale()
    {
        return $this->RaisonSociale;
    }

    /**
     * @param mixed $RaisonSociale
     */
    public function setRaisonSociale($RaisonSociale)
    {
        $this->RaisonSociale = $RaisonSociale;
    }

    /**
     * @return mixed
     */
    public function getEnseigne()
    {
        return $this->Enseigne;
    }

    /**
     * @param mixed $Enseigne
     */
    public function setEnseigne($Enseigne)
    {
        $this->Enseigne = $Enseigne;
    }

    /**
     * @return mixed
     */
    public function getSIRET()
    {
        return $this->SIRET;
    }

    /**
     * @param mixed $SIRET
     */
    public function setSIRET($SIRET)
    {
        $this->SIRET = $SIRET;
    }

    /**
     * @return mixed
     */
    public function getTVAIntracommunautaire()
    {
        return $this->TVAIntracommunautaire;
    }

    /**
     * @param mixed $TVAIntracommunautaire
     */
    public function setTVAIntracommunautaire($TVAIntracommunautaire)
    {
        $this->TVAIntracommunautaire = $TVAIntracommunautaire;
    }

    /**
     * @return mixed
     */
    public function getModeAffichageEstMembreDe()
    {
        return $this->ModeAffichageEstMembreDe;
    }

    /**
     * @param mixed $ModeAffichageEstMembreDe
     */
    public function setModeAffichageEstMembreDe($ModeAffichageEstMembreDe)
    {
        $this->ModeAffichageEstMembreDe = $ModeAffichageEstMembreDe;
    }

    /**
     * @return mixed
     */
    public function getCodeCreation()
    {
        return $this->CodeCreation;
    }

    /**
     * @param mixed $CodeCreation
     */
    public function setCodeCreation($CodeCreation)
    {
        $this->CodeCreation = $CodeCreation;
    }

    /**
     * @return mixed
     */
    public function getIDGestionnaire()
    {
        return $this->IDGestionnaire;
    }

    /**
     * @param mixed $IDGestionnaire
     */
    public function setIDGestionnaire($IDGestionnaire)
    {
        $this->IDGestionnaire = $IDGestionnaire;
    }

    /**
     * @return mixed
     */
    public function getXmlModelePersonne()
    {
        return $this->xmlModelePersonne;
    }

    /**
     * @param mixed $xmlModelePersonne
     */
    public function setXmlModelePersonne($xmlModelePersonne)
    {
        $this->xmlModelePersonne = $xmlModelePersonne;
    }


}