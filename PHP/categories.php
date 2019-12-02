<?php
    class Category{
        public function fetchAll(){
            global $conn;
        
            $sql = "SELECT * FROM categories";
            $result = mysqli_query($conn, $sql);
        
            mysqli_fetch_all($result);
        
            return $result;
        }
        
    }
