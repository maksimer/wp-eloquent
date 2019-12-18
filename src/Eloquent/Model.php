<?php

namespace Maksimer\ORM\Eloquent;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Str;


/**
 * Model Class
 *
 * @package Maksimer\ORM\Framework
 */
abstract class Model extends Eloquent
{
    /**
     * @param array $attributes
     *
     * @since 1.0.0
     */
    public function __construct(array $attributes = [])
    {
        static::$resolver = new Resolver();

        parent::__construct($attributes);
    }


    /**
     * Get the database connection for the model.
     *
     * @return Database
     *
     * @since 1.0.0
     */
    public function getConnection()
    {
        return Database::instance();
    }

    /**
     * Get the table associated with the model.
     *
     * Append the WordPress table prefix with the table name if
     * no table name is provided
     *
     * @return string
     *
     * @since 1.0.0
     */
    public function getTable()
    {
        if (isset($this->table)) {
            return $this->table;
        }

        $table = str_replace('\\', '', Str::snake(Str::plural(class_basename($this))));

        return $this->getConnection()->db->prefix . $table;
    }


    /**
     * Get a new query builder instance for the connection.
     *
     * @return Builder
     *
     * @since 1.0.0
     */
    protected function newBaseQueryBuilder()
    {
        $connection = $this->getConnection();

        return new Builder(
            $connection, $connection->getQueryGrammar(), $connection->getPostProcessor()
        );
    }
}
