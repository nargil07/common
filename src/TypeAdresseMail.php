<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 09/09/16
 * Time: 10:52
 */

namespace Ciss;


class TypeAdresseMail extends AbstractModel
{
    protected $primaryKey = "IDTypeAdresseMail";
    protected $table = "cfg_typeadressemail";

    public $timestamps = false;

    public function getIDTypeAdresseMail()
    {
        return $this->IDTypeAdresseMail;
    }

    public function setIDTypeAdresseMail($value)
    {
        $this->IDTypeAdresseMail = $value;
    }

    public function getLibelle(){
        return $this->Libelle;
    }

    public function setLibelle($value){
        $this->Libelle = $value;
    }
}