<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';
    if (Authentication :: check() && isset($_GET['id'])) {
        User :: toggleBookmark($_GET['id']);
        header("Location: product.php?id=".$_GET['id']);
    }
?>