<script src="<?php echo base_url(); ?>/themes/admin/dropzone.js"></script>
 <link href="<?php echo base_url(); ?>/themes/admin/dropzone.css" media="all" rel="stylesheet" />
 <script>
Dropzone.options.myDropzone = {
	maxFiles: 1,
  	accept: function(file, done) {
    	console.log("uploaded");
    	done();
  	},
    init: function() {
    	  this.on("addedfile", function() {
      if (this.files[1]!=null){
        this.removeFile(this.files[0]);
      }
      });
        thisDropzone = this;
        $.get('/load_thumb_post.html', function(data) {

            $.each(data, function(key,value){
                 
                var mockFile = { size: value.id, name:value.thumb_post };
                 
                thisDropzone.options.addedfile.call(thisDropzone, mockFile);
 
                thisDropzone.options.thumbnail.call(thisDropzone, mockFile, ""+value.thumb_post);
                 
            });
             
        });
    }


};
</script>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Add New Post</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>Add New Post</b>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-8">
						<ul id="myTab" style="margin-bottom: 3%;"class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#langfirst" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Language First</a></li>
							<li role="presentation" class=""><a href="#langsecond" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Language Second</a></li>
							<li role="presentation" class=""><a href="#langthird" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Language Third</a></li>
						</ul>
						<form method="post" action="/ac_c_post.html">
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane active in" id="langfirst" aria-labelledby="home-tab">
									<div class="form-group">
										<input id="title_lang1" required name="title_lang1" placeholder="Enter title post language first here" class="form-control">
									</div>
									<div class="form-group">
										<label>Short Description:</label>
										<textarea name="short_des_lang1" style="width:100%; height: 90px"></textarea>
									</div>
									<div class="form-group">
										<textarea required name="add_content_lang1" class="textarea" required></textarea>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="langsecond" >
									<div class="form-group">
										<input name="title_lang2" placeholder="Enter title post language second here " class="form-control">
									</div>
									<div class="form-group">
										<label> Short description:</label>
										<textarea name="short_des_lang2" rows="4" cols="90"></textarea>
									</div>
									<div class="form-group">
										<textarea name="add_content_lang2" class="textarea" required></textarea>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="langthird">
									
									<div class="form-group">
										<input name="title_lang3"  placeholder="Enter title post language third here" class="form-control">
									</div>
									<div class="form-group">
										<label> Short description:</label>
										<textarea name="short_des_lang3" rows="4" cols="90"></textarea>
									</div>
									<div class="form-group">
										<textarea name="add_content_lang3" class="textarea" required></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<label>Category:</label>
							<div class="form-group">
								<select name="category" class="form-control" >
									<option value="0">None</option>
									<?php foreach ($load_category as $p) {
										echo '<option value="'.$p->id.'">'.$p->title_lang1.'</option>';
									} ?>
								</select>
							</div>
							<div class="form-group">
								<p align="right"><button type="submit" class="btn btn-primary">Create Post</button></p>
							</div>
						</form>
						<form action="/up_thumb_post.html" id="my-dropzone" class="dropzone dz-clickable">
							<div class="uploaded-file" style="display:none;"> <!-- this div is hidden and repeated for each file on server -->
							
						</div>
						<div class="col-sm-6 col-sm-offset-3 dz-message" style="margin-left:70px;margin-top: 35%;">
							<i class="fa fa-cloud-upload fa-5x"></i>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script src="<?php echo base_url(); ?>themes/admin/js/jquery-1.11.0.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/libraries/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace('add_content_lang1', {});
CKEDITOR.replace('add_content_lang2', {});
CKEDITOR.replace('add_content_lang3', {});
$(document).ready(function()
{
$("#title_lang1").change(function()
{
var name=$("#title_lang1").val();
var dataString="name_post="+name;
$.ajax({
type: "POST",
url: "/ss_post.html",
data: dataString,
success: function(response)
{
}
});
});
});
</script>

