<?php

    include 'config.php';
    include 'lib/db.php';

    if ( isset ($_POST['submit']) ) {
        $id = $_GET['id'];
        $dbc = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
        $q = "UPDATE users SET
          username = '{$_POST['username']}',
          password = '{$_POST['password']}',
          name = '{$_POST['name']}'
          WHERE id = ". $id ."
            ";
        if(mysqli_query($dbc, $q)){
            echo '<!DOCTYPE html>
            <html lang="fa">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>قالی شویی | ویرایش </title>
                <link href="css/main.css" rel="stylesheet">
                
            </head>
            <body dir="rtl">
                <h1 class="center top-text" >ویرایش</h1>
                <div class="big-box">
                    <p class="center" style="color:green;font-size:3em;">ویرایش با موفقیت انجام شد</p>
                    <a href="login.php">
                        <button style="width:100%;padding:2%;font-size:1em;border:none;border-radius:40px;background-color:#2C394B">بازگشت به صفحه ورود </button>
                    </a>
                </div>
                
            </body>
            </html>';
        }
        else
        {
            echo '<!DOCTYPE html>
            <html lang="fa">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>قالی شویی | ویرایش </title>
                <link href="css/main.css" rel="stylesheet">
                
            </head>
            <body dir="rtl">
                <h1 class="center top-text" >ویرایش</h1>
                <div class="big-box">
                    <p class="center" style="color:red;font-size:3em;">ویرایش با موفقیت انجام نشد ، این آیدی قبلا استفاده نشده</p>
                    <a href="login.php">
                    <button style="width:100%;padding:2%;font-size:1em;border:none;border-radius:40px;background-color:#2C394B">بازگشت به صفحه ورود </button>
                    </a>
                </div>
                
            </body>
            </html>';
        }
        $dbc -> close();
    }   
    else
    {
        if (isset($_GET['id'])) {
            // Vaghti Ke Jolosh id = Bood
            $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
            $q = "SELECT * FROM users WHERE id = ? LIMIT 1";
            $result = $dbc -> query($q,$_GET['id']);
            $row = $result -> fetchArray();
            $dbc -> close();
            include 'view/editProfile.php';
        } 
        else
        {
            // Vaghti ke Jolosh id= Nabood
            include 'view/editProfile.php';
        }
    }

?>