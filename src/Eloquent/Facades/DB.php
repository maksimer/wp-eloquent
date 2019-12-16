<?php

namespace Maksimer\ORM\Eloquent\Facades;

use Illuminate\Support\Facades\Facade;
use Maksimer\ORM\Eloquent\Database;


/**
 * @see \Illuminate\Database\DatabaseManager
 * @see \Illuminate\Database\Connection
 *
 * @since 1.0.0
 */
class DB extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @since 1.0.0
     */
    protected static function getFacadeAccessor()
    {
        return Database::instance();
    }
}
