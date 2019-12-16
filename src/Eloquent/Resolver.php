<?php

namespace Maksimer\ORM\Eloquent;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\ConnectionResolverInterface;

/**
 * Class Resolver
 * @package Maksimer\ORM\Eloquent
 *
 * @since 1.0.0
 */
class Resolver implements ConnectionResolverInterface
{
    /**
     * Get a database connection instance.
     *
     * @param string $name
     *
     * @return ConnectionInterface
     *
     * @since 1.0.0
     */
    public function connection($name = null)
    {
        return Database::instance();
    }


    /**
     * Get the default connection name.
     *
     * @return string
     *
     * @since 1.0.0
     */
    public function getDefaultConnection()
    {
        return Database::instance()->getName();
    }


    /**
     * Set the default connection name.
     *
     * @param string $name
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setDefaultConnection($name)
    {
        // TODO: Implement setDefaultConnection() method.
    }
}
