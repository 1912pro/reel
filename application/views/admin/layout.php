<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
        <script src="<?php echo base_url(); ?>themes/admin/js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>themes/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>themes/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>themes/admin/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin.html">Dashboard</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="/logout.html"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                      <li <?php echo menu_active("/manager_page.html"); ?>>
                        <a href="/manager_page.html"><i class="fa fa-fw fa-file"></i>Page </a>
                    </li>
                     <li <?php echo menu_active("/admin_post.html"); ?>>
                        
                         <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Post <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li <?php echo menu_active("/admin_post.html"); ?>>
                                <a href="/admin_post.html">Post</a>
                            </li>
                            <li <?php echo menu_active("/admin_category_post.html"); ?>>
                                <a href="/admin_category_post.html">Category Post</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li <?php echo menu_active("/admin_slideshow.html"); ?>>
                        <a href="/admin_slideshow.html"><i class="fa fa-fw fa-desktop"></i> Slideshow</a>
                    </li>
					<li <?php echo menu_active("/admin_feature.html"); ?>>
                        <a href="/admin_comment.html"><i class="fa fa-fw fa-picture-o"></i> Features</a>
                    </li>
                    <li <?php echo menu_active("/admin_comment.html"); ?>>
                        <a href="/admin_comment.html"><i class="fa fa-fw fa-comment-o"></i> Comment</a>
                    </li>
<!--                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li> -->
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <?php 
                    if (isset($data))
                    {
                        $this->load->view($template,$data);
                    }
                    else
                    {
                        $this->load->view($template);
                    }
                 ?>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->

<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>/themes/admin/js/jquery.dataTables.js"></script>

<script type="text/javascript" language="javascript" class="init">

(function ($) {
   $(document);
   $('#example').DataTable();
}(jQuery));
    </script>
    <script src="<?php echo base_url(); ?>themes/admin/js/bootstrap.min.js"></script>

</body>

</html>
