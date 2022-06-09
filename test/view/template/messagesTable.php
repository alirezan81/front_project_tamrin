<tr>
    <td>
        <input type="checkbox" name="selects">
    </td>
    <td> <?php echo $message['id']; ?> </td>
    <td> <?php echo $message['email']; ?> </td>
    <td> <?php echo $message['title']; ?> </td>
    <td> <?php echo $message['description']; ?> </td> 
    <td>
        <a class="" href="delete.php? id=<?php echo $message['id'] ?>&del=message">
            <i class="fa-solid fa-trash"></i>
        </a> 

        <a class="" href="# id=<?php echo $message['id'] ?>">
            <i class="fa-solid fa-reply"></i>
        </a>       
    </td>
</tr>

