<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';
    if (Authentication :: check() && isset($_POST['id'])) {
        if (User :: hasItem($_POST['id'])) {
            header("Location: product.php?id=".$_POST['id']);
        } else {
            User :: addItem($_POST['id']);
            header("Location: product.php?id=".$_POST['id']);
        }
    }
?>