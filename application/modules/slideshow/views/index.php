
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-inner" role="listbox">
    <?php 
    $i=0;
    foreach ($slide as $s) {
      if ($i==0)
      {
        echo '<div class="item active">';
      }
      else
        {
          echo '<div class="item">';
        }
      echo '<img  src="'.$s->link_img.'">';
      echo '</div>';
      $i++;
    } ?>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--END SLIDE -->
