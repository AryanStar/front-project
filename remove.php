<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';
    if (Authentication :: check() && isset($_POST['id'])) {
        if (User :: hasItem($_POST['id'])) {
            User :: removeItem($_POST['id']);
            header("Location: product.php?id=".$_POST['id']);
        } else {
            header("Location: product.php?id=".$_POST['id']);
        }
    }
?>