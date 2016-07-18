<?php

include 'db.php';
include 'user.php';

$db = new Db();
$user = new User($db);
echo $user->getAllUsers();