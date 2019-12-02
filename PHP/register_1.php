<?php
if(isset($_POST['register'])){
    require 'db.php';
    
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    if($password !== $confirmPassword){
        echo'Unmatching inputs in password and confirm password!';
        exit();
    }
    else{
        $sql = "SELECT id FROM users WHERE id=?";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo'SQL Error!';
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $userName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            $resultCheck = mysqli_stmt_num_rows($stmt);
            
            if($resultCheck > 0){
                echo'Username already taken!';
                exit();
            }
            else{
                $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo'SQL Error!';
                    exit();
                }
                else{
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    
                    mysqli_stmt_bind_param($stmt, "sss", $userName, $email, $hash);
                    mysqli_stmt_execute($stmt);
                    
                    echo'Registration is successfull';
                    exit();
                }
            }
        }
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}
else{
    //header("location: register.php");
}

