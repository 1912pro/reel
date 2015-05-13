 <div id="main_value">
     <div>
      <h5><?php $lang=$this->session->userdata('language'); 
          switch ($lang) {
                    case 'lang2':
                    echo $data['0']->title_lang2;

                      break;
                      case 'lang3':
                      echo $data['0']->title_lang3;
                      break;
                    default:
                    echo $data['0']->title_lang1;
                      break;
                  }
      ?></h5>
      </div>
              <div class="row">

   
                <?php 
                foreach ($data as $dt) { ?>                 
                <div class="col-xs-12 col-sm-4">
                  <div class="main_inner_value">
                    <img class="main_inner_value_img" src="<?php echo $dt->thumb_post; ?>" alt="" />
                      <div class="main_inner_category">
                        <h6><?php 

                          switch ($lang) {
                            case 'lang2':
                            echo '<a href="'.$dt->alias.'-'.$dt->id.'/'.$dt->alias_post.'-'.$dt->id_post.'.html">'.$dt->name_post_lang2.'</a>';
                            if ($dt->name_post_lang2 == null)
                            {
                              echo '<a href="'.$dt->alias.'-'.$dt->id.'/'.$dt->alias_post.'-'.$dt->id_post.'.html">'.$dt->name_post_lang1.'</a>';
                            }
                              break;
                              case 'lang3':
                            echo '<a href="'.$dt->alias.'-'.$dt->id.'/'.$dt->alias_post.'-'.$dt->id_post.'.html">'.$dt->name_post_lang3.'</a>';
                            if ($dt->name_post_lang3 == null)
                            {
                              echo '<a href="'.$dt->alias.'-'.$dt->id.'/'.$dt->alias_post.'-'.$dt->id_post.'.html">'.$dt->name_post_lang1.'</a>';
                            }
                              break;
                            default:
                            echo '<a href="'.$dt->alias.'-'.$dt->id.'/'.$dt->alias_post.'-'.$dt->id_post.'">'.$dt->name_post_lang1.'</a>';
                              break;
                          }
                         ?></h6>
                         <div class="short_descript"> <?php $str=$dt->short_descript_lang1;
                         echo text_limit($str,9); ?></div >
                      </div>
                  </div>
                </div>
            <?php } ?>
            <div class="text-center">
    <ul class="pagination">
        <li class="page"><a href="?page=0" data-original-title="" title="">1</a></li> 
        <li class="page"><a href="?page=1" data-original-title="" title="">2</a></li> 

   </div>

  </div>

