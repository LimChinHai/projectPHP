<?php
require 'PHP/article.php';
require 'PHP/db.php';
require 'header.php';
$article = new Article;

if(isset($_GET['title'])){
    $title = $_GET['title'];
    $data = $article->fetch_data($title);
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $data['title']?></title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="UTF-8_swedish_ci">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-image: url(<?php echo $data['image']; ?>); ">
        <div class="container">
            <div class="container_contact">
                <div style="text-align: center">
                    <h1 style="color: black"><u><?php echo $data['title']?></u></h1>
                </div>
                <p><?php echo$data['content']?></p>
            </div>
        </div>
        
        <?php 
            require 'footer.php';
        ?>
    </body>
</html>
<?php
}
else{
    //header("location: ../Home.php");
    exit();
}
?>