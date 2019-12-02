<?php 
    require 'PHP/db.php';
    session_start();
    require 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <div class="container_contact">
            <div style="text-align: center">
                <h2>Contact Us</h2>
                <p>Compliments, Complains, Improvements Suggestions. We take it all. Don't worry, we don't bite ;)</p>
            </div>
            
            <div class='row'>
                <div class='column_contact'>
                    <img src="Images/ContactUs.jpeg" alt='Contact Us' style="width: 500px; height: 500px">
                </div>
                
                <div class='column_contact'>
                    <form action='/action_page.php'>
                        <label>First Name</label>
                        <input type="text" id="fname" name="firstName" placeholder="Your name..">
                        <label>Last Name</label>
                        <input type="text" id="lname" name="lastName" placeholder="Your last name..">
                        <label for="country">Country</label>
                        <select id="country" name="Country">
                            <option value="malaysia">Malaysia</option>
                            <option value="singapore">Singapore</option>
                        </select>
                        <label for="subject">Subject</label>
                        <textarea id="subject" name="Subject" placeholder="Write something.." style="height: 170px"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>           
        </div>
        
        <?php 
            require 'footer.php';
        ?>
    </body>
</html>

