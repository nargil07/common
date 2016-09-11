<?php

namespace Ciss;

use Illuminate\Database\Eloquent\Model;

class AbstractModel extends Model
{

    public $timestamps = true;

    public function getCreatedAtColumn()
    {
        return 'DateCreation';
    }

    public function getUpdatedAtColumn()
    {
        return 'DateModification';
    }

    public function setUpdatedAt($value)
    {
        return $this->{$this->getUpdatedAtColumn()} = $value;
    }

    public function setCreatedAt($value)
    {
        return $this->{$this->getCreatedAtColumn()} = $value;
    }

}
