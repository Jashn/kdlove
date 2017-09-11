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


<style>
input:focus,textarea:focus{
    border-color: initial;
}

input.error, textarea.error{
    border:1px solid red;
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

			<div class="row-fluid sortable">
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
								<?php echo form_open('Product/add_category',array(
						'class' => 'form-horizontal'
						)); ?>
						<!-- <form class="form-horizontal" id="contact-form" action="<?php echo base_url();?>Vendor/add_category" method="post"> -->
						  <fieldset>
							  <div class="control-group">
								<label class="control-label">Category Name</label>
								<div class="controls">
								  <input type="text" name="category_name"  id="name-input" >
								  <div class="validation_error"><?php echo form_error('category_name'); ?></div>
								</div>
							  </div>


							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor"  name="description" id="textarea2" rows="3"></textarea>
								<div class="validation_error"><?php echo form_error('description'); ?></div>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" value="submit" name="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						<!-- </form>    -->
							<?php echo form_close( ); ?>
					</div>
				</div><!--/span-->

			</div><!--/row-->


<script>
 $(document).ready(function() {
   $('#contact-form').find('.error').val(' ');
     $('input, textarea').click(function() {
      $(this).removeClass('error').val('');
    });
     
     var name = $('#name-input').val();
     
     if(name == ''){
       $('#name-input').addClass('error');   
     }
 });
</script>

