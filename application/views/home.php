<!DOCTYPE html>
<html lang="en">

<?php
  include('header.php');
  ?>

<body>
		<!-- start: Header -->
    <?php
      include('nav.php');
      ?>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
      <?php
        include('sidebar.php');
        ?>
			<!-- end: Main Menu -->



			<!-- start: Content -->
			<div id="content" class="span10">


			<div class="row-fluid sortable">
						<div class="box span12">
							<div class="box-header" data-original-title>
								<h2><i class="halflings-icon th-list"></i><span class="break"></span>Customers</h2>
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
									<i class="halflings-icon white plus-sign"></i>Add new
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
				foreach ($results as $value): ?>

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
			 <?php endforeach; ?>

			<?php else:?>
				<tr>No records found</tr>
			<?php endif;?>


									</tbody>
								</table>
							</div>
						</div><!--/span-->

					</div><!--/row-->
			</div>
			<div class="row-fluid">



			</div>
	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	<div class="clearfix"></div>

  <?php
    include('footer.php');
    ?>
</body>
</html>
