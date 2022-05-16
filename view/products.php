<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالی شویی | خدمات </title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07e2714d93.js" crossorigin="anonymous"></script>

</head>

<body dir="rtl" class="grid-view">
    <?php include 'layout/header.php'; ?>
    <?php include 'layout/navigation.php'; ?>
    <div class="col-9">
    <h1 class="center top-text" >خدمات ما</h1>
    <div class="grid grid-4">
    <?php
        if( count( $products ) == 0 ){
            echo '<p>محصولی یافت نشد</p>';
        }
        else{
            foreach( $products as $product ){
                include 'template/product-card.php';
            }
        }
    ?>
    </div>
    </div>
    <?php include 'layout/footer.php'; ?>
</body>

</html>