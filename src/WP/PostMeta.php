<?php

namespace Maksimer\ORM\WP;


use Maksimer\ORM\Eloquent\Model;

class PostMeta extends Model
{
    protected $primaryKey = 'meta_id';

    public $timestamps    = false;

    public function getTable()
    {
        return $this->getConnection()->db->prefix . 'postmeta';
    }
}
