<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';

    if (Authentication :: check()) {
        if (Authorization :: checkRole('admin')) {
            $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
            $sql = "SELECT * FROM users";
            $result = $dbc -> query( $sql );
            $users = $dbc -> fetchAll();
            $dbc -> close();
            include 'view/users.php';
        }
        else
        {
             header("Location: profile.php");
        }
    }
    else
    {
        header("Location: login.php");
    }
    
?>