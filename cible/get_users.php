<?php

$bdd = new SQLite3('../database/users.db', SQLITE3_OPEN_READWRITE);
$response = $bdd->query('SELECT name FROM users where name LIKE "%'.$_POST['letters'].'%" ');

$liste_of_users=[];

while ($line = $response->fetchArray()) {
    array_push($liste_of_users,$line['name']);
}

print_r(json_encode($liste_of_users));
 ?>
