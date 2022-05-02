<tr>
    <td><?php echo $message['id']; ?></td>
    <td><?php echo $message['sender']; ?></td>
    <td><?php echo $message['message']; ?></td>
    <td>
        <a href="deleteMessage.php?id=<?php echo $message['id']; ?>"><i class="fa-solid fa-trash padding-right"></i></a>
    </td>
</tr>