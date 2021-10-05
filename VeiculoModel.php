<?php

namespace App\Models;

use Core\DataBase;


class Veiculo {
    private $table = 'modelo';

    public function getAll(): array
    {
        $db = Database::getInstance();
        return $db->getList($this->table, "*");
    }  

    public function getBy(array $condition)
    {
        $db = Database::getInstance();
        return $db->getList($this->table, "*", $condition);
    }
}