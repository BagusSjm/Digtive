<?php
/* header and core file */
require_once 'header.php';
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
            <h1 class="d-lb lbMd d-cb bxAlgn">Cari ide dari Blog</h1>

           <form action="" method="post" >
               <input type="search" name="search" placeholder="cari di lab.." class="d-inp bxR" 
                style="width: 100%;" >

           </form>
        </div>
     
        <!-- box populer -->
            <p class="d-lb bxAlgn bB bxSh lbMd" style="text-align: center; margin-top: 100px">
                sedang populer di BLOG
            </p>
            <div class="bxAlgn d-pnl mTp1 bxSh wB clear">
                
                  <!-- post trend -->
                  <div class="d-bx wB d-col2 bxR" style="height: 200px">
                      <a href="#" class="lnk d-lb lbSm bB" style="color:white;margin-bottom: 20px;width: 100%">kalkulator suhu</a>
                      
                      <img src="asset/brand.PNG" class=" d-col3" >
                      <p class="d-col2">
                          Lorem ipsum dolor sit amet, consectetaborum.
                      </p>

                  </div>
                  
                  
            <div class="clear bxSh gB"><a href="#" class="lbMd lnk">temukan lebih banyak lagi >></a></div>                  
            </div>
    </div>
</html>

<?php
/* footer file */
require_once 'footer.php';
?>
