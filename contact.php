<?php

    if (!isset( $_POST['submit'])) {
        include 'view/contact.php';
    }
    else
    {
        include  'config.php';
        include 'lib/db.php';
        $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
        $q = "INSERT INTO messages (id, sender, message) VALUES (?,?,?)";
        $result = $dbc -> query($q,null,$_POST['name'],$_POST['message']);
        if($result){
            echo '<!DOCTYPE html>
            <html lang="fa">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>قالی شویی | تماس با ما </title>
                <link href="css/main.css" rel="stylesheet">
                
            </head>
            <body dir="rtl">
                <h1 class="center top-text" >تماس با ما</h1>
                <div class="big-box">
                    <p class="center done">پیام شما با موفقیت ارسال شد</p>
                    <a href="contact.php">
                    <button class="back-button">بازگشت به قرم تماس با ما</button>
                    </a>
                </div>
                
            </body>
            </html>';
        } else{
            echo "دستور با خطا مواجه شد";
        }
        $dbc -> close();
    }
    
?>