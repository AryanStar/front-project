<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالی شویی | لیست کاربران</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07e2714d93.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/mfte9n79vnucnsgjtir9daj0l2jln33q776c78xq3tko2mp1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body dir="rtl" class="grid-view">
    <?php include 'layout/header.php'; ?>
    <?php include 'layout/navigation.php'; ?>
    <div class="col-9">
        <h1 class="center top-text" >لیست کاربران</h1>
        <div class="box">
            <table class="datatable">
                <thead>
                    <tr>
                        <th>نام</th>
                        <th>نام کاربری</th>
                        <th>جنسیت</th>
                        <th>نقش</th>
                        <th>اعمال</th>
                    </tr>
                </thead>
                <tbody>  
                    <?php
                        foreach( $users as $user ){
                            include 'template/show-user.php';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <br/>
    </div>
    <?php include 'layout/footer.php'; ?>
</body>
</html>