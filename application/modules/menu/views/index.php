<div class="menu-top"></div>
  <div id="header">
    <div id="menu-wrapper">
      <div class="container">
      <div id="main-menu">
        <div id="menu-left"></div>
        <div id="menu-body">
          <nav class="navbar navbar-inverse navbar-static-top"> 
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                <span class="sr-only">Toggle&nbsp;navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/index.php">Home</a>
            </div> <!--end navbar-header-->
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="/Value-Selection-3.html">Value&nbsp;<br>Selections</a></li>
                <li><a href="/Accessories---Specialties-4.html">Accessories&nbsp;<br>&amp;&nbsp;Specialties</a></li>
                <li><a href="/About-AHRC-6.html">About&nbsp;<br>AHRC</a></li>
                <li><a href="/Your-Inquiries---Our-Solutions-5.html">Inquiries&nbsp;<br>&amp;&nbsp;Solutions</a></li>
                <li><a href="/Post-A-Review-8.html">Post A<br>Review</a></li>

              </ul>
            </div> <!--end navbar-->
          </nav> <!--end nav-->
          </div>  <!--end container2-->
          <div id="menu-right"></div>  
        </div> <!--end main-menu-->
      </div> <!--end container-->
      
    </div> <!--end menu-wrapper-->
  
    <div id="language" class="hidden-xs hidden-sm hidden-md hidden-lg">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Language</a>
            <ul class="dropdown-menu" role="menu">
              <li class="selected"><a id='lang1' href="#">ENGLISH</a></li>
              <li><a id="lang2" href="#">JAPANESE</a></li>
              <li><a id="lang3" href="#">KOREA</a></li>
            </ul>
        </li>

    </div> <!--end language-->
  
    <div id="logo">
      <a href="/index.php" title="Home"><img src="<?php echo base_url(); ?>themes/index/images/logo.png" alt="" width="213px" height="70px" />
      </a>
    <h2 class="h2-slogan"><i> Asia's informational resource for high quality reel products and accessories of value</i></h2>
    </div> <!--end language-->
  </div> <!--end header-->
<div id="box"></div>

<script type="text/javascript">
  $('#lang1').click(function() {
    // location.reload();
    var dataString="lang=lang1";
    $.ajax({
type: "POST",
url: "/sl_language.html",
data: dataString,
success: function(response)
{
  location.reload();
}
});
});
 $('#lang2').click(function() {
    // location.reload();
    var dataString="lang=lang2";
    $.ajax({
type: "POST",
url: "/sl_language.html",
data: dataString,
success: function(response)
{
  location.reload();
}
});
});
 $('#lang3').click(function() {
    // location.reload();
    var dataString="lang=lang3";
    $.ajax({
type: "POST",
url: "/sl_language.html",
data: dataString,
success: function(response)
{
  location.reload();
}
});
});
</script>

