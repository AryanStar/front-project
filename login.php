<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';
    if (Authentication :: check()) {
        header("Location: profile.php");
    }
    else
    {
        if ( isset ($_POST['submit']) ) {
            $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
            $sql = "SELECT * FROM users
                    WHERE username = ? AND password = ?";
            $result = $dbc -> query( $sql, $_POST['username'], $_POST['password'] );
            
            if ($dbc -> numRows() > 0){ 
                $user = $dbc -> fetchArray();
                $uid = $user['id'];
                Authentication :: login( $uid ); 
                header("Location: profile.php");
            }
            else{
                $login_message = "رمز عبور يا نام كاربري وارد شده صحيح نميباشد";
                include 'view/login.php';
            }
            $dbc -> close();
        }   
        else
        {
            include 'view/login.php';
        }
    }
?>