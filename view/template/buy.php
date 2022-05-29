<form action="buy.php" method = "post">
    <input type="text" id="id" name="id"  value="<?php if (isset($product['id'])) echo $product['id']?>" hidden />
    <input type="submit"  class="buy" value="افزودن به سبد خرید"/>
</form>