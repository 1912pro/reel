<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
<div class="panel-heading">
<b>Edit Category</b>
</div>
<div class="panel-body">
	<?php foreach ($info_cat as $if) { ?>
	
		<form role="form" method="post" action="/update_category.html">
<div class="form-group">
<label>Name category language  </label>
<input value="<?php echo $if->title_lang1; ?>" name="name_lang1" type="text" placeholder="Please enter text" required class="form-control">
</div>
<div class="form-group">
<label>Name category language2 </label>
<input value="<?php echo $if->title_lang2; ?>" name="name_lang2" type="text" placeholder="Please enter text" required class="form-control">
</div>
<div class="form-group">
<label>Name category language3 </label>
<input value="<?php echo $if->title_lang3; ?>" name="name_lang3" type="text" placeholder="Please enter text" required class="form-control">
</div>
<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<label>Parent category </label>
	<select name="parent_category" class="form-control">
		<option value="0">None</option>
		<?php foreach ($load_category as $dt)
				{
					if ($dt->id == $if->level)
					echo '<option selected value="'.$dt->id.'">'.$dt->title_lang1.'</option>';
				else
					echo '<option value="'.$dt->id.'">'.$dt->title_lang1.'</option>';
				}
		 ?>
	</select>
	</div>

<?php 	
	} ?>
<button type="submit" class="btn btn-primary">Edit Category</button>
</form>
</div>
	</div>	
</div>
</div>

