<?php

namespace Maksimer\ORM\WP;


use Maksimer\ORM\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'comment_ID';

    /**
     * Post relation for a comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function post()
    {
        return $this->hasOne('Maksimer\ORM\WP\Post');
    }
}
