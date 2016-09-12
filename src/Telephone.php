<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 12/09/16
 * Time: 15:52
 */

namespace Ciss;

/**
 * Class Telephone
 * @package Ciss
 */
class Telephone extends AbstractModel
{
    protected $primaryKey = 'IDTelephone';
    protected $table = 'telephone';

    /**
     * @return mixed
     */
    public function getIDTelephone()
    {
        return $this->IDTelephone;
    }

    /**
     * @param mixed $iDTelephone
     */
    public function setIDTelephone($iDTelephone)
    {
        $this->IDTelephone = $iDTelephone;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->Numero = $numero;
    }


}