<?php
/* header and core file */
    require_once 'main/core.php';
    require_once 'header.php';

    $posts = viewPost();
  
?>


<html>
    <!-- box show on landing -->
         <div class="d-bx bx-show bxSh wB">
               
              <div class="sldCvr" id="img1">
                  
                  <div class="slds on" id="sld1">
                    <img src="asset/1.PNG" alt="image slider gagal" class="imgs on">
                  </div>
              
              </div>
              
              <div class="sldNav clear" id="imgNav" >
                  <div class="ancLnk" id="1"></div>
                  <div class="ancLnk" id="2"></div>
                  <div class="ancLnk" id="3" ></div>
                  <div class="ancLnk" id="4"></div>
              </div>
              
              <div class="clear"></div>
          </div>
    
    
    <div class="container">
        
        <!-- search for all conten -->
        <div class=" d-pnl mTp5 bxAlgn">
            <h1 class="d-lb lbMd d-cb bxAlgn" style="text-align: center;">Cari ide dari Blog</h1>

           <form action="" method="post" >
               <input type="search" name="search" placeholder="cari di lab.." class="d-inp bxR" 
                style="width: 100%;" >

           </form>
        </div>
     
        <!-- box populer -->
            <p class="d-lb bxAlgn bB bxSh lbMd" style="text-align: center; margin-top: 100px">
                Yang terbaru dari BLOG
            </p>
            
            <div class="bxAlgn d-pnl mTp1 bxSh wB clear">
                
                  <!-- post trend -->
                  <div class="d-bx wB d-col2 bxSh" style="height: 200px">
                      <a href="#"><p  class="d-lb lbSm gB" >pendiri Digtive</p></a>
                      
                      <div class="d-pnl">
                          <img src="asset/ibag.png" class="imgPst">
                          <p class="d-cg txtPrv " style="text-align: justify">
                              pendiri Digtive, adalah seorang pria berumur 18 tahun berasal dari ..
                          </p>
                      </div>

                  </div>
                  <!-- post trend -->
                  <div class="d-bx wB d-col2 bxSh" style="height: 200px">
                      <a href="#"><p  class="d-lb lbSm gB" >asal usul digtive</p></a>
                      
                      <div class="d-pnl">
                          <img src="asset/brand.png" class="imgPst">
                          <p class="d-cg txtPrv " >
                               Asal mula digtive di dirikan yaitu untuk .... 
                          </p>
                      </div>

                  </div>
                  <!-- post trend -->
                  <div class="d-bx wB d-col2 bxSh" style="height: 200px">
                      <a href="#"><p  class="d-lb lbSm gB" >Pembentukan Creative Crew</p></a>
                      
                      <div class="d-pnl">
                          <img src="asset/komunitas.png" class="imgPst">
                          <p class="d-cg txtPrv " >
                               Creative Crew, merupakan sebuatan untuk pengembang (developer) dan juga ....
                          </p>
                      </div>

                  </div>
                  <!-- post trend -->
                  <div class="d-bx wB d-col2 bxSh" style="height: 200px">
                      <a href="#"><p  class="d-lb lbSm gB" >Aktivitas team Digtive di socmed</p></a>
                      
                      <div class="d-pnl">
                          <img src="asset/daily.png" class="imgPst">
                          <p class="d-cg txtPrv " >
                               Creative Crew, merupakan sebuatan untuk pengembang (developer) dan juga ....
                          </p>
                      </div>

                  </div>
                  
                  
                  <a href="#"><p class="d-lb lbSm d-cg clear">Lihat lainya >></p></a>
                         
            </div>
            
        <!-- main panel -->
        <div class=" d-pnl mTp1 bxSh wB">
            <div id="d-sPg" class="fxdNav">
                <h1 class="d-lb lbSm gB ">Sedang populer di Blog</h1>
                <!-- post on blog -->
                <div class="bxR wB d-bx" style="margin-bottom: 25px">
                        <img src="asset/2.png" style="max-height: 150px">
                        <a href="#"><p  class="d-lb lbSm bB" >Digtive like xampp</p></a>
                </div>
                <a href="#" class="d-bx d-lb lbSm bB ">
                    just another site word now
                </a>
                <a href="#" class="d-bx d-lb lbSm bB">
                    live with no man in the mirror
                </a>
                <a href="#" class="d-bx d-lb lbSm bB">
                    bring another icon width element
                </a>
               
               
            </div>
            
            <div class="prvSpg d-pnl ">
                <h1 class="d-lb lbSm gB d-pnl">Semua post kreativ di Blog</h1>
                
                
                <?php while ($row = mysqli_fetch_assoc($posts)): ?>
                 <!-- post on blog -->
                  <div class="d-bx wB bxSh" style="height: 200px">
                      <a href="#"><p  class="d-lb lbMd bB  r " ><?php echo substr($row['title'],0,65).' -->'; ?></p></a>
                        
                      <div class="d-pnl">
                          <img src="asset/daily.png" class="imgPst">
                          <p class="d-cg txtPrv " >
                               <?php echo substr($row['post'],0,65).' -->'; ?>
                          </p>
                          <p class="d-lb wB gB " style="padding-top: 22px">di post :<?php echo $row['time']; ?> WIB</p>
                      </div>

                  </div>
                 <?php endwhile;?>

            </div>
            
            
            <div class="clear"></div>
        </div>
        
        <!-- panel footer -->
        <h1 class="d-lb lbMd bB mTp5">Lihat dokumentasi untuk halaman lainya</h1>
        
            <!-- post on blog -->
            <div class="d-col4 bxR wB d-bx">

                          <a href="#"><p  class="d-lb lbSm bB" >Digtive Daily</p></a>

                          <div class="d-pnl">
                              <img src="asset/daily.png" class="imgPst">
                          </div>
            </div>
            <!-- post on blog -->
            <div class="d-col4 bxR wB d-bx">

                          <a href="#"><p  class="d-lb lbSm bB" >Digtive Daily</p></a>

                          <div class="d-pnl">
                              <img src="asset/daily.png" class="imgPst">
                          </div>
            </div>
            <!-- post on blog -->
            <div class="d-col4 bxR wB d-bx">

                          <a href="#"><p  class="d-lb lbSm bB" >Digtive Daily</p></a>

                          <div class="d-pnl">
                              <img src="asset/daily.png" class="imgPst">
                          </div>
            </div>
            <!-- post on blog -->
            <div class="d-col4 bxR wB d-bx">

                          <a href="#"><p  class="d-lb lbSm bB" >Digtive Daily</p></a>

                          <div class="d-pnl">
                              <img src="asset/daily.png" class="imgPst">
                          </div>
            </div>
           
        
    </div>
</html>

<?php
/* footer file */
require_once 'footer.php';
?>
