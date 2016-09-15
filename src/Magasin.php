<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 13/09/16
 * Time: 17:01
 */

namespace Ciss;


class Magasin extends AbstractModel
{

    protected $primaryKey = "IDMagasin";

    protected $table = "magasin";
//    protected $IDMagasin;
//    protected $IDCodeNAF;
//    protected $IDActivite;
//    protected $Image;
//    protected $RaisonSociale;
//    protected $Enseigne;
//    protected $SIRET;
//    protected $TVAIntraCommunautaire;
//    protected $MontantMaximumAchat;
//    protected $ModeAffichageQuestion;
//    protected $CodePays;
//    protected $Langue;
//    protected $TauxAcompte;
//    protected $Statut;
//    protected $NouvelIDMagasin;
//    protected $PrefixeCodeBarreOffre;
//    protected $IDGestionnaire;
//    protected $GestionPersonne;
//    protected $xmlModelePersonne;
//    protected $Test;
//    protected $Observation;
//    protected $TypeMagasin;


    public function Personnes(){
        return $this->hasMany('Ciss\Personne', 'IDMagasin', 'IDMagasin');
    }

    public function Gestionnaire(){
        return $this->hasOne('Ciss\Gestionnaire', 'IDGestionnaire', 'IDGestionnaire');
    }
    
    /**
     * @return mixed
     */
    public function getIDMagasin()
    {
        return $this->IDMagasin;
    }

    /**
     * @param mixed $IDMagasin
     */
    public function setIDMagasin($IDMagasin)
    {
        $this->IDMagasin = $IDMagasin;
    }

    /**
     * @return mixed
     */
    public function getIDCodeNAF()
    {
        return $this->IDCodeNAF;
    }

    /**
     * @param mixed $IDCodeNAF
     */
    public function setIDCodeNAF($IDCodeNAF)
    {
        $this->IDCodeNAF = $IDCodeNAF;
    }

    /**
     * @return mixed
     */
    public function getIDActivite()
    {
        return $this->IDActivite;
    }

    /**
     * @param mixed $IDActivite
     */
    public function setIDActivite($IDActivite)
    {
        $this->IDActivite = $IDActivite;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param mixed $Image
     */
    public function setImage($Image)
    {
        $this->Image = $Image;
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
    public function getTVAIntraCommunautaire()
    {
        return $this->TVAIntraCommunautaire;
    }

    /**
     * @param mixed $TVAIntraCommunautaire
     */
    public function setTVAIntraCommunautaire($TVAIntraCommunautaire)
    {
        $this->TVAIntraCommunautaire = $TVAIntraCommunautaire;
    }

    /**
     * @return mixed
     */
    public function getMontantMaximumAchat()
    {
        return $this->MontantMaximumAchat;
    }

    /**
     * @param mixed $MontantMaximumAchat
     */
    public function setMontantMaximumAchat($MontantMaximumAchat)
    {
        $this->MontantMaximumAchat = $MontantMaximumAchat;
    }

    /**
     * @return mixed
     */
    public function getModeAffichageQuestion()
    {
        return $this->ModeAffichageQuestion;
    }

    /**
     * @param mixed $ModeAffichageQuestion
     */
    public function setModeAffichageQuestion($ModeAffichageQuestion)
    {
        $this->ModeAffichageQuestion = $ModeAffichageQuestion;
    }

    /**
     * @return mixed
     */
    public function getCodePays()
    {
        return $this->CodePays;
    }

    /**
     * @param mixed $CodePays
     */
    public function setCodePays($CodePays)
    {
        $this->CodePays = $CodePays;
    }

    /**
     * @return mixed
     */
    public function getLangue()
    {
        return $this->Langue;
    }

    /**
     * @param mixed $Langue
     */
    public function setLangue($Langue)
    {
        $this->Langue = $Langue;
    }

    /**
     * @return mixed
     */
    public function getTauxAcompte()
    {
        return $this->TauxAcompte;
    }

    /**
     * @param mixed $TauxAcompte
     */
    public function setTauxAcompte($TauxAcompte)
    {
        $this->TauxAcompte = $TauxAcompte;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->Statut;
    }

    /**
     * @param mixed $Statut
     */
    public function setStatut($Statut)
    {
        $this->Statut = $Statut;
    }

    /**
     * @return mixed
     */
    public function getNouvelIDMagasin()
    {
        return $this->NouvelIDMagasin;
    }

    /**
     * @param mixed $NouvelIDMagasin
     */
    public function setNouvelIDMagasin($NouvelIDMagasin)
    {
        $this->NouvelIDMagasin = $NouvelIDMagasin;
    }

    /**
     * @return mixed
     */
    public function getPrefixeCodeBarreOffre()
    {
        return $this->PrefixeCodeBarreOffre;
    }

    /**
     * @param mixed $PrefixeCodeBarreOffre
     */
    public function setPrefixeCodeBarreOffre($PrefixeCodeBarreOffre)
    {
        $this->PrefixeCodeBarreOffre = $PrefixeCodeBarreOffre;
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
    public function getGestionPersonne()
    {
        return $this->GestionPersonne;
    }

    /**
     * @param mixed $GestionPersonne
     */
    public function setGestionPersonne($GestionPersonne)
    {
        $this->GestionPersonne = $GestionPersonne;
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

    /**
     * @return mixed
     */
    public function getTest()
    {
        return $this->Test;
    }

    /**
     * @param mixed $Test
     */
    public function setTest($Test)
    {
        $this->Test = $Test;
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
    public function getTypeMagasin()
    {
        return $this->TypeMagasin;
    }

    /**
     * @param mixed $TypeMagasin
     */
    public function setTypeMagasin($TypeMagasin)
    {
        $this->TypeMagasin = $TypeMagasin;
    }
}