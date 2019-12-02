<?php
    require 'header.php';
?>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="font-family: 'Comic Sans MS'">
        
        <div class="container_contact">
            <div style="text-align: center">
                <h2>Register</h2>
                <p>Join Us</p>
            </div>
            
            <div class='row'>
                <div class='column_contact'>
                    <form action='PHP/register_1.php' method="post">
                        <label for="username"><b>Username</b></label>
                        <input type="text" id="userName" name="userName" placeholder="Your username.." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" 
                               required>
                        <label for="email"><b>Email</b></label>
                        <input type="email" id="email" name="email" placeholder="Your email.." style="width: 100%;padding: 12px 20px;margin: 8px 0;
                               display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>
                        <label for="password"><b>Password</b></label>
                        <input type="password" id="password" name="password" placeholder="Your password.." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                               title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        <label for="confirmPassword"><b>Confirm Password</b></label>
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password.." 
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                               title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        <input type="submit" name="register" value="Register">
                    </form>
                </div>
            </div>
        </div>
        
        <?php 
            require 'footer.php';
        ?>
    </body>
</html>

