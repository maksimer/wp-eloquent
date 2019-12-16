<?php

namespace Maksimer\ORM\WP;


use Maksimer\ORM\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'ID';
    protected $timestamp = false;

    public function meta()
    {
        return $this->hasMany('Maksimer\ORM\WP\UserMeta', 'user_id');
    }
}
