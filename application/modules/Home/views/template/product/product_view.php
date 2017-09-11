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
				<a href="<?php echo base_url();?>Product/add_product" style="float:right;color:white;"class="btn btn-primary">Add Product</a>	
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
								  <th>Product Name</th>
								  <th>Price</th>
					
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

						  	<?php
						  	foreach($product_list as $details){ 
						  	?>
							<tr>
								
								<td class="center"><?php echo $details['product_name'];?></td>
								
								<td class="center"><?php echo $details['price']?></td>
							
						
								<td class="center">

									<?php if($details['status']=="1"){ ?>
									<span class="label label-success">Active</span>
									<?php }else{?>
									<span class="label label-danger">Inactive</span>
									<?php }?>	
								</td>

								<td class="center">
									<a class="btn btn-success" href="<?php echo base_url();?>Product/product_detailsView/<?php echo $details['id']?>">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger"  href="javascript:;" onclick="return goDelete('<?php echo $details['id'];?>');">
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

<script type="text/javascript">

  function goDelete(id){
    var agree = confirm("Are you sure you want to delete this?");
    if(agree){
    	      $.ajax({
            url: '<?php echo base_url().'Product/deleteProductByid/'?>',
            type: 'post',
            data: {id:id},
            success: function(data) {
         window.location.href = "<?php echo base_url().'Product/product_manager/'?>";
            },
            error: function () {
            //     alert('ajax failure');
            }
        });
    	     
      // $.post('<?php echo base_url().'Product/deleteProductByid/'?>', {id:id}, function(){
   
    }else{
      return false;
    }
  }
</script>