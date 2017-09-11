

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$url = $this->uri->segment(2);
$new_url = explode("_", $url);
$nav_url = ucfirst($new_url[0]);
$heading = ucfirst($new_url[1]);
?>

<?php
if(($this->session->flashdata('item'))!="") {
  $message = $this->session->flashdata('item');
  ?>
<div class='<?php echo  $message['class']; ?>'<?php echo $message['message']; ?>
>
</div>	
<?php 
}
?>

 <link rel="shortcut icon" href="<?php echo base_url() . 'assets/img/favicon.png' ?>">


        <!-- Custom styles for this template -->
   		<link href="<?php echo base_url() . 'assets/css/main.css" rel="stylesheet' ?>">
        <link href="<?php echo base_url() . 'assets/css/croppic.css" rel="stylesheet' ?>">

        <!-- Fonts from Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Mrs+Sheppards&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<style>.myButton {
	-moz-box-shadow: 0px 10px 22px -7px #3e7327;
	-webkit-box-shadow: 0px 10px 22px -7px #3e7327;
	box-shadow: 0px 10px 22px -7px #3e7327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
	background:-moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-o-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352',GradientType=0);
	background-color:#77b55a;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:28px;
	font-weight:bold;
	padding:8px 76px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
	background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
	background-color:#72b352;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>



		 <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#"><?php echo $nav_url." ". $heading;?></a>
				</li>
			</ul>

			<div class="">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span><?php echo $nav_url." ". $heading;?></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php echo form_open_multipart('Product/add_product',array(
						'class' => 'form-horizontal'
						)); ?>
				
						<!-- <form class="form-horizontal" action="<?php echo base_url(); ?>Vendor/add_wedding_items" enctype="multipart/form-data" method="post"> -->
						  <fieldset>
							  <div class="control-group">
								<label class="control-label">Name</label>
								<div class="controls">
								  <input type="text" name="product_name" id="inputSuccess">
								  <div class="validation_error"><?php echo form_error('product_name'); ?></div>
								</div>
							  </div>

					<!-- 		<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>
 -->							

						<div class="control-group">
							<label class="control-label" for="selectError">Select Category</label>
							<div class="controls">
								<select id="category" class="dropone"   name="product_category" >
									<option value="">Select Category</option>
									<?php foreach($get_product_category as $category){?>

									<option value="<?php echo $category['id'];?>"><?php echo  isset($category['category_name']) ?$category['category_name']:"";?></option>
									<?php }?>
								</select>
								<div class="validation_error"><?php echo form_error('product_category'); ?></div>
							</div>
						</div>

				  		<div class="control-group" id="attribute" >
							
										
						</div>


							<div class="control-group">
								<label class="control-label">Country</label>
								<div class="controls">
								  <input type="text" name="country" id="inputSuccess">
								  <div class="validation_error"><?php echo form_error('country'); ?></div>
								</div>
							  </div>

							  	<div class="control-group">
								<label class="control-label">Price</label>
								<div class="controls">
								  <input type="text" name="price" id="inputSuccess">
								  <div class="validation_error"><?php echo form_error('price'); ?></div>
								</div>
							  </div>

							  	<div class="control-group">
								<label class="control-label">State</label>
								<div class="controls">
								  <input type="text" name="state" id="inputSuccess">
								  <div class="validation_error"><?php echo form_error('state'); ?></div>
								</div>
							  </div>

							  	<div class="control-group">
							<label class="control-label">Address</label>
							<div class="controls">
							  <textarea type="text" class="cleditor" rows="3" cols="6" name="address" id="inputSuccess"></textarea>
							  <div class="validation_error"><?php echo form_error('address'); ?></div>
							</div>
						  </div>


							<div class="control-group">
							  <label class="control-label" >Featured</label>
							  <div class="controls">
								<input type="checkbox" class="myCheck2" name="featured" value="1">
							  </div>
							</div>  

						<div class="control-group"> 
						<label class="control-label">Upload Product</label> 
						<div class="controls">       
						<div class="dropzone">
								<div class="dz-message">
									<h3> Drag and Drop your files here Or Click here to upload</h3>
								</div>
							</div>
						</div>
						</div>
						<!--     <div class="control-group">
							  <label class="control-label" for="fileInput">Upload Images</label>
							  <div class="controls">
								<input  name="images" id="fileInput" type="file">	
							  </div>
							</div>   
 -->	
							<div class="control-group hidden-phone">
							 	
							    <label class="control-label" for="textarea2">Upload Image</label>
							    <div class="controls">
							     <div style="width:40%" id="cropContaineroutput"></div>
							   <input type="hidden" name="image"  id="cropOutput" style="width:100%; padding:5px 4%; margin:20px auto; display:block; border: 1px solid #CCC;" />
							   </div>
							</div>
					       
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">About</label>
							  <div class="controls">
								<textarea class="cleditor" name="description1" id="textarea2" rows="3"></textarea>
								<div class="validation_error"><?php echo form_error('description1'); ?></div>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="description2" id="textarea2" rows="3"></textarea>
								<div class="validation_error"><?php echo form_error('description2'); ?></div>
							 </div>

							</div>
							<div class="form-actions">
							  <button type="submit" value="submit" name="submit" class="btn btn-primary button">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						<!-- </form>    -->


				<?php echo form_close( ); ?>
					</div>
				</div><!--/span-->

			</div><!--/row-->
			   
			    <script>

                   var croppicContaineroutputOptions = {
                       uploadUrl: '<?php echo base_url() . "Product/img_save_to_file" ?>',
                       cropUrl: '<?php echo base_url() . "Product/img_crop_to_file" ?>',
                       outputUrlId: 'cropOutput',
                       modal: false,
                       loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
                       onBeforeImgUpload: function () { console.log('onBeforeImgUpload')},
                       onAfterImgUpload: function () {console.log('onAfterImgUpload')},
                       onImgDrag: function () {console.log('onImgDrag')},
                       onImgZoom: function () {console.log('onImgZoom')},
                       onBeforeImgCrop: function () {console.log('onBeforeImgCrop')},
                       onAfterImgCrop: function () {console.log('onAfterImgCrop')},
                       onReset: function () {console.log('onReset')},
                       onError: function (errormessage) {console.log('onError:' + errormessage)}
                   }

                   var cropContaineroutput = new Croppic('cropContaineroutput', croppicContaineroutputOptions);


            </script>


 <script type="text/javascript">
 	$(document).ready(function(){

		$(".mySelect").prop("disabled", true);

		$("input:checkbox").on("change",function(){

		$(this).next().prop("disabled", !$(this).prop("checked"));
		});
    })
</script>
	
<script type="text/javascript">

$(document).ready(function() {
	$('#attribute').hide();
    $('#category').on('change', function() {
		var category_id =  $(this).val();
 			$('#attribute').html('');
 			 
			 $.ajax({
				url: "<?php echo base_url('Product/add_product');?>",  
				type: 'post', // performing a POST request
			  data : {
			    category_id : category_id // will be accessible in $_POST['data1']
			  },
			  dataType: 'html',  
				success: function(data) {
			
			    $('#attribute').show();
				$('#attribute').html(data);
				//$('#attribute').first().remove();
				}
			});
   		 });
    });
</script>

<script type="text/javascript">

		Dropzone.autoDiscover = false;
		var file= new Dropzone(".dropzone",{
			url: "<?php echo base_url('Product/upload_files') ?>",
			// maxFilesize: 2,  // maximum size to uplaod 
			method:"post",
			// acceptedFiles:"image/*", // allow only images
			paramName:"userfile",
			// dictInvalidFileType:"Image files only allowed", // error message for other files on image only restriction 
			addRemoveLinks:true,
			autoProcessQueue: false
		});


		$('#status').change(function(){
			if($(this).val()=='Enable'){
				$('.alert-success').show();
				$('.alert-danger').hide();		
				file.processQueue();
			}else{
				$('.alert-success').hide();
				$('.alert-danger').show();
			}
		});
//Upload file onchange 

file.on("sending",function(a,b,c){
	a.token=Math.random();
	c.append("token",a.token); //Random Token generated for every files 
});


// delete on upload 

file.on("removedfile",function(a){
	var token=a.token;
	$.ajax({
		type:"post",
		data:{token:token},
		url:"<?php echo base_url('upload/delete') ?>",
		cache:false,
		dataType: 'json',
		success: function(res){
			// alert('Selected file removed !');			

		}

	});
});


</script>
