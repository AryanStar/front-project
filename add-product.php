<?php

    include 'config.php';
    include 'lib/db.php';
    include 'utils/security.php';

    if (Authentication :: check()) {

        if (Authorization :: checkRole('admin')) {
            if ( isset ($_POST['submit']) ) {
                $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
                $q = "INSERT INTO product(id,carpetType,price,description) VALUES (?,?,?,?)";
                $result = $dbc -> query($q,NULL,$_POST['carpetType'],$_POST['price'],$_POST['description']);
                if($result){
                    echo '<!DOCTYPE html>
                    <html lang="fa">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>قالی شویی | افزودن خدمات</title>
                        <link href="css/main.css" rel="stylesheet">
                        
                    </head>
                    <body dir="rtl">
                    <h1 class="center top-text" >خدمات</h1>
                    <div class="big-box">
                            <p class="center done">خدمات با موفقیت افزوده شد</p>
                            <a href="add-product.php">
                            <button class="back-button">بازگشت به صفحه افزودن خدمات</button>
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
                        <title>قالی شویی | افزودن خدمات</title>
                        <link href="css/main.css" rel="stylesheet">
                        
                    </head>
                    <body dir="rtl">
                    <h1 class="center top-text" >خدمات</h1>
                    <div class="big-box">
                            <p class="center fail">مشکلی پیش آمده</p>
                            <a href="add-product.php">
                            <button class="back-button">بازگشت به صفحه افزودن خدمات</button>
                            </a>
                        </div>
                        
                    </body>
                    </html>';
                }
                $dbc -> close();
            }   
            else
            {
                include 'view/add-product.php';
            }
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