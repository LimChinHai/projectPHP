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
        <title>Categories</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <div>
            <div class="row">
                <div class="col-md-12">
                    <button onclick="listView()" class="btn"><i class="fa fa-bars"></i>List</button>
                    <button onclick="gridView()" class="btn"><i class="fa fa-th-large"></i>Grid</button>
                </div>
            </div>
        
            <div class="categories_row">
                <?php foreach ($categories as $category){ ?>
                    <div class="categories_column" style="background-image: url(<?php echo $category['image'] ?>); background-position: 50% 50%;" >
                        <a href="cHome.php?category=<?php echo $category['name']?>"<p></p></a>
                    </div>
                <?php } ?>
            </div>
        </div>
        
        <script>
            var elements = document.getElementsByClassName("categories_column");
            var i;
            
            function listView(){
                for(i = 0; i < elements.length; i++){
                    elements[i].style.width = "100%";
                }
            }
            
            function gridView(){
                for(i = 0; i < elements.length; i++){
                    elements[i].style.width = "50%";
                }
            }
            
            var container = document.getElementById("btnContainer");
            var btns = container.getElementsByClassName("btn");
            
            for(var i = 0; i < btns.length; i++){
                btns[i].addEventListener("click",function(){
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace("active", "");
                    this.className +="active";
                });
            }
        </script>
        <?php 
            require 'footer.php';
        ?>
    </body>
</html>

