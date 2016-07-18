<?php

include 'db.php';
include 'user.php';

$user = new User();
echo $user->getAllUsers();