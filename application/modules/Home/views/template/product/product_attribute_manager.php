<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$url = $this->uri->segment(2);
$new_url = explode("_", $url);
$nav_url = ucfirst($new_url[0]);
$heading = ucfirst($new_url[1]);


?>
			<?php if($this->session->flashdata('success')){?>
	  <div class="alert alert-success" id="success_alert">      
	    <?php echo $this->session->flashdata('success');?>
	  </div>
	<?php } ?>
		<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url();?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#"><?php echo $nav_url." "."Manager";?></a></li>
				<a href="<?php echo base_url();?>Product/add_product_attribute" style="float:right;color:white;"class="btn btn-primary">Add Attribute</a>	
			</ul>
	

			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span><?php echo $heading; ?></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>


							  <tr>
								  <th>Title</th>
								
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

						  	<?php
						  	foreach($vendor_cat as $get_info){ 
						  	?>
							<tr>
								
								<td class="center"><?php echo $get_info['attribute_name'];?></td>
							
						
					
								<td class="center">

									<?php if($get_info['status']=="1"){ ?>
									<span class="label label-success">Active</span>
									<?php }else{?>
									<span class="label label-danger">Inactive</span>
									<?php }?>	
								</td>

								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php }?>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

				