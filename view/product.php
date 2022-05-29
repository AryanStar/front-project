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
    <div class="col-12">
        <div class="grid-view">
            <div class="col-5"></div>
            <div class="col-2">
                <article class="card outlined">
                    <img class="full-img" src="images/<?php echo $product['img']; ?>">
                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="product-details.php?id=<?php echo $product['id']; ?>">
                            نوع فرش: <?php echo $product['carpetType']; ?>
                            </a>
                        </h3>
                        <?php
                            if ($userID) {
                                if ($liked) { echo '<a href="like.php?id='.$product['id'].'"><i class="fa fa-heart like-button" aria-hidden="true"></i></a>'; } else { echo '<a href="like.php?id='.$product['id'].'"><i class="fa fa-heart-o like-button" aria-hidden="true"></i></a>';}; 
                                if ($bookmarked) { echo '<a href="bookmark.php?id='.$product['id'].'"><i class="fa fa-bookmark bookmark-button" aria-hidden="true"></i></a>'; } else { echo '<a href="bookmark.php?id='.$product['id'].'"><i class="fa fa-bookmark-o bookmark-button" aria-hidden="true"></i></a>';};
                            }
                        ?>

                        <p>قیمت: <?php echo number_format($product['price']); ?> تومان</p>
                        توضیحات: <?php echo $product['description']; ?>

                        <?php
                            if ($hasItem) {
                                include 'template/remove.php';
                            } else {
                                include 'template/buy.php'; 
                            }

                        ?>

                    </div>
                </article>
            </div>
            <div class="col-5"></div>
            

        </div>
    </div>
    <?php include 'layout/footer.php'; ?>
</body>

</html>