<?php
require 'PHP/db.php';
require 'PHP/article.php';
require 'header.php';
$article = new Article;

session_start();

if(isset($_GET['category'])){
    $category = $_GET['category'];
    $data = $article->fetch_all_with_category($category);
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $category; ?></title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            foreach ($data as $article){
        ?>
                <div id="slide1" style="background-image: url(<?php echo $article['image']; ?>);">
                    <div class='content'>
                        <a href = "ArticlePage.php?title=<?php echo $article['title']; ?>"><h1><?php echo $article['title'] ?></h1></a>
                    </div>
                </div>
        <?php 
            }
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