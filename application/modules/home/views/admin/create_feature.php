<script src="<?php echo base_url(); ?>/themes/admin/dropzone.js"></script>
<link href="<?php echo base_url(); ?>/themes/admin/dropzone.css" media="all" rel="stylesheet" />

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
		<b>Add New Feature</b></h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" style="height: 55px;">
				<form method="post" action="/create_feature.html">
				<div class="button" align="right">
					<button type="submit" class="btn btn-primary">Create</button>
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-8">
						
						
							<div class="form-group">
								<label>Name Feature:</label>
								<input id="name_feature" required type="text" name="name_feature" class="form-control" />
							</div>
							<div class="form-group">
								<label>Website:</label>
								<input required type="text" required name="web_feature" class="form-control" />
							</div>
							<div class="form-group">
								<label>Link Catalog:</label>
								<input required type="text" name="link_catalog_feature" class="form-control" />
							</div>
						</div>
						</form>
						<div class="col-lg-4">
						<form action="/up_thumb_feature.html" id="my-dropzone" class="dropzone dz-clickable">
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
<script type="text/javascript">
$(document).ready(function()
{
$("#name_feature").change(function()
{
var name=$("#name_feature").val();
var dataString="name_feature="+name;
$.ajax({
type: "POST",
url: "/ss_create_features.html",
data: dataString,
success: function(response)
{
}
});
});
});</script>
