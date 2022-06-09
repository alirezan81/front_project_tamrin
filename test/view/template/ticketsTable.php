<tr>
    <td>
        <input type="checkbox" name="selects">
    </td>
    <td> <?php echo $row['id']; ?> </td>
    <td> <?php echo $row['sender']; ?> </td>
    <td> <?php echo $sender['email']; ?> </td>
    <td> <?php echo $sender['fullname']; ?> </td>
    <td> <?php echo $row['title']; ?> </td>
    <td> <?php echo $row['description']; ?> </td> 
    <td>
        <a class="" href="delete.php? id=<?php echo $row['id'] ?>&del=tickets">
            <i class="fa-solid fa-trash"></i>
        </a> 

        <a class="" href="# id=<?php echo $row['id'] ?>">
            <i class="fa-solid fa-reply"></i>
        </a>       
    </td>
</tr>

