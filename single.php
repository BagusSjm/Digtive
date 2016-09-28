<?php 
    
    require_once 'main/core.php';
    require_once 'header.php';
    
    if (isset($_GET['post_tumb'])):
        $id = $_GET['post_tumb'];
        if ($rowId = mysqli_fetch_assoc(viewPostById($id))):
            $rowTitle = $rowId['title'];
            $rowValue = $rowId['post'];
            $rowTime = $rowId['time'];
        endif;
    endif;   
?>



<div class="container">
     <!-- main panel -->
        <div class=" d-pnl mTp5 bxSh wB">
               
            <div class=" d-pnl " >
                    <!-- side page -->
                    <div id="d-sPg" class="mTp5">
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
                    
                    <div class="prvSpg mTp5">
                         <!-- post on blog -->   
                        <a href="#"><p  class="d-lb lbMd d-cb"  ><?php echo $rowTitle; ?></p></a>
                        <p class="d-lb lbSm bB bxR">di post pada : <?php echo $rowTime ?> WIB</p>


                        <img src="asset/2.png" style="max-width: 40%;max-height: 40%;margin: 5% 0 5% 30%" >
                        <p class=" txtPrv " style="margin-bottom: 50px">
                            <?php echo $rowValue; ?>
                        </p>
                        
                    </div>
                
                </div>
           
            <div class="clear"></div>
        </div>
</div>

<?php require_once 'footer.php'; ?>