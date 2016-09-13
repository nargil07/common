<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 13/09/16
 * Time: 14:10
 */

namespace Ciss;


class EstPartagePar extends AbstractModel
{
    protected $table = "estpartagepar";
    protected $primaryKey = "IDEstPartagePar";

//    private $IDEstPartagePar;
//    private $IDGroupe;
//    private $IDPersonne;
//    private $AccepteSMS;
//    private $AccepteMail;
//    private $AccepteCourrier;
//    private $AcceptePush;
//    private $AccepteSMSPartenaire;
//    private $AccepteMailPartenaire;
//    private $AccepteCourrierPartenaire;
//    private $ChiffreAffaire;
//    private $NombrePassageTotal;
//    private $Notes;
//    private $ARecalculer;
//    private $DateDernierAchat;

    public function Groupes(){
        return $this->hasMany('Ciss\Groupe', 'IDGroupe', 'IDGroupe');
    }

    public function Personnes(){
        return $this->hasMany('Ciss\Personne', 'IDPersonne', 'IDPersonne');
    }

    /**
     * @return mixed
     */
    public function getDateDernierAchat()
    {
        return $this->DateDernierAchat;
    }

    /**
     * @param mixed $DateDernierAchat
     */
    public function setDateDernierAchat($DateDernierAchat)
    {
        $this->DateDernierAchat = $DateDernierAchat;
    }

    /**
     * @return mixed
     */
    public function getIDEstPartagePar()
    {
        return $this->IDEstPartagePar;
    }

    /**
     * @param mixed $IDEstPartagePar
     */
    public function setIDEstPartagePar($IDEstPartagePar)
    {
        $this->IDEstPartagePar = $IDEstPartagePar;
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
    public function getIDPersonne()
    {
        return $this->IDPersonne;
    }

    /**
     * @param mixed $IDPersonne
     */
    public function setIDPersonne($IDPersonne)
    {
        $this->IDPersonne = $IDPersonne;
    }

    /**
     * @return mixed
     */
    public function getAccepteSMS()
    {
        return $this->AccepteSMS;
    }

    /**
     * @param mixed $AccepteSMS
     */
    public function setAccepteSMS($AccepteSMS)
    {
        $this->AccepteSMS = $AccepteSMS;
    }

    /**
     * @return mixed
     */
    public function getAccepteMail()
    {
        return $this->AccepteMail;
    }

    /**
     * @param mixed $AccepteMail
     */
    public function setAccepteMail($AccepteMail)
    {
        $this->AccepteMail = $AccepteMail;
    }

    /**
     * @return mixed
     */
    public function getAccepteCourrier()
    {
        return $this->AccepteCourrier;
    }

    /**
     * @param mixed $AccepteCourrier
     */
    public function setAccepteCourrier($AccepteCourrier)
    {
        $this->AccepteCourrier = $AccepteCourrier;
    }

    /**
     * @return mixed
     */
    public function getAcceptePush()
    {
        return $this->AcceptePush;
    }

    /**
     * @param mixed $AcceptePush
     */
    public function setAcceptePush($AcceptePush)
    {
        $this->AcceptePush = $AcceptePush;
    }

    /**
     * @return mixed
     */
    public function getAccepteSMSPartenaire()
    {
        return $this->AccepteSMSPartenaire;
    }

    /**
     * @param mixed $AccepteSMSPartenaire
     */
    public function setAccepteSMSPartenaire($AccepteSMSPartenaire)
    {
        $this->AccepteSMSPartenaire = $AccepteSMSPartenaire;
    }

    /**
     * @return mixed
     */
    public function getAccepteMailPartenaire()
    {
        return $this->AccepteMailPartenaire;
    }

    /**
     * @param mixed $AccepteMailPartenaire
     */
    public function setAccepteMailPartenaire($AccepteMailPartenaire)
    {
        $this->AccepteMailPartenaire = $AccepteMailPartenaire;
    }

    /**
     * @return mixed
     */
    public function getAccepteCourrierPartenaire()
    {
        return $this->AccepteCourrierPartenaire;
    }

    /**
     * @param mixed $AccepteCourrierPartenaire
     */
    public function setAccepteCourrierPartenaire($AccepteCourrierPartenaire)
    {
        $this->AccepteCourrierPartenaire = $AccepteCourrierPartenaire;
    }

    /**
     * @return mixed
     */
    public function getChiffreAffaire()
    {
        return $this->ChiffreAffaire;
    }

    /**
     * @param mixed $ChiffreAffaire
     */
    public function setChiffreAffaire($ChiffreAffaire)
    {
        $this->ChiffreAffaire = $ChiffreAffaire;
    }

    /**
     * @return mixed
     */
    public function getNombrePassageTotal()
    {
        return $this->NombrePassageTotal;
    }

    /**
     * @param mixed $NombrePassageTotal
     */
    public function setNombrePassageTotal($NombrePassageTotal)
    {
        $this->NombrePassageTotal = $NombrePassageTotal;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param mixed $Notes
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
    }

    /**
     * @return mixed
     */
    public function getARecalculer()
    {
        return $this->ARecalculer;
    }

    /**
     * @param mixed $ARecalculer
     */
    public function setARecalculer($ARecalculer)
    {
        $this->ARecalculer = $ARecalculer;
    }
}