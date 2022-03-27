<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالی شویی | تیکت </title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07e2714d93.js" crossorigin="anonymous"></script>

</head>
<body dir="rtl">
    <h1 class="center top-text" >سیستم تیکت</h1>
    <div class="big-box">
        <form action="" method = "post">
            <label for="form-title" class="center form-title">فرم ارسال تیکت</label>
            <br>
            <br>
            <label for="title"><i class="fa-solid fa-info"></i> موضوع: </label>
            <input type="text" id="title" name="title" required />
            <br>
            <label for="section">بخش مربوطه:</label>
            <br>
            <select name="section" id="section" style="
                padding: 1%;
                margin: 1%;
                width: 100%;
                vertical-align: right;
                background-color: #ffffff1f;
                border:none;
                border-radius: 15px;
                font-size: 1.1em;
            ">
                <option style="background-color:#bababa!important" value="عمومی" >عمومی</option>
                <option style="background-color:#bababa!important" value="مالی">مالی</option>
                <option style="background-color:#bababa!important" value="پشتیبانی">پشتیبانی</option>
                <option style="background-color:#bababa!important" value="سایر">سایر</option>
            </select>
            <br>
            <label for="message"><i class="fa-solid fa-message"></i> توضیح شما: </label>
            <textarea id="message" name="message" required ></textarea>
            <input type="submit" name="submit" value="ارسال"/>
        </form>
    </div>
</body>
</html>