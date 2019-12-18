<?php

namespace Maksimer\ORM\WP;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Maksimer\ORM\Eloquent\Model;


/**
 * Class Comment
 * @package Maksimer\ORM\WP
 *
 * @since 1.0.0
 */
class Comment extends Model
{
    protected $primaryKey = 'comment_ID';


    /**
     * Post relation for a comment
     *
     * @return HasOne
     *
     * @since 1.0.0
     */
    public function post()
    {
        return $this->hasOne('Maksimer\ORM\WP\Post');
    }
}
