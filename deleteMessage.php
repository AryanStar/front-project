<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';

    if (Authentication :: check()) {
        if (Authorization :: checkRole('admin')) {
            if (isset($_GET['id'])) {
                $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
                $sql = "UPDATE messages SET status = 'deleted' WHERE id = ?";
                $result = $dbc -> query( $sql ,$_GET['id']);
                $dbc -> close();
            }
            $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
            $sql = "SELECT * FROM messages WHERE status = 'active' ";
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