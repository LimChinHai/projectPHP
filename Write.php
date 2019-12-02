<?php 
    require 'PHP/db.php';
    require 'PHP/categories.php';
    session_start();
    
    require 'header.php';
    
    $category = new Category;
    $categories = $category->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Write an Article</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container_contact">
                
                <div>
                    <form action='PHP/write_article.php' method="post">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="The title of the article.." required="">
                        <label for="category">Category</label>
                        <select id="category" name="category">
                            <?php foreach ($categories as $category){ ?>
                            <option value="<?php echo $category['name']?>" required><?php echo $category['name'] ?></option>
                             <?php } ?>
                        </select>
                        <label for="content">Content</label>
                        <textarea id="content" name="content" placeholder="Write something.." style="height: 170px" required></textarea>
                        <label for="image">Image URL</label>
                        <input type="text" id="imageURL" name="imageURL" placeholder="The URL of the background image..." required>
                        <input type="submit" value="Submit">
                        
                    </form>
                </div>
            </div>
        
        <?php 
            require 'footer.php';
        ?>
    </body>
</html>


