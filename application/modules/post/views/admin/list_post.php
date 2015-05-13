<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">List Post</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
			
				<div align="right">
					<a href="/c_post.html" type="button" class="btn btn-primary">Create Post</a>
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
						<th>Thumb post</th>
						<th>Name Post</th>
						<th></th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>#</th>
						<th>Thumb Post</th>
						<th>Name Post</th>
						<th></th>
					</tr>
				</tfoot>

				<tbody>
					<?php 
						$i=1;
						foreach ($load_post as $dt) {
						echo '<tr>';
						echo '<td>'.$i++.'</td>';
						echo '<td><img src="'.$dt->thumb_post.'" height="100px"/></td>';
						echo '<td>'.$dt->name_post_lang1.'</td>';
						echo '<td><a href="/edit_post.html?id='.$dt->id_post.'">Edit</a> || <a href="/del_post.html?id='.$dt->id_post.'" style="color:red">Delete</a> </td>';
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





