<?php

namespace Ryanprtma\MvcApp\Base;

use Ryanprtma\MvcApp\Config\Database;

abstract class Model
{
    protected \PDO $connection;

    public function __construct()
    {
        $this->connection = Database::getConnection();
    }
}