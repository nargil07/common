<?php
/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 07/09/16
 * Time: 10:03
 */
namespace Ciss;

use Illuminate\Contracts\Auth\Authenticatable;

class Utilisateur extends AbstractModel implements Authenticatable
{
    protected $table = 'utilisateur';
    public $primaryKey = "IDUtilisateur";
    protected $hidden = [
        'MotDePasse',
        'MotDePasseTemporaire',
        'MD5',
        'ReponseQuestionSecrete'
    ];
    protected $guarded = [];

    public function getIDUtilisateur()
    {
        return $this->IDUtilisateur;
    }

    public function setIDUtilisateur($value)
    {
        $this->IDUtilisateur = $value;
    }

    public function getIDGestionnaire()
    {
        return $this->IDGestionnaire;
    }

    public function setIDGestionnaire($value)
    {
        $this->IDGestionnaire = $value;
    }

    public function getIDFournisseur()
    {
        return $this->IDFournisseur;
    }

    public function setIDFournisseur($value)
    {
        $this->IDFournisseur = $value;
    }

    public function getIDPersonne()
    {
        return $this->IDPersonne;
    }

    public function setIDPersonne($value)
    {
        $this->IDPersonne = $value;
    }

    public function getIDCissClient()
    {
        return $this->IDCissClient;
    }

    public function setIDCissClient($value)
    {
        $this->IDCissClient = $value;
    }

    public function getLangue()
    {
        return $this->Langue;
    }

    public function setLangue($value)
    {
        $this->Langue = $value;
    }

    public function getLateralite()
    {
        return $this->Lateralite;
    }

    public function setLateralite($value)
    {
        $this->Langue = Lateralite;
    }

    public function getAvatar()
    {
        return $this->Avatar;
    }

    public function setAvatar($value)
    {
        $this->Langue = Avatar;
    }

    public function getLogin()
    {
        return $this->Mail;
    }

    public function setLogin($value)
    {
        $this->Mail = $value;
    }

    public function getMotdepasse()
    {
        return $this->MotDePasse;
    }

    public function setMotdepasse($value)
    {
        $this->MotDePasse = $value;
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


    public function AdresseMail()
    {
        return $this->hasMany('Ciss\AdresseMail', 'IDUtilisateur');
    }

    public function Adresse()
    {
        return $this->hasMany('Ciss\Adresse', 'IDUtilisateur');
    }

    public function Personne(){
        return $this->hasOne('Ciss\Personne', 'IDUtilisateur');
    }


    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return "login";
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        $this->login;
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        $this->password;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return null;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
    }
}
