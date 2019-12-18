<?php

namespace Maksimer\ORM\WP;


use Illuminate\Database\Eloquent\Relations\HasMany;
use Maksimer\ORM\Eloquent\Builder;
use Maksimer\ORM\Eloquent\Model;

/**
 * Class Post
 *
 * @package Maksimer\ORM\WP
 */
class Post extends Model
{
    protected $post_type = null;
    protected $primaryKey = 'ID';

    const CREATED_AT = 'post_date';
    const UPDATED_AT = 'post_modified';


    /**
     * Filter by post type
     *
     * @param Builder $query
     * @param string  $type
     *
     * @return Builder
     *
     * @since 1.0.0
     */
    public function scopeType($query, $type = 'post')
    {
        return $query->where('post_type', '=', $type);
    }


    /**
     * Filter by post status
     *
     * @param Builder $query
     * @param string  $status
     *
     * @return Builder
     *
     * @since 1.0.0
     */
    public function scopeStatus($query, $status = 'publish')
    {
        return $query->where('post_status', '=', $status);
    }


    /**
     * Filter by post author
     *
     * @param Builder $query
     * @param null    $author
     *
     * @return Builder
     *
     * @since 1.0.0
     */
    public function scopeAuthor($query, $author = null)
    {
        if ($author) {
            return $query->where('post_author', '=', $author);
        }

        return $query;
    }


    /**
     * Get comments from the post
     *
     * @return HasMany
     *
     * @since 1.0.0
     */
    public function comments()
    {
        return $this->hasMany('Maksimer\ORM\WP\Comment', 'comment_post_ID');
    }


    /**
     * Get meta fields from the post
     *
     * @return HasMany
     *
     * @since 1.0.0
     */
    public function meta()
    {
        return $this->hasMany('Maksimer\ORM\WP\PostMeta', 'post_id');
    }
}
