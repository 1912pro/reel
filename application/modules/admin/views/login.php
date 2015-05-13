 <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
<meta charset="UTF-8">
    <script src="<?php echo base_url(); ?>themes/admin/js/jquery-1.11.0.js"></script>
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">
    <script src="<?php echo base_url();?>themes/admin/login_admin.js"></script>
  <script>
      $(document).ready(function() {
      
      $('#login').click(function()
      {
      var username=$("#username").val();
      var password=$("#password").val();
      if($.trim(username).length>0 && $.trim(password).length>0)
      {
      $.ajax({

            type: "POST",
            url: "/check_admin.html",
            data: 'username='+username+'&password='+password,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');
            $("#error").html("");

            },
            success: function(data){
             if(data)
            {
              window.location.href = "/manager_page.html";
            }
            else
            {
             $('#box').shake();
       $("#login").val('Login ');
       $("#error").html("<span style='color:#cc0000'>Error:</span> Username or password incorrect. ");
            }
            }
            });
      
      }
      return false;
      });
      
        
      });
    </script>
 <body>

    <div class="container">

      <div id="box">
      <form class="form-signin">
        <div class="form-group">
             <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Email address" required autofocus>
        </div>
       <div class="form-group">
 <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
       </div>
       
        <div id="error"></div>
        <a id="login" class="btn btn-lg btn-primary btn-block" type="submit">Login </a>
      </form>
      </div>
    </div> <!-- /container -->

  </body>

