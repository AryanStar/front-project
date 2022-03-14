<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالی شویی | ورود </title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07e2714d93.js" crossorigin="anonymous"></script>

</head>
<body dir="rtl">
    <h1 class="center top-text" >ورود</h1>
    <div class="big-box">
        <form action="" method = "post">
            <label for="title" class="center form-title">فرم ورود اعضا</label>
            <br>
            <br>
            
            <label for="username"><i class="fa-solid fa-user"></i> نام کاربری شما: </label>
            <input type="text" id="username" name="username" required />
            <br>
            <label for="password"><i class="fa-solid fa-lock"></i> رمز عبور شما: </label>
            <input type="password" id="password" name="password" required />
            <br>
            <input type="submit" name="submit" value="ورود"/>
            <br>
            <br>
            <a href="register.php">اكانت نداريد؟ ثبت نام كنيد</a>
        </form>
    </div>
    
</body>
</html>