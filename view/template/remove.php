<form action="remove.php" method = "post">
    <input type="text" id="id" name="id"  value="<?php if (isset($product['id'])) echo $product['id']?>" hidden />
    <input type="submit"  class="remove" value="حذف از سبد خرید"/>
</form>