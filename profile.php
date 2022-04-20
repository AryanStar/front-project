<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';
    if (Authentication :: check()) {
        /*
        if (isset($_GET['id'])) {
            // Vaghti Ke Jolosh id = Bood
            $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
            $q = "SELECT * FROM users WHERE id = ? LIMIT 1";
            $result = $dbc -> query($q,$_GET['id']);
            $row = $result -> fetchArray();
            $dbc -> close();
            include 'view/profile.php';
        } 
        else
        {
            // Vaghti ke Jolosh id= Nabood
            include 'view/profile.php';
        }
        */

        if ( isset ($_POST['submit']) ) {
            Authentication :: logout();
            header("Location: login.php");
        }
        else
        {
            $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
            $q = "SELECT * FROM users WHERE id = ? LIMIT 1";
            $result = $dbc -> query($q,Authentication::uid());
            $row = $result -> fetchArray();
            include 'view/profile.php';
            $dbc -> close();
        }

    }
    else
    {
        header("Location: login.php");
    }

?>