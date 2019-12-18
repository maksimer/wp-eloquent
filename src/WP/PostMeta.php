<?php

namespace Maksimer\ORM\WP;

use Maksimer\ORM\Eloquent\Model;


/**
 * Class PostMeta
 * @package Maksimer\ORM\WP
 *
 * @since 1.0.0
 */
class PostMeta extends Model
{
    protected $primaryKey = 'meta_id';
    public $timestamps = false;


    /**
     * @return string
     *
     * @since 1.0.0
     */
    public function getTable()
    {
        return $this->getConnection()->db->prefix . 'postmeta';
    }
}
