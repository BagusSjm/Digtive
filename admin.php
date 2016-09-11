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
                         <i class="fa fa-link"></i> <a href="#connect" class="lbSm d-cb admScroll"> Connected</a>
                     </div>
                     <div class="d-bx bxR wB">
                         <i class="fa fa-hashtag"></i><a href="#data" class="lbSm d-cb admScroll">  Tag post</a>
                     </div>
                     
                 </div>
                 
                 <div class="prvSpg d-pnl mTp5 bxR " id="admPanel" style="height:500px;margin-bottom: 50px;overflow: auto">
                     
                     <form action="index.php" method="post" style="width:100%;height: 415px" class="d-pnl wB" id="admForm">
                         <label for="title" class="d-lb lbSm  d-cg"><i class="fa fa-edit"></i> judul post</label>
                         <input type="text" name="title" class="d-inp bxR" placeholder="input judul untuk setiap post kreativ.." 
                         style="width:100%">
                         <textarea name="post" rows="8" cols="40" class="d-inp bxR" style="height:250px;width:100%"
                          placeholder="tulis berbagai hal kreativ .."></textarea>
                         <input type="button" class="d-btn d-sbmt d-inp bxR" value="post" name="send">
                     </form>
                     <!-- notif for succes/break post -->
                     <a href="#" class="nav-lst hLst" ><i class="fa fa-check-circle"></i>
                     post terkirim Lihat post</a> 
                     <a href="#" class="nav-lst hLst" style="display: none"><i class="fa fa-frown-o"></i>post gagal dikirim</a>
                     
                    
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

