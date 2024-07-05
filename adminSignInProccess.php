<?php

    include "connection.php";;

    $password = $_POST['psw'];
    $email = $_POST['em'];

    $adminRs = Database::search("SELECT * FROM `admin` WHERE `email` = '" . $email . "' AND `password` = '". $password ."' ");

    $row = $adminRs->num_rows;

    if ($row > 0) {
        echo 'success';
    } else {
        echo 'Invalid Password';
    }

?>