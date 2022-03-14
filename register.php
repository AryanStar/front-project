<?php

    include 'config.php';
    include 'lib/db.php';
    if ( isset ($_POST['submit']) ) {
        $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
        $q = "INSERT INTO users(id,username,password,name,gender) VALUES (?,?,?,?,?)";
        $result = $dbc -> query($q,NULL,$_POST['username'],$_POST['password'],$_POST['name'],$_POST['gender']);
        if($result){
            echo '<!DOCTYPE html>
            <html lang="fa">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>قالی شویی | ثبت نام </title>
                <link href="css/main.css" rel="stylesheet">
                
            </head>
            <body dir="rtl">
                <h1 class="center top-text" >ثبت نام</h1>
                <div class="big-box">
                    <p class="center" style="color:green;font-size:3em;">ثبت نام با موفقیت انجام شد</p>
                    <a href="register.php">
                    <button style="width:100%;padding:2%;font-size:1em;border:none;border-radius:40px;background-color:#2C394B">بازگشت به صفحه ثبت نام</button>
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
                <title>قالی شویی | ثبت نام </title>
                <link href="css/main.css" rel="stylesheet">
                
            </head>
            <body dir="rtl">
                <h1 class="center top-text" >ثبت نام</h1>
                <div class="big-box">
                    <p class="center" style="color:red;font-size:3em;">ثبت نام با موفقیت انجام نشد ، این نام کاربری قبلا استفاده شده</p>
                    <a href="register.php">
                        <button style="width:100%;padding:2%;font-size:1em;border:none;border-radius:40px;background-color:#2C394B">بازگشت به صفحه ثبت نام</button>
                    </a>
                </div>
                
            </body>
            </html>';
        }
        $dbc -> close();
    }   
    else
    {
        include 'view/register.php';
    }
?>