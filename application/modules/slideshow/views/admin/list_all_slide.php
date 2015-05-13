<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">List Slideshow</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
			
				<div align="right">
					<a href="/c_slideshow.html" type="button" class="btn btn-primary">Create Slideshow</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
							<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/themes/admin/css/jquery.dataTables.css">
<table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>#</th>
						<th>Slideshow </th>
						<th></th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>#</th>
						<th>Slideshow </th>
						<th></th>
					</tr>
				</tfoot>

				<tbody>
					<?php 
						$i=1;
						foreach ($slide as $s) {
						echo '<tr>';
						echo '<td align="center">'.$i++.'</td>';
						echo '<td><img src="'.$s->link_img.'" width="320px" height="100px"/></td>';
						echo '<td> <a href="/del_slideshow.html?id='.$s->id.'" style="color:red">Delete</a> </td>';
						echo '</tr>';
					} ?>

				</tbody>
			</table>

					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>

