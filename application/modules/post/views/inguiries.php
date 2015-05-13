<div id="main_inguiries">
  <p id="p_inquiries"> 
    <?php $lang=$this->session->userdata('language');
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
     ?>
  </p>
  <div class="row">
    <div class="col-xs-12">
      <div id="mainframe_inquiries">
        <div id="text_frame_inquiries">
          <p> <?php 
            switch ($lang) {
        case 'lang2':
          echo $data['0']->body_lang2;
          break;
          case 'lang3':
           echo $data['0']->body_lang3;
          break;
        default:
          echo $data['0']->body_lang1;
          break;
      }
           ?> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div id="mainframe_inquiries_2">
        <div id="text_frame_inquiries_2">
          <div id="frame_inquerie">
            <p><b>Inquiries & Solutions </b></p>
          </div>
          <div id="frame_inquerie_2">
            <div class="row">
              <div class="col-xs-6" style="margin: 2% 0 0 8%;">
                <form method="post" action="/send_comment.html" >
                  <div class="form-group">
                    <input type='hidden' name='type_page' value="<?php echo $data['0']->type_page; ?>">
                    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  </div>
                  <div class="form-group">
                    <input name="name" type="text" id="inputEmail" class="form-control" placeholder="Name" required autofocus>
                  </div>
                  <div class="form-group">
                    <input name="company" type="text"  class="form-control" placeholder="Company" required autofocus>
                  </div>
                </div>
                <div class="col-xs-10">
                  <textarea style="margin:0 0 0 10%"  rows="14" name="body" class="form-control-1" placeholder="Enter the body"></textarea>
                     <div class="btn" style="margin-left: 20%;">
                  <button class="btn btn-lg btn-primary btn-block-size" type="submit">SUBMIT</button>
                </div>
                </div>
             
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>

