<tr>
    <td><?php echo $user['name']; ?></td>
    <td><?php echo $user['username']; ?></td>
    <td><?php echo $user['gender']; ?></td>
    <td><?php echo $user['role']; ?></td>
    <td>
        <a href="editUser.php?user=<?php echo $user['id']; ?>" class="fa-solid fa-edit"></a>
        <a href="deleteUser.php?user=<?php echo $user['id']; ?>" class="fa-solid fa-trash padding-right"></a>
        
    </td>
</tr>