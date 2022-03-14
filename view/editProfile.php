<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالی شویی | ویرایش </title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07e2714d93.js" crossorigin="anonymous"></script>

</head>
<body dir="rtl">
    <h1 class="center top-text" >ویرایش</h1>
    <div class="big-box">
        <form action="" method = "post">
            <label for="title" class="center form-title">فرم ویرایشگر</label>
            <br>
            <br>
            <label for="username"><i class="fa-solid fa-user"></i> نام کاربری جدید: </label>
            <input type="text" id="username" name="username" required  value="<?php if (isset($row['username'])) echo $row['username']?>" />
            <br>
            <label for="name"><i class="fa-solid fa-info"></i> نام جدید: </label>
            <input type="text" id="name" name="name" required value="<?php if (isset($row['name'])) echo $row['name']?>" />
            <br>
            <label for="password"><i class="fa-solid fa-lock"></i> رمز عبور جدید: </label>
            <input type="password" id="password" name="password" required value="<?php if (isset($row['password'])) echo $row['password']?>" />
            <label for="gender"><i class="fa-solid fa-question"></i> جنسيت: </label>
            <input type="radio" id="male" name="gender"  value="مرد" <?php if ( isset($row['gender']) && $row['gender'] == "مرد" ) echo 'checked'?> />
            <label for="male">مرد</label>
            <input type="radio" id="female" name="gender"  value="زن" <?php if ( isset($row['gender']) && $row['gender'] == "زن" ) echo 'checked'?> />
            <label for="female">زن</label>
            <br>
            <input type="submit" name="submit" value="ویرایش"/>
        </form>
    </div>
    
</body>
</html>