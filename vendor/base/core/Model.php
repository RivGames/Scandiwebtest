<?php

namespace base\core;

use base\core\Db;

abstract class Model
{
    protected object $db;
    protected $table;
    protected $pk = 'id';

    public function __construct()
    {
        $this->db = Db::getInstance();
    }
    public function query($sql)
    {
        return $this->db->execute($sql);
    }

    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table} ";
        return $this->db->query($sql);
    }
}