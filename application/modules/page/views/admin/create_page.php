<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Add New Page</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>Add New Page</b>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-8">
						<ul id="myTab" style="margin-bottom: 3%;"class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#langfirst" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Language First</a></li>
							<li role="presentation" class=""><a href="#langsecond" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Language Second</a></li>
							<li role="presentation" class=""><a href="#langthird" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Language Third</a></li>
						</ul>
						<form method="post" action="/c_page.html">
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane active in" id="langfirst" aria-labelledby="home-tab">
								<div class="form-group">
									<input required name="title_page_lang1" placeholder="Enter title page language first here" class="form-control">
								</div>
								<div class="form-group">
									<textarea required name="add_content_lang1" class="textarea" required></textarea>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="langsecond" >
								<div class="form-group">
									<input name="title_page_lang2" placeholder="Enter title page language second here " class="form-control">
								</div>
								<div class="form-group">
									<textarea name="add_content_lang2" class="textarea" required></textarea>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="langthird">
								<div class="form-group">
									<input name="title_page_lang3" placeholder="Enter title page language third here" class="form-control">
								</div>
								<div class="form-group">
									<textarea name="add_content_lang3" class="textarea" required></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<label>Option page:</label>
						<div class="form-group">
							<select name="type_page" class="form-control" >
								<option value="0">Page</option>
								<option value="1">Inquiries</option>
								<option value="2">Post a review</option>
							</select>
						</div>
						<div class="form-group">
							<p align="right"><button type="submit" class="btn btn-primary">Create page</button></p>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>/libraries/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace('add_content_lang1', {});
CKEDITOR.replace('add_content_lang2', {});
CKEDITOR.replace('add_content_lang3', {});
</script>

