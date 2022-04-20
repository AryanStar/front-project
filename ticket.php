<?php
    include  'config.php';
    include 'lib/db.php';
    include 'utils/security.php';

    if (Authentication :: check()) {
        if (!isset( $_POST['submit'])) {
            include 'view/ticket.php';
        }
        else
        {
    
            $dbc = new DB($dbHost, $dbUser, $dbPassword, $dbName);
            $q = "INSERT INTO tickets (id, title, section,message) VALUES (?,?,?,?)";
            $result = $dbc -> query($q,null,$_POST['title'],$_POST['section'],$_POST['message']);
            if($result){
                echo '<!DOCTYPE html>
                <html lang="fa">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>قالی شویی | تیکت </title>
                    <link href="css/main.css" rel="stylesheet">
                    
                </head>
                <body dir="rtl">
                    <h1 class="center top-text" >سیستم تیکت</h1>
                    <div class="big-box">
                        <p class="center" style="color:green;font-size:3em;">تیکت ارسال شد!</p>
                        <a href="ticket.php">
                        <button style="width:100%;padding:2%;font-size:1em;border:none;border-radius:40px;background-color:#2C394B">بازگشت به فرم ارسال تیکت</button>
                        </a>
                    </div>
                    
                </body>
                </html>';
            } else{
                echo "دستور با خطا مواجه شد";
            }
            $dbc -> close();
        }
    }
    else
    {
        header("Location: login.php");
    }
?>