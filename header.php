<!DOCTYPE html>
<html>
  
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <body>
        <div class="navbar">
            <a href="Home.php">ATC.com</a>
            <a href="Categories.php">Categories</a>
            <a href="Write.php">Write an Article</a>
            <a href="ContactUs.php">Contact Us</a>
            <?php
                
                if(isset($_SESSION['userName'])){
                    $username = $_SESSION['userName'];
                    
                    echo'<form action = "PHP/signOut.php" method = "post">'
                    . '<button type = "submit" name = "signOut-submit" class="right">Sign Out From '.$username.'</button>'
                    . '</form>';
                }
                else{
                    echo'<form action = "SignIn.php" method = "post">'
                    . '<button type = "submit" name = "signIn-submit" class="right">Sign In/Register</button>'
                    . '</form>';
                }
            ?>
            
        </div>
    </body>
</html>



