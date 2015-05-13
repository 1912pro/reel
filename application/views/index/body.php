<!DOCTYPE html>
<html lang="en" "kr" "jp">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="apecviet">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>themes/index/asset/css/bootstrap.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>themes/index/asset/js/jquery.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>themes/index/asset/css/styles.css" rel="stylesheet">
</head>
<body>
        <div class="container">
        <?php echo Modules::run ('menu/menu/index');?>
               <!-- Carousel Slide -->
     
       <!-- END MAIN -->
     <?php $this->load->view($template,$data); ?>
        <!-- FOOTER -->
          <!-- FOOTER -->
    <footer id="footer">
    <!--<p id="footer-right" class="pull-right"><a href="#"> <img src="<?php //echo base_url(); ?>themes/index/images/back_to_top.png" width="20px" height="20px"></a></p>-->
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h3 class="domain"><a href="<?php echo base_url();?>">2015 Asiahosereelconnection.com</a></h3>
        </div>
          
        <div class="col-xs-12 col-sm-6">
          <h3 class="email"><a href="<?php echo base_url();?>">Info@asisahosereelconnection.com</a></h3>
        </div>
      </div>
    </footer>
      </div><!--end container-->
  <!--</div><! div end -->
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>themes/index/asset/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->

</body>
</html>

