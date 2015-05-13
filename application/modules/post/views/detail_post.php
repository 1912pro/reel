 	<div id="main-product" >
 	
              <div>  
              	<?php 

              	echo $menu; //breakbrumbs
 		 ?>        
                <h5><?php 
                $lang=$this->session->userdata('language');
                switch ($lang) {
                 	case 'lang2':
                 		echo $data['0']->name_post_lang2;
                 		break;
                 	case 'lang3':
                 		echo $data['0']->name_post_lang3;
                 		break;
                 	default:
                 		echo $data['0']->name_post_lang1;
                 		break;
                 } ?></h5>
              </div>

              <div class="row">
              	
                <div class="col-xs-12 col-sm-5">
                  <div class="main_inner_product">
                  	<?php switch ($lang) {
                 	case 'lang2':
                 		echo $data['0']->short_descript_lang2;
                 		break;
                 	case 'lang3':
                 		echo $data['0']->short_descript_lang3;
                 		break;
                 	default:
                 		echo $data['0']->short_descript_lang1;
                 		break;
                 } ?></h5>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-7">
                  <div class="main_inner_product_2">
                    <img class="main_inner_product_img_2" src="<?php echo $data['0']->thumb_post; ?>" alt="<?php echo $data['0']->name_post_lang1; ?>" />
                                     
                  </div>
                </div>

              </div>

              <div class="row">
               <div class="col-xs-12 col-sm-12">
               <div class="main_inner_product_3">
                  <div> <h5>Specifications & Overview</h5></div>
                  <div class="row">
                  	<div class="col-xs-12 col-sm-12">
                      <div class="description">
                        <?php switch ($lang) {
                  case 'lang2':
                    echo $data['0']->descript_lang2;
                    break;
                  case 'lang3':
                    echo $data['0']->descript_lang3;
                    break;
                  default:
                    echo $data['0']->descript_lang1;
                    break;
                 } ?>
                      </div>
	                    
                  	</div>

                  </div>
                 <div>          
              </div>

                 
                </div> <!-- main inner product -->
               </div>
              </div>	

               <div class="row">
               	<div class="col-xs-12 col-sm-12">
                <div class="btn_product">
                 <button onclick="history.go(-1);" class="btn btn-lg btn-primary btn-block-size" type="submit">Back</button>
               </div>
               	</div>
               </div>
              
    </div> 

