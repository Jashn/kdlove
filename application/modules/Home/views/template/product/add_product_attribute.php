<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$url = $this->uri->segment(2);
$new_url = explode("_", $url);
$nav_url = ucfirst($new_url[0]);
$heading = ucfirst($new_url[1]);
$heading1 = ucfirst($new_url[2]);

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
					<a href="#"><?php echo $nav_url." ". $heading." ".$heading1;?></a>

				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span><?php echo $nav_url." ". $heading." ".$heading1;?></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
								<?php echo form_open('Product/add_product_attribute',array(
						'class' => 'form-horizontal'
						)); ?>
						<!-- <form class="form-horizontal" id="contact-form" action="<?php echo base_url();?>Vendor/add_vendor_attribute" method="post"> -->
						  <fieldset>


						<div class="control-group">
							<label class="control-label" for="selectError">Select Category</label>
							<div class="controls">
								<select id="category" class="dropone"   name="product_category" >
									<option value="">Select Category</option>
									<?php foreach($get_vendor_category as $category){?>

									<option value="<?php echo $category['id'];?>"><?php echo  isset($category['category_name']) ?$category['category_name']:"";?></option>
									<?php }?>
								</select>
								<div class="validation_error"><?php echo form_error('product_category'); ?></div>
							</div>
						</div>

							  <div class="control-group">
								<label class="control-label">Attribute Name</label>
								<div class="controls">
								  <input type="text" name="attribute_name"  id="name-input" >
								  <div class="validation_error"><?php echo form_error('attribute_name'); ?></div>
								</div>
							  </div>
							    <div class="control-group">
								<label class="control-label">Attribute Values</label>
								<div class="controls">
								  <!-- <input type="text" name="attribute_value"  id="name-input" > -->
								<div class="container1">
									<div>
									<input type="text" name="attribute_value[]"><button class="add_form_field"> &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button></div>
								  </div>
								  <!-- <div class="validation_error"><?php echo form_error('attribute_value'); ?></div> -->
								</div>
							</div>



					  		  <div class="control-group">
								<label class="control-label" for="selectError3">Attribute Type</label>
								<div class="controls">
								  <select id="selectError3" name="type">
									<option value="input box">Input Box</option>
									<option value="dropdown">Drop down</option>
									<option value="radio">Radio button</option>
									
								  </select>
								 <div class="validation_error"><?php echo form_error('type'); ?></div> 
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
<script>

$(document).ready(function() {
        var max_fields      = 10;
        var wrapper         = $(".container1");
        var add_button      = $(".add_form_field");

        var x = 1;
        $(add_button).click(function(e){
            e.preventDefault();
            if(x < max_fields){
                x++;
            	$(wrapper).append('<div><input type="text" name="attribute_value[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
            }
      else
      {
      alert('You Reached the limits')
      }
        });

        $(wrapper).on("click",".delete", function(e){
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>

