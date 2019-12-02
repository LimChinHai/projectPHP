<?php

class Article{
    public function fetchAll(){
        global $conn;
        
        $sql = "SELECT * FROM article";
        $result = mysqli_query($conn, $sql);
        
        mysqli_fetch_all($result);
        
        return $result;
    }
    
    public function fetch_all_with_category($article_category){
        global $conn;
        
        $sql = "SELECT * FROM article WHERE category = ?";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        
        mysqli_stmt_bind_param($stmt, "s", $article_category);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        return $result;
        
    }


    public function fetch_data($article_title){
        global $conn;
        
        $sql = "SELECT * FROM article WHERE title = ?";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        
        mysqli_stmt_bind_param($stmt, "s", $article_title);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        
        return $row;
    }
}

