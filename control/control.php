<?php

    function viewPost(){
        global $connect;
        
        $query = "SELECT * FROM `d_blog` ORDER BY `id` DESC";
        $execute   =  mysqli_query($connect, $query);
        return $execute;
    }
    
    function addPost($title,$value){
        global $connect;
        
        $query = "INSERT INTO d_blog(title,post) VALUES ('$title','$value') ";
        $execute = mysqli_query($connect, $query);
        return $execute;    
    }

    function viewPostById($id){
        global $connect;
        
        $query = "SELECT * FROM d_blog WHERE (id)=$id ";
        $execute = mysqli_query($connect, $query);
        return $execute;
        
    }
    
    function editPost($idEdit,$title,$value){
        global $connect;
        
        $query = "UPDATE d_blog SET title='$title',post='$value' WHERE id=$idEdit ";
        $execute = mysqli_query($connect, $query);
        return $execute;
    }