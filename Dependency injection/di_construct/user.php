<?php

class User {

    protected $db;

    //  Db - проверка типов
    public function __construct(Db $db)
    {
        $this->db = $db;
    }

    public function getAllUsers()
    {
         return $this->db->query('SELECT * FROM users');
    }
}