<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالی شویی | افزودن خدمات</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07e2714d93.js" crossorigin="anonymous"></script>

</head>
<body dir="rtl">
    <h1 class="center top-text" >خدمات</h1>
    <div class="big-box">
        <form action="" method = "post">
            <label for="title" class="center form-title">افزودن خدمات</label>
            <br>
            <br>
            <label for="carpetType"><i class="fa-solid fa-question"></i> نوع فرش جهت شست و شو:</label>
            <select name="carpetType" id="carpetType" style="
                padding: 1%;
                margin: 1%;
                width: 100%;
                vertical-align: right;
                background-color: #ffffff1f;
                border:none;
                border-radius: 15px;
                font-size: 1.1em;
            ">
                <option style="background-color:#bababa!important" value="ماشینی" >ماشینی</option>
                <option style="background-color:#bababa!important" value="دست باف">دست باف</option>
            </select>
            <br>
            <label for="price"><i class="fa-solid fa-dollar"></i> هزینه هر متر: </label>
            <input type="number" id="price" min="1000" max="100000000" name="price" required value="15000" />
            <br>
            <label for="description"><i class="fa-solid fa-message"></i> توضیح اضافه: </label>
            <textarea id="description" name="description" required ></textarea>
            <br>
            <br>
            <input type="submit" name="submit" value="افزودن خدمات شست و شو"/>
            <br>
            <br>
        </form>
    </div>
    
</body>
</html>