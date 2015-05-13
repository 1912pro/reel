<?php echo Modules::run ('slideshow/slideshow/index'); ?>
    
      <!-- MAIN -->  
            <div id="main" >
              <div>
                <h5>FEATURED MANUFACTUERS</h5>
              </div>
              <div class="row">
                <?php foreach ($data as $dt) { ?>


                <div class="col-xs-12 col-sm-4">
                  <div class="main_inner">
                    <img class="main_inner_img" src="<?php echo $dt->thumb_img; ?>" alt="" />
                     <a target="_blank" href="<?php echo $dt->website; ?>"><p> Website</p></a>                   
                     <div class="catalog">
            <div class="col-xs-6 col-md-6 fixed"> 
              <a href="<?php echo $dt->link_download; ?>"> <img class="main_inner_img_download" src="<?php echo base_url(); ?>themes/index/images/download.jpg"></a>
            </div>
            
            <div class="col-xs-6 col-md-6 titlefixed">
              <h4><a href="<?php echo $dt->link_download; ?>">Catalog</a></h4>
            </div>
            <!--<a href="<?php //echo $dt->link_download; ?>"><img class="main_inner_img_download" src="<?php //echo base_url(); ?>themes/index/images/download.jpg">Catalog</a>-->
           </div>
                  </div>
                </div>
                <?php }?>
              </div>
            </div>      
