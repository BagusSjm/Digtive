<?php
    require_once 'main/core.php';
    
    if (isset($_GET['post_delete'])):
        $idDeleted = $_GET['post_delete']; 
        
        if (deletePost($idDeleted)):
            header('Location: http://localhost/digtive/blog.php');
        else:
            echo 'gagal menghapus post';
        endif;
        
    endif;
