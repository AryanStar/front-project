<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالی شویی | ثبت نام </title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07e2714d93.js" crossorigin="anonymous"></script>

</head>
<body dir="rtl">
    <h1 class="center top-text" >ثبت نام</h1>
    <div class="big-box">
        <form action="" method = "post">
            <label for="title" class="center form-title">فرم ثبت نام</label>
            <br>
            <br>
            <label for="username"><i class="fa-solid fa-user"></i> نام کاربری شما: </label>
            <input type="text" id="username" name="username"  required />
            <br>
            <label for="name"><i class="fa-solid fa-info"></i> نام شما: </label>
            <input type="text" id="name" name="name"  required />
            <br>
            <label for="password"><i class="fa-solid fa-lock"></i> رمز عبور شما: </label>
            <input type="password" id="password" name="password"  required />
            <br>
            <label for="gender"><i class="fa-solid fa-question"></i> جنسيت: </label>
            <input type="radio" id="male" name="gender"  value="مرد" checked />
            <label for="male">مرد</label>
            <input type="radio" id="female" name="gender"  value="زن" />
            <label for="female">زن</label>
            <br>
            <input type="submit" name="submit" value="ثبت نام"/>
            <br>
            <br>
            <a href="login.php">اكانت داريد؟ وارد شويد</a>
        </form>
    </div>
    
</body>
</html>