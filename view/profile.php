<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالی شویی | پروفایل </title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07e2714d93.js" crossorigin="anonymous"></script>

</head>


<body dir="rtl" class="grid-view">
    <?php include 'layout/header.php'; ?>
    <?php include 'layout/navigation.php'; ?>
    <div class="col-9">
    <div class="big-box">
        <form action="" method = "post">
            <label for="title" class="center form-title">پروفایل شما</label>
            <br>
            <br>
            <label for="username"><i class="fa-solid fa-user"></i>  نام کاربری:  <?php if (isset($row['username'])) echo $row['username']?></label>
            <br>
            <label for="name"><i class="fa-solid fa-info"></i>  نام:  <?php if (isset($row['name'])) echo $row['name']?></label>
            <br>
            <!-- <label for="password"><i class="fa-solid fa-lock"></i> رمز عبور: </label>
            <input type="password" id="password" name="password" required value="<?php if (isset($row['password'])) echo $row['password']?>" /> -->
            <label for="gender"><i class="fa-solid fa-question"></i> جنسیت : <?php if (isset($row['gender'])) echo $row['gender']?></label>
            <br>
            <label for="role"><i class="fa-solid fa-shield"></i>  سطح دسترسي شما:  <?php if (isset($row['role'])) echo $row['role']?></label>
            <br>
            <input type="submit" name="submit" value="خروج از حساب كاربري"/>

            <br>
        </form>
    </div>
    </div>
    <?php include 'layout/footer.php'; ?>
</body>

</html>