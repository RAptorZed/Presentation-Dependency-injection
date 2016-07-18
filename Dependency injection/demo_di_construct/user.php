<?php

class User {

    public function getAllUsers()
    {
        $db = new Db;
         return $db->query('SELECT * FROM users');
    }
}