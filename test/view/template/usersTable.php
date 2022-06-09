<tr>
    <td>
        <input type="checkbox" name="selects">
    </td>
    <td> <?php echo $user['fullname']; ?> </td>
    <td> <?php echo $user['username']; ?> </td>
    <td> <?php echo $user['edu']."-".$user['major']; ?> </td>
    <td> <?php echo ($user['role'] == "admin" ? "ادمین" : "کاربر"); ?> </td> 
    <td> <?php echo ($user['level'] == "read" ? "مطالعه" : "انتشار"); ?> </td>
    <td>
        <a class="" href="delete.php? id=<?php echo $user['id'] ?>&del=user">
            <i class='fa-solid fa-user-slash'></i>
        </a> 

        <a class="" href="editUser.php? id=<?php echo $user['id'] ?>">
            <i class='fa-solid fa-user-pen'></i>
        </a>       
    </td>
</tr>

