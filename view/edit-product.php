<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالی شویی | ویرایش خدمات</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07e2714d93.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/mfte9n79vnucnsgjtir9daj0l2jln33q776c78xq3tko2mp1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body dir="rtl">
    <h1 class="center top-text" >خدمات</h1>
    <div class="big-box">
        <form action="" method = "post">
            <label for="title" class="center form-title">ویرایش خدمات</label>
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
            <?php
                
                
                if ( isset($row['carpetType']) ) {
                    if ($row['carpetType'] == "ماشینی") {
                        echo '
                        <option style="background-color:#bababa!important" value="ماشینی" >ماشینی</option>
                        <option style="background-color:#bababa!important" value="دست باف">دست باف</option>
                        ';
                    } else {
                        echo '
                        <option style="background-color:#bababa!important" value="دست باف">دست باف</option>
                        <option style="background-color:#bababa!important" value="ماشینی" >ماشینی</option>
                        ';
                    }
                } 
                else {
                    echo '
                    <option style="background-color:#bababa!important" value="ماشینی" >ماشینی</option>
                    <option style="background-color:#bababa!important" value="دست باف">دست باف</option>
                    ';
                }
                
                ?>

            </select>
            <br>
            <label for="price"><i class="fa-solid fa-dollar"></i> هزینه هر متر: </label>
            <input type="number" id="price" min="1000" max="100000000" name="price" required value="<?php if (isset($row['price'])) echo $row['price']?>" />
            <br>
            <label for="description"><i class="fa-solid fa-message"></i> توضیح اضافه: </label>
            <textarea id="description" name="description"  ><?php if (isset($row['description'])) echo $row['description']?></textarea>
            <br>
            <input type="submit" name="submit" value="ثبت تغییرات"/>
        </form>
    </div>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
</body>
</html>