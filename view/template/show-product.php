<tr>
    <td><?php echo $product['id']; ?></td>
    <td><?php echo $product['carpetType']; ?></td>
    <td><?php echo $product['price']; ?></td>
    <td><?php echo $product['description']; ?></td>
    <td>
        <a href="deleteProduct.php?id=<?php echo $product['id']; ?>" class="fa-solid fa-trash padding-right"></a>
    </td>
</tr>