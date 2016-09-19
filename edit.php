<?php 
    /**
     * load core file
     * load init file
     * **/
    require_once 'main/core.php'; 
    
    $status = '';
    
    if (isset($_GET['post_edit'])):
        $idEdit = $_GET['post_edit'];
        
        /*-- get default data --*/
        if ($rowId = mysqli_fetch_assoc(viewPostById($idEdit))):
            $rowTitle = $rowId['title'];
            $rowValue = $rowId['post'];
            $rowTime = $rowId['time'];
        endif;
        
        /*-- send idited document --*/
        if (isset($_POST['send'])):
        $title = $_POST['title'];
        $value = $_POST['post'];
        if (!empty($title) and !empty($value)):
            if (editPost($idEdit,$title,$value)):
                header('Location: http://localhost/digtive/blog.php');
            else:
                $status = '<i class="fa fa-frown-o"></i>gagal mengedit post';
            endif;
        else:
                $status = '<i class="fa fa-hand-o-up"></i>semua form harus terisi';
        endif;
        
    endif;
         
    endif
    

?>


<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>design digtive alpha version</title>
          <link rel="stylesheet" href="style.css" media="screen"  charset="utf-8">
          <link rel="stylesheet" href="unveril.css" media="screen"  charset="utf-8">
          <link href='https://fonts.googleapis.com/css?family=Oxygen+Mono' rel='stylesheet' type='text/css'>
          <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
          <script src="unveril.js"></script> 
          <style>
              
              
            .admNav{
                width: 100%;
                height: 100%;
                overflow: hidden;
                background: 
                    -webkit-linear-gradient(45deg, hsl(200, 66%, 44%) 0%, transparent 70%), 
                    -webkit-linear-gradient(135deg, hsl(139, 34%, 86%) 10%, transparent 80%), 
                    -webkit-linear-gradient(225deg, hsl(196, 52%, 66%) 10%, transparent 80%), 
                    -webkit-linear-gradient(315deg, hsl(95, 100%, 46%) 50%, transparent 100%);
            }
          </style>
     </head>
     <body class="role-model">
         
         <!-- header for admin -->
         <div class="admNav">
             <!-- bagian header -->
         <div class="d-nav " id="d-hNav">
             <a href="https://www.bagussjm.github.io"><div id="d-brand" style="margin-top : 10px">
                 
                  <img src="asset/brand.png"  style="float: left, margin: 0 5% 0 10px" >
                  <span>Digtive</span>
                 
             </div></a>
             
             <a href="#" class="nav-lst hLst"><i class="fa fa-send"></i>Post</a>
             <a href="#" class="nav-lst hLst"><i class="fa fa-key"></i>Admin</a>
             <a href="#" class="nav-lst hLst"><i class="fa fa-power-off"></i>Logout</a>
                
         </div>
             
             
             <div class="container">
                 <div id="d-sPg" class="d-pnl mTp5 bxR wB ">
                     <div class="d-bx bxR wB">
                         <i class="fa fa-newspaper-o"></i><a href="#admForm" class="lbSm d-cb admScroll"> Dashboard</a>
                     </div>
                     <div class="d-bx bxR wB">
                         <i class="fa fa-edit"></i> <a href="#connect" class="lbSm d-cb admScroll"> edit post</a>
                     </div>
                     <div class="d-bx bxR wB">
                         <i class="fa fa-trash"></i><a href="#data" class="lbSm d-cb admScroll">  hapus post</a>
                     </div>
                     
                 </div>
                 
                 <div class="prvSpg d-pnl mTp5 bxR " id="admPanel" style="height:500px;margin-bottom: 50px;overflow: auto">
                     
                     <form  method="post" style="width:100%;height: 415px" class="d-pnl wB" id="admForm" novalidate="" 
                     enctype="multipart/form-data">
                         <label for="title" class="d-lb lbSm  d-cg"><i class="fa fa-edit"></i> judul post</label>
                         <input type="text" name="title" class="d-inp bxR" style="width:100%" value="<?php echo $rowTitle;?>">
                         <textarea name="post" rows="8" cols="40" class="d-inp bxR" style="height:250px;width:100%">
                             <?php echo $rowValue;?>
                         </textarea>
                         <input type="file" name="image" class="d-inp bxR" > 
                         <input type="submit" class="d-btn d-sbmt d-inp bxR" value="post" name="send">
                     </form>
                     
                     <!-- notif for succes/break post -->
                     <p class="nav-lst hLst"><?php echo $status; ?></p>
                     
                    
                     <div class="d-pnl wB bxR gB mTp1" style="height: 300px" id="connect">
                         <h3 class="d-lb lbMd gB">ini panel connect</h3>
                     </div>
                     <div class="d-pnl bxSh wB mTp5" style="height: 300px;margin-bottom: 100px" id="data">
                         <h3 class="d-lb lbMd bB">ini panel data</h3>
                     </div>
                     
                 </div>
             </div>
             
         </div>
     </body>
</html>

