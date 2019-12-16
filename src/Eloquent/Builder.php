<?php

namespace Maksimer\ORM\Eloquent;


use Illuminate\Database\Query\Builder as EloquentBuilder;

/**
 * Builder Class
 *
 * @package Maksimer\ORM\Eloquent
 *
 * @since 1.0.0
 */
class Builder extends EloquentBuilder
{
    /**
     * Add an exists clause to the query.
     *
     * @param  EloquentBuilder $query
     * @param  string          $boolean
     * @param  bool            $not
     *
     * @return $this
     *
     * @since 1.0.0
     */
    public function addWhereExistsQuery(EloquentBuilder $query, $boolean = 'and', $not = false)
    {
        $type = $not ? 'NotExists' : 'Exists';

        $this->wheres[] = compact('type', 'query', 'boolean');

        $this->addBinding($query->getBindings(), 'where');

        return $this;
    }
}
