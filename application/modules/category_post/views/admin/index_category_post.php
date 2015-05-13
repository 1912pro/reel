<div class="row">
	<div class="col-lg-5">
	<div class="panel panel-default">
<div class="panel-heading">
<b>Add New Category</b>
</div>
<div class="panel-body">
	
		<form role="form" method="post" action="/create_category_post.html">
<div class="form-group">
<label>Name category language  </label>
<input name="name_lang1" type="text" placeholder="Please enter text" required class="form-control">
</div>
<div class="form-group">
<label>Name category language2 </label>
<input name="name_lang2" type="text" placeholder="Please enter text" required class="form-control">
</div>
<div class="form-group">
<label>Name category language3 </label>
<input name="name_lang3" type="text" placeholder="Please enter text" required class="form-control">
</div>

<div class="form-group">
	<label>Parent category </label>
	<select name="parent_category" class="form-control">
		<option value="0">None</option>
<?php select_menu($load_category); ?>
	</select>
	</div>
<div class="form-group">
<label>Decription </label>
<textarea name="Decription" class="form-control" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Add New Category</button>
</form>
</div>
	</div>	
</div>
	<div class="col-lg-7">
		<div class="panel panel-default">
<div class="panel-heading">
<b>Category post</b>
</div>
<div class="panel-body">
	
		
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th align="center">Name</th>
						<th align="center">alias</th>
						<th align="center" ></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$l_edit='edit_category';
					$l_del='delete_category';
					load_menu($load_category,$l_edit,$l_del); ?>

				</tbody>
			</table>
		</div>
	</div>
</div>
	</div>
</div>
