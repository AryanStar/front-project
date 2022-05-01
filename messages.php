<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';

    if (Authentication :: check()) {
        if (Authorization :: checkRole('admin')) {
            $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
            $sql = "SELECT * FROM messages";
            $result = $dbc -> query( $sql );
            $messages = $dbc -> fetchAll();
            $dbc -> close();
            include 'view/messages.php';
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