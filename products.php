<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';

    // if (Authentication :: check()) {

    $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
    $sql = "SELECT * FROM product WHERE status = 'active'
            ORDER BY id DESC
            LIMIT 15";
    $result = $dbc -> query( $sql );
    $products = $dbc -> fetchAll();
    $dbc -> close();

    include 'view/products.php';
    // }
    // else
    // {
    //     header("Location: login.php");
    // }
    
?>