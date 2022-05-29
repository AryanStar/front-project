<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';

    $userID = false;
    if (Authentication :: check()) {
        $userID = Authentication::uid();
    }
    else
    {
        $userID = false;
    }
    if ( isset ($_GET['id']) ) {
        $liked = User :: isLiked($_GET['id']);
        $bookmarked = User :: isBookmarked($_GET['id']);
        $hasItem = User :: hasItem($_GET['id']);
        
        $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
        $sql = "SELECT * FROM product WHERE status = 'active' AND id = ?";
        $result = $dbc -> query( $sql,$_GET['id'] );
        if ($dbc -> numRows() > 0){ 
            $product = $dbc -> fetchArray();
            include 'view/product.php';
        }
        $dbc -> close();
    }

?>