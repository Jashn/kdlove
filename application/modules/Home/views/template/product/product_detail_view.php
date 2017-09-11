	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$url = $this->uri->segment(2);
$new_url = explode("_", $url);
$nav_url = ucfirst($new_url[0]);
$heading = ucfirst($new_url[1]);

$name = isset($product_list['product_name'])? $product_list['product_name']:"";
$price = isset($product_list['price'])? $product_list['price']:"";
$description_1 = isset($product_list['description1'])? $product_list['description1']:"";
$description_2 = isset($product_list['description2'])? $product_list['description2']:"";

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
						<form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Product Name</label>
								<div class="controls">
								  <input class="input-xlarge disabled" style="width:40%" id="disabledInput" type="text" value="<?php echo $name; ?>" disabled="">
								</div>
							  </div>
							  
							    <div class="control-group">
								<label class="control-label" for="disabledInput">Price</label>
								<div class="controls">
								  <input class="input-xlarge disabled" style="width:40%"  id="disabledInput" type="text" value="<?php echo $price; ?>" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Description 1</label>
								<div class="controls">
								  <textarea row="10" style="width:40%"  cols="10" class="input-xlarge disabled" id="disabledInput" type="text" value="" disabled=""><?php echo htmlspecialchars_decode($description_1); ?></textarea>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Disscription 2</label>
								<div class="controls">
								<textarea row="10" style="width:40%"  cols="10" class="input-xlarge disabled" id="disabledInput" type="text" value="" disabled=""><?php echo htmlspecialchars_decode($description_2); ?></textarea>
								</div>
							  </div>	

						<?php 
						foreach($attribute_valueidArray as $att_id){
							$value = $this->Product_manage_model->getAllattributeDetails($att_id);	
							$get_attributeName = $this->Product_manage_model->getdetailsByid($value['attribute_id'],'product_attribute');	
						?>
												
				 <div class="control-group">
								<label class="control-label" for="disabledInput">Attribute</label>
								<div class="controls">
								  <input class="input-xlarge disabled" style="width:40%"  id="disabledInput" type="text" value=<?php echo $get_attributeName['attribute_name']; ?> disabled="">
								  <label class="" for="disabledInput"><strong>Value:  </strong><?php echo $value['values']; ?></label>
								</div>
						  	</div>
							<?php }?> 
	
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Back</button>
				
							  </div>
							</fieldset>	
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->