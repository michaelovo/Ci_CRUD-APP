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
                  <h2><i class="halflings-icon edit"></i><span class="break"></span>CRUP APP</h2>
                <div class="box-icon">
                  <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                  <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                  <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>

                </div>
              </div>


              <div class="box-content">


              <?php echo form_open("Home_controller/update/{$data->id}",["class"=>"form-horizontal"]); ?>
                  <fieldset>

                    <div class="control-group">
                    <label class="control-label" for="focusedInput">Name</label>
                      <div class="controls">

                        <?php echo form_input(["name"=>"customer_name","placeholder"=>"Customer name","value"=>set_value("customer_name",$data->customer_name)]);?>
                      </div>
                        <div class="controls span3">
                        <?php echo form_error('customer_name');?>
                      </div>
                    </div>

                    <div class="control-group">
                    <label class="control-label" for="focusedInput">Phone</label>
                      <div class="controls">

                          <?php echo form_input(["name"=>"phone","placeholder"=>"contact phone","value"=>set_value("phone",$data->phone)]);?>
                      </div>
                        <div class="controls span3">
                        <?php echo form_error('phone');?>
                      </div>
                    </div>

                    <div class="control-group">
                    <label class="control-label" for="focusedInput">Address</label>
                      <div class="controls">

                        <?php echo form_input(["name"=>"address","placeholder"=>"contact address","value"=>set_value("address",$data->address)]);?>

                      </div>
                        <div class="controls span3">
                        <?php echo form_error('address');?>
                      </div>
                    </div>


                    <div class="control-group">
                    <label class="control-label" for="focusedInput" >City</label>
                      <div class="controls">
                        <?php echo form_input(["name"=>"city","placeholder"=>"Current city","value"=>set_value("city",$data->city)]);
                        ?>
                      </div>
                      <div class="controls span3">
                        <?php echo form_error('city');?>
                      </div>
                    </div>

                    <div class="control-group">
                    <label class="control-label" for="focusedInput">Country</label>
                      <div class="controls">
                      <?php echo form_input(["name"=>"country","placeholder"=>"Country","value"=>set_value("country",$data->country)]);
                      ?>
                      </div>
                        <div class="controls span3">
                        <?php echo form_error('country');?>
                      </div>
                  </div>



                    <div class="form-actions">
                      <?php echo form_submit(['value'=>'Save changes','class'=>"btn btn-primary"]); ?>
                      <?php echo form_reset(['value'=>'Cancel','class'=>"btn btn-warning"]); ?>

                    </div>
                  </fieldset>
                  <?php echo form_close(); ?>

              </div>


            </div><!--/span-->

          </div><!--/row-->

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
