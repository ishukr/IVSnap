
<?php
//index.php

?>
<!DOCTYPE html>
<html>
	<head>
		<title>IVCrop</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        
		<link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
		<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
		<script src="https://unpkg.com/dropzone"></script>
		<script src="https://unpkg.com/cropperjs"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>

		.image_area {
		  position: relative;
		}

		img {
		  	display: block;
		  	max-width: 100%;
		}

		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}

		.overlay {
		  position: absolute;
		  
		  left: 0;
		  right: 0;
		  background-color: rgba(255, 255, 255, 0.5);
		  overflow: hidden;
		  height: 0;
		  transition: .5s ease;
		
		}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
		.image_area:hover .overlay {
		  height: 50%;
		  cursor: pointer;
		}

		.text {
		  color: #333;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
		
		</style>
	</head>
	<body style="background-color: #000000;">
		<div class="container" align="center">
			<br />
	
			<br />
			<div class="row">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4">
					<div class="image_area">
						<form method="post">
							<label for="upload_image">
							    <div class="container">
								<img src="pf_images/person.jpg" id="uploaded_image" class="img-responsive img-circle" />
								<div class="centered"><span style="color: rgb(255, 255, 255);">Tap to Update<br></span></div>
</div>
							
								<input type="file" name="image" class="image" id="upload_image" style="display:none" accept=".jpg, .jpeg" />
							</label>
						</form>
					</div>
			    </div>
    		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<div id="uploadpending"></div>
			      		    <div id="uploadStatus"></div>
			      			<button type="button" id="crop" class="btn btn-primary">Update</button>
			        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<div class="img-container">
			            		<div class="row">
			                		<div class="col-md-8">
			                    		<img src="" id="sample_image" />
			                		</div>
			                		<div class="col-md-4">
			                    		<div class="preview"></div>
			                		</div>
			            		</div>
			        		</div>
			      		</div>
			      		<div class="modal-footer">
			      		    
			      		</div>
			    	</div>
			  	</div>
			</div>			
		</div>
	</body>
</html>

<script>

$(document).ready(function(){

	var $modal = $('#modal');

	var image = document.getElementById('sample_image');

	var cropper;

	$('#upload_image').change(function(event){
		var files = event.target.files;

		var done = function(url){
			image.src = url;
			$modal.modal('show');
		};

		if(files && files.length > 0)
		{
			reader = new FileReader();
			reader.onload = function(event)
			{
				done(reader.result);
			};
			reader.readAsDataURL(files[0]);
		}
	});

	$modal.on('shown.bs.modal', function() {
		cropper = new Cropper(image, {
			aspectRatio: 1,
			viewMode: 3,
			preview:'.preview'
		});
	}).on('hidden.bs.modal', function(){
		cropper.destroy();
   		cropper = null;
	});

	$('#crop').click(function(){
		canvas = cropper.getCroppedCanvas({
			width:500,
			height:500
		});

		canvas.toBlob(function(blob){
			url = URL.createObjectURL(blob);
			var reader = new FileReader();
			reader.readAsDataURL(blob);
			reader.onloadend = function(){
			    jQuery('#crop').html('<p style="color:#000000;">Updating....</p>');
			jQuery('#crop').attr('disabled',true);
				var base64data = reader.result;
				
				$.ajax({
					url:'update_profile.php',
					method:'POST',
					data:{image:base64data},
					success:function(data)
					{
					    $('#uploadStatus').html('<p style="color:#000000;">Successfully Updated </p>');
					      window.location.href = "snapprofile.php";
					   
						//$modal.modal('hide');
					//	$('#uploaded_image').attr('src', data);
					}
				});
			};
		});
	});
	
});

</script>

