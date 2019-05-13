<?php
	include('header.php');
?>
<?php
	include('nav.php');
?>

	<?php
		include('sidebar.php');
	?>



<!-- start: Content -->
<div id="content" class="span10">
	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>

						</div>
					</div>




					<div class="box-content">
								<div class="center">

							<?php if($error = $this->session->flashdata('response')):?>
										<div class="alert alert-dismissible alert alert-success">
												<button type="button" class="close" data-dismiss="alert">×</button>
														<i class="halflings-icon info-sign"></i>
															<?php echo $error; ?>
										</div>
						 <?php endif; ?>

						 	<!--This is an alternative -->
						<?php //echo anchor("Home_controller/create",'Create',['class'=>'btn btn-success']);?>

						<a class="btn btn-success" href="<?php echo site_url("Home_controller/create/");?>">
							<i class="halflings-icon white user"></i>Add new
						</a>



							 </div>
							 <?php echo br(1); ?>

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
									<!--th>id</th-->
								  <th>Username</th>
								  <th>Phone</th>
								  <th>Address</th>
								  <th>City</th>
									<th>Country</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  <tbody>

<?php if(count($results)): ?>
								<?php
		foreach ($results as $value) {?>

	<tr>

				<!--td class="center"><?php //echo $value->id; ?></td-->
				<td class="center"><?php echo $value->customer_name; ?></td>
				<td class="center"><?php echo $value->phone; ?></td>
				<td class="center"><?php echo $value->address; ?></td>
				<td class="center"><?php echo $value->city; ?></td>
				<td class="center"><?php echo $value->country; ?></td>


				<td class="center">

							<a class="btn btn-primary" href="<?php echo site_url("Home_controller/edit/{$value->id}");?>">
								<i class="halflings-icon white edit"></i>
							</a>

					<a class="btn btn-danger" href="<?php echo site_url("Home_controller/delete/{$value->id}");?>">
						<i class="halflings-icon white trash"></i>
					</a>

				</td>
		 </tr>

		<?php }?>
	<?php else: ?>
		<tr>No records found</tr>
	<?php endif;?>


						  </tbody>
					  </table>
					</div>
				</div><!--/span-->

			</div><!--/row-->
</div>


<?php
	include('footer.php');
?>
