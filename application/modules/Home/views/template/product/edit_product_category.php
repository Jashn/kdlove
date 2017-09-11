	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$url = $this->uri->segment(2);
$new_url = explode("_", $url);
$nav_url = ucfirst($new_url[0]);
$heading = ucfirst($new_url[1]);

$category_name = isset($items['category_name'])? $items['category_name']:"";
$description = isset($items['desc'])? $items['desc']:"";
$id = isset($items['id'])? $items['id']:"";
?>

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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<?php echo form_open('Product/edit_product_category/'.$id.'',array(
						'class' => 'form-horizontal'
						)); ?>
							<fieldset>
					  		<div class="control-group">
								<label class="control-label" for="disabledInput">Category Name</label>
								<div class="controls">
								  	<input class="input-xlarge disabled" name="category_name" style="width:40%" id="disabledInput" type="text" value="<?php echo $category_name; ?>">
								  	 <div class="validation_error"><?php echo form_error('category_name'); ?></div>
								</div>
							  </div>

							 
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Description </label>
								<div class="controls">
								  <textarea row="10" style="width:40%" name="desc" cols="10" class="input-xlarge disabled" id="disabledInput" type="text" value="" ><?php echo htmlspecialchars_decode($description); ?></textarea>
								  <div class="validation_error"><?php echo form_error('desc'); ?></div>
								</div>
							  </div>
							  
						
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">submit</button>
				
							  </div>
							</fieldset>	
							<?php echo form_close( ); ?>	
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->