<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">List Page</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
			
				<div align="right">
					<a href="/create_page.html" type="button" class="btn btn-primary">Create Page</a>
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
						<th>Name page</th>
						<th>Type page</th>
						<th></th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>#</th>
						<th>Name page</th>
						<th>Type page</th>
						<th></th>
					</tr>
				</tfoot>

				<tbody>
					<?php $i=1;
						foreach ($load_page as $dt) {
						echo '<tr>';
						echo '<td>'.$i++.'</td>';
						echo '<td>'.$dt->title_lang1.'</td>';
						switch ($dt->type_page) {
							case '1':
								echo '<td>Inquiries</td>';
								break;
							case '2':
								echo '<td>Post A Review</td>';
								break;
							default:
								echo '<td>Page</td>';
								break;
						}
						echo '<td><a href="/edit_page.html?id='.$dt->id.'">Edit</a> || <a href="/del_page.html?id='.$dt->id.'" style="color:red">Delete</a> </td>';
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





