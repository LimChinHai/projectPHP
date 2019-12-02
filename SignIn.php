<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="SignInValidation.js"></script>
    </head>
    <body>
        <div class="bg-img">
            <form class="container_SignIn" action="PHP/signIn_1.php" method="post">
                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uName" id="username" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="password" required>
        
                    <button type="submit" id="submit" name="signIn_submit">Sign In</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <span class="cancelbtn"><a href="Register.php">Register</a></span>
                </div>
            </form>
        </div>
    </body>
</html>

