<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Add New Slideshow</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>Add New Slideshow</b>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group">

							<form enctype="multipart/form-data" action="/up_slideshow.html" id="form1" method="post">
						<input type='file'id="imgInp" name="userfile" />
						<img id="blah" src="#" alt="your image" />
					</br>
						<button type="submit" class="btn btn-sm btn-success">Create Slideshow</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
  <script src="<?php echo base_url(); ?>/themes/admin/js/jquery-1.11.0.js"></script>

<script type="text/javascript">
$( document).ready(function() {    
    $("#blah").hide();
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        $("#blah").show();
        readURL(this);
    });
});
</script>
<style type="text/css">
#blah
{
    width:960px;
    height:300px;
    margin: 10px;
}
#form1
{
	margin-left:10px;
}
</style>
