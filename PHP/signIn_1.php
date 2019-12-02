<?php

if(isset($_POST['signIn_submit'])){
    require 'db.php';
    
    $uName = $_POST['uName'];
    $psw = $_POST['psw'];
    
    $sql = "SELECT * FROM users WHERE username = ? OR password = ?;";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo'SQL Error';
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $uName, $uName);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $pwdCheck = password_verify($psw, $row['password']);
            if($pwdCheck == FALSE){
                echo'Invalid Password!';
                exit();
            }
            else if($pwdCheck == true){
                session_start();
                $_SESSION['userID'] = $row['id'];
                $_SESSION['userName'] = $row['username'];
                
                echo'Logged In';
                header("location: ../Home.php");
                exit();
            }
        }
        else{
            echo'No user';
            exit();
        }
    }
}
else{
    //header("location: ../Home.php");
    exit();
}

