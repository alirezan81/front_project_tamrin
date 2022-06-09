<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Articles posts">
    <title>Articles</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/card.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="box medium">
        <h1>شروع کن!</h1>
        <div class="grid grid-3" style="dir">       
            <?php
                if( count( $posts ) == 0 ){
                    echo '<p>مقاله ای یافت نشد</p>';
                }
                else{
                    foreach( $posts as $row ){

                        $sql = "SELECT fullname,role FROM users WHERE id=?";
                        $result = $dbc -> query( $sql ,$row['writer']);
                        $writer = $result->fetchArray();
                             
                        include 'view/template/card.php';
                    }
                }
            ?>
        </div>
       
    </div>
   
</body>
</html>
