<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';

    if (Authentication :: check()) {
        if (Authorization :: checkRole('admin')) {
            if (isset($_GET['id'])) {
                $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
                $sql = "UPDATE product SET status = 'deleted' WHERE id = ?";
                $result = $dbc -> query( $sql ,$_GET['id']);
                $dbc -> close();
            }
            $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
            $sql = "SELECT * FROM product WHERE status = 'active' ";
            $result = $dbc -> query( $sql );
            $products = $dbc -> fetchAll();
            $dbc -> close();
            include 'view/productlist.php';
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