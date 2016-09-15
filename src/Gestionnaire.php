<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 15/09/16
 * Time: 10:23
 */

namespace Ciss;


class Gestionnaire extends AbstractModel
{
    protected $table = "gestionnaire";
    protected $primaryKey = "IDGestionnaire";

//    protected $IDGestionnaire;
//    protected $IDSMSOperateurDefaut;
//    protected $IDEmailOperateurDefaut;
//    protected $RaisonSociale;
//    protected $SIRET;
//    protected $TVAIntracommunautaire;
//    protected $CodePays;
//    protected $Langue;
//    protected $CompteCaisse;
//    protected $CompteAttente;
//    protected $JournalCaisse;
//    protected $JournalRemise;
//    protected $NumeroEmetteur;
//    protected $ICS;
//    protected $AncienICS;
//    protected $Statut;
//    protected $TypeGestionnaire;
//    protected $DateCreation;
//    protected $DateModification;

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
    public function getIDSMSOperateurDefaut()
    {
        return $this->IDSMSOperateurDefaut;
    }

    /**
     * @param mixed $IDSMSOperateurDefaut
     */
    public function setIDSMSOperateurDefaut($IDSMSOperateurDefaut)
    {
        $this->IDSMSOperateurDefaut = $IDSMSOperateurDefaut;
    }

    /**
     * @return mixed
     */
    public function getIDEmailOperateurDefaut()
    {
        return $this->IDEmailOperateurDefaut;
    }

    /**
     * @param mixed $IDEmailOperateurDefaut
     */
    public function setIDEmailOperateurDefaut($IDEmailOperateurDefaut)
    {
        $this->IDEmailOperateurDefaut = $IDEmailOperateurDefaut;
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
    public function getCompteCaisse()
    {
        return $this->CompteCaisse;
    }

    /**
     * @param mixed $CompteCaisse
     */
    public function setCompteCaisse($CompteCaisse)
    {
        $this->CompteCaisse = $CompteCaisse;
    }

    /**
     * @return mixed
     */
    public function getCompteAttente()
    {
        return $this->CompteAttente;
    }

    /**
     * @param mixed $CompteAttente
     */
    public function setCompteAttente($CompteAttente)
    {
        $this->CompteAttente = $CompteAttente;
    }

    /**
     * @return mixed
     */
    public function getJournalCaisse()
    {
        return $this->JournalCaisse;
    }

    /**
     * @param mixed $JournalCaisse
     */
    public function setJournalCaisse($JournalCaisse)
    {
        $this->JournalCaisse = $JournalCaisse;
    }

    /**
     * @return mixed
     */
    public function getJournalRemise()
    {
        return $this->JournalRemise;
    }

    /**
     * @param mixed $JournalRemise
     */
    public function setJournalRemise($JournalRemise)
    {
        $this->JournalRemise = $JournalRemise;
    }

    /**
     * @return mixed
     */
    public function getNumeroEmetteur()
    {
        return $this->NumeroEmetteur;
    }

    /**
     * @param mixed $NumeroEmetteur
     */
    public function setNumeroEmetteur($NumeroEmetteur)
    {
        $this->NumeroEmetteur = $NumeroEmetteur;
    }

    /**
     * @return mixed
     */
    public function getICS()
    {
        return $this->ICS;
    }

    /**
     * @param mixed $ICS
     */
    public function setICS($ICS)
    {
        $this->ICS = $ICS;
    }

    /**
     * @return mixed
     */
    public function getAncienICS()
    {
        return $this->AncienICS;
    }

    /**
     * @param mixed $AncienICS
     */
    public function setAncienICS($AncienICS)
    {
        $this->AncienICS = $AncienICS;
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
    public function getTypeGestionnaire()
    {
        return $this->TypeGestionnaire;
    }

    /**
     * @param mixed $TypeGestionnaire
     */
    public function setTypeGestionnaire($TypeGestionnaire)
    {
        $this->TypeGestionnaire = $TypeGestionnaire;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->DateCreation;
    }

    /**
     * @param mixed $DateCreation
     */
    public function setDateCreation($DateCreation)
    {
        $this->DateCreation = $DateCreation;
    }

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->DateModification;
    }

    /**
     * @param mixed $DateModification
     */
    public function setDateModification($DateModification)
    {
        $this->DateModification = $DateModification;
    }


}