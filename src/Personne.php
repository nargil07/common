<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 12/09/16
 * Time: 16:19
 */

namespace Ciss;

class Personne extends AbstractModel
{
    protected $table = "personne";
    protected $primaryKey = "IDPersonne";

//    private $IDPersonne;
//    private $IDSociete;
//    private $IDFamille;
//    private $ARenseigner;
//    private $OffreParMail;
//    private $MotDePasse;
//    private $Prenom;
//    private $Nom;
//    private $DateNaissance;
//    private $Civilite;
//    private $Sexe;
//    private $Statut;
//    private $AdresseA;
//    private $AdresseB;
//    private $AdresseC;
//    private $CodePostal;
//    private $Ville;
//    private $Pays;
//    private $Latitude;
//    private $Longitude;
//    private $Exactitude;
//    private $DistanceACalculer;
//    private $NPAI;
//    private $Telephone;
//    private $Mobile;
//    private $Mail;
//    private $MailStatut;
//    private $Test;


    public function Groupe(){
        return $this->belongsToMany('Ciss\Groupe', 'estpartagepar', 'IDPersonne', 'IDGroupe');
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
    public function getIDSociete()
    {
        return $this->IDSociete;
    }

    /**
     * @param mixed $IDSociete
     */
    public function setIDSociete($IDSociete)
    {
        $this->IDSociete = $IDSociete;
    }

    /**
     * @return mixed
     */
    public function getIDFamille()
    {
        return $this->IDFamille;
    }

    /**
     * @param mixed $IDFamille
     */
    public function setIDFamille($IDFamille)
    {
        $this->IDFamille = $IDFamille;
    }

    /**
     * @return mixed
     */
    public function getARenseigner()
    {
        return $this->ARenseigner;
    }

    /**
     * @param mixed $ARenseigner
     */
    public function setARenseigner($ARenseigner)
    {
        $this->ARenseigner = $ARenseigner;
    }

    /**
     * @return mixed
     */
    public function getOffreParMail()
    {
        return $this->OffreParMail;
    }

    /**
     * @param mixed $OffreParMail
     */
    public function setOffreParMail($OffreParMail)
    {
        $this->OffreParMail = $OffreParMail;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->MotDePasse;
    }

    /**
     * @param mixed $MotDePasse
     */
    public function setMotDePasse($MotDePasse)
    {
        $this->MotDePasse = $MotDePasse;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param mixed $Prenom
     */
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }

    /**
     * @param mixed $DateNaissance
     */
    public function setDateNaissance($DateNaissance)
    {
        $this->DateNaissance = $DateNaissance;
    }

    /**
     * @return mixed
     */
    public function getCivilite()
    {
        return $this->Civilite;
    }

    /**
     * @param mixed $Civilite
     */
    public function setCivilite($Civilite)
    {
        $this->Civilite = $Civilite;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->Sexe;
    }

    /**
     * @param mixed $Sexe
     */
    public function setSexe($Sexe)
    {
        $this->Sexe = $Sexe;
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

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->Pays;
    }

    /**
     * @param mixed $Pays
     */
    public function setPays($Pays)
    {
        $this->Pays = $Pays;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param mixed $Latitude
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param mixed $Longitude
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
    }

    /**
     * @return mixed
     */
    public function getExactitude()
    {
        return $this->Exactitude;
    }

    /**
     * @param mixed $Exactitude
     */
    public function setExactitude($Exactitude)
    {
        $this->Exactitude = $Exactitude;
    }

    /**
     * @return mixed
     */
    public function getDistanceACalculer()
    {
        return $this->DistanceACalculer;
    }

    /**
     * @param mixed $DistanceACalculer
     */
    public function setDistanceACalculer($DistanceACalculer)
    {
        $this->DistanceACalculer = $DistanceACalculer;
    }

    /**
     * @return mixed
     */
    public function getNPAI()
    {
        return $this->NPAI;
    }

    /**
     * @param mixed $NPAI
     */
    public function setNPAI($NPAI)
    {
        $this->NPAI = $NPAI;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * @param mixed $Telephone
     */
    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * @param mixed $Mobile
     */
    public function setMobile($Mobile)
    {
        $this->Mobile = $Mobile;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param mixed $Mail
     */
    public function setMail($Mail)
    {
        $this->Mail = $Mail;
    }

    /**
     * @return mixed
     */
    public function getMailStatut()
    {
        return $this->MailStatut;
    }

    /**
     * @param mixed $MailStatut
     */
    public function setMailStatut($MailStatut)
    {
        $this->MailStatut = $MailStatut;
    }

}