<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';

    if (Authentication :: check()) {
        if (Authorization :: checkRole('admin')) {
            if (isset($_GET['user'])) {
                $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
                $sql = "UPDATE users SET status = 'deleted' WHERE id = ?";
                $result = $dbc -> query( $sql ,$_GET['user']);
                $dbc -> close();
            }
            $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
            $sql = "SELECT * FROM users WHERE status = 'active' ";
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