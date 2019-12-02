<?php
    require 'db.php';
    require '../header.php';
    
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imageURL = $_POST['imageURL'];
    $category = $_POST['category'];
    
    $sql = "INSERT into article (title, content, image, category) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    
    mysqli_stmt_bind_param($stmt, "ssss", $title, $content, $imageURL, $category);
    mysqli_stmt_execute($stmt);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Success!</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <div class="content">
            <h1>Success</h1>
            <p>Thank you for your submission.</p>
        </div>
        
        <?php
            require 'footer.php';
        ?>
    </body>
</html>