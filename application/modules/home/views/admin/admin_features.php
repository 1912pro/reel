<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Features</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
			
				<div align="right">
					<a href="/add_feature.html" type="button" class="btn btn-primary">Create Feature</a>
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
						<th>Image Feature</th>
						<th>Name Feature</th>
						<th>Website Feature</th>
						<th>Link Catalog Feature</th>
						<th></th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>#</th>
						<th>Image Feature</th>
						<th>Name Feature</th>
						<th>Website Feature</th>
						<th>Link Catalog Feature</th>
						<th></th>
					</tr>
				</tfoot>

				<tbody>
					<?php $i=1;
						foreach ($data as $dt) {
						echo '<tr>';
						echo '<td>'.$i++.'</td>';
						echo '<td><img height="100px" src="'.$dt->thumb_img.'"/></td>';
						echo '<td>'.$dt->name.'</td>';
						echo '<td>'.$dt->website.'</td>';
						echo '<td>'.$dt->link_download.'</td>';
						echo '<td><a href="/edit_feature.html?id='.$dt->id.'">Edit</a> || <a href="/del_feature.html?id='.$dt->id.'" style="color:red">Delete</a> </td>';
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





