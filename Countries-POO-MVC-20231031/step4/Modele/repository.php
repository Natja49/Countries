<?php

namespace App\Modele;

use PDO;

class Repository
{
    protected function connect()
        {
            return new \PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        }
    
}