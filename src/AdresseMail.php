<?php

namespace Ciss;


class AdresseMail extends AbstractModel
{
    protected $table = "adressemail";
    protected $primaryKey = "IDAdresseMail";

    public function getMail(){
        return $this->Mail;
    }

    public function setMail($value){
        $this->Mail = $value;
    }

    public function getIDTypeAdresseMail()
    {
        return $this->IDTypeAdresseMail;
    }

    public function setIDTypeAdresseMail($value)
    {
        $this->IDTypeAdresseMail = $value;
    }

    public function Utilisateur(){
        return $this->belongsTo('Ciss\Utilisateur', 'IDUtilisateur');
    }
}
