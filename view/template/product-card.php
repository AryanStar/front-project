    
    
    <article class="card outlined">
    <img class="full-img" src="images/<?php echo $product['img']; ?>">
        <div class="card-body">
            <h3 class="card-title">
                <a href="product-details.php?id=<?php echo $product['id']; ?>">
                نوع فرش: <?php echo $product['carpetType']; ?>
                </a>
            </h3>
            <p>قیمت: <?php echo $product['price']; ?> تومان</p>
            توضیحات: <?php echo $product['description']; ?>
            <form action="product.php" method = "get">
                <input type="text" id="id" name="id"  value="<?php if (isset($product['id'])) echo $product['id']?>" hidden />
                <input type="submit"  class="buy" value="ثبت سفارش"/>
            </form>
        </div>
    </article>
