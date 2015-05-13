<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4><b>Detail Comment </b></h4>
		</div>
		<div class="panel-body">
			<?php 
						$type=$data['0']->type_page;
						switch ($type) {
							case '2':
								echo "<div class='row'>";
								echo '<div style="font-size:20px;margin-left:20px;  font-weight: bold;" >Post A Review</div></br>';
								echo '<div class="col-xs-6">';
								echo "<div class='form-group'>";
								echo "<b> Email: </b>".$data['0']->email."</br>";
								echo "</div>";
								echo "<div class='form-group'>";
								echo "<b> Body: </b>".$data['0']->body."</br>";
								echo "</div>";
								echo "</div>";
								echo '<div class="col-xs-6">';
								echo "<div class='form-group'>";
								echo "<b> Product: </b>".$data['0']->product."</br>";
								echo "</div>";
								echo "</div>";
								echo "</div>";;
								break;
							
							default:
								echo "<div class='row'>";
								echo '<div style="font-size:20px;margin-left:20px;  font-weight: bold;" >Inquiries & Solutions</div></br>';
								echo '<div class="col-xs-6">';
								echo "<div class='form-group'>";
								echo "<b> Email: </b>".$data['0']->email."</br>";
								echo "</div>";
								echo "<div class='form-group'>";
								echo "<b> Name: </b>".$data['0']->name."</br>";
								echo "</div>";
								echo "</div>";
								echo '<div class="col-xs-6">';
								echo "<div class='form-group'>";
								echo "<b> Company: </b>".$data['0']->company."</br>";
								echo "</div>";
								echo "<div class='form-group'>";
								echo "<b> Body: </b>".$data['0']->body."</br>";
								echo "</div>";
								echo "</div>";
								echo "</div>";
								break;
						}
					 ?>

			
		</div>
		
	</div>
	
</div>
