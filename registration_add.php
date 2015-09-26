<?php
include("includes/header.html");
include("includes/sidebar.html");
require "lib/db.php";
$db = new DbManager();
$genders = $db->execute("SELECT id, name FROM genders ORDER BY id ASC", array());
$martial_statuses = $db->execute("SELECT id, name FROM martial_statuses ORDER BY id ASC", array());
?>  

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Resident Registration
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
			<form role="form" method="post" action="registration.php">
			
			<div class="panel panel-info">
			  <div class="panel-heading">
				<h3 class="panel-title">Personal Information</h3>
			  </div>
			  <div class="panel-body">
				<div class="row">
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="first_name" required class="form-control" placeholder="First Name">
                            </div>
					</div>
                    <div class="col-lg-3">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input name="middle_name" class="form-control" placeholder="Middle Name">
                            </div>
                    </div>
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="last_name" required class="form-control" placeholder="Last Name">
                            </div>
                    </div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Suffix</label>
                                <input name="suffix" class="form-control" placeholder="Suffix Name">
                            </div>
                    </div>
                </div>
				
				<div class="row">
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Address Line 1</label>
                                <input name="address_line_1" required class="form-control" placeholder="Address Line 1">
                            </div>
					</div>
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Address Line 2</label>
                                <input name="address_line_2" class="form-control" placeholder="Address Line 2">
                            </div>
					</div>
					 <div class="col-lg-2">
                            <div class="form-group">
                                <label>Address Line 3</label>
                                <input name="address_line_3" class="form-control" placeholder="Address Line 3">
                            </div>
					</div>
					 <div class="col-lg-2">
                            <div class="form-group">
                                <label>Address Line 4</label>
                                <input name="address_line_4" class="form-control" placeholder="Address Line 4">
                            </div>
					</div>
					 <div class="col-lg-2">
                            <div class="form-group">
                                <label>Address Line 5</label>
                                <input name="address_line_5" class="form-control" placeholder="Address Line 5">
                            </div>
					</div>
                </div>
				
				
				<div class="row">
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" required class="form-control">
<?php foreach($genders as $g): ?>
		<option value="<?php echo $g['id'];?>" <?php if ($g['id'] == 1) echo 'selected'; ?>><?php echo $g['name'];?></option>
<?php endforeach; ?>
								</select>
                            </div>
					</div>
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Birthdate</label>
                                <input name="birth_date" required type="date" class="form-control">
                            </div>
					</div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Marital Status</label>
                                <select name="martial_status" required class="form-control">
<?php foreach($martial_statuses as $s): ?>
		<option value="<?php echo $s['id'];?>" <?php if ($s['id'] == 1) echo 'selected'; ?>><?php echo $s['name'];?></option>
<?php endforeach; ?>
								</select>
                            </div>
					</div>
                </div>
				
				<div class="row">
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Citizenship</label>
                                <input name="citizenship" required class="form-control" placeholder="Citizenship">
                            </div>
					</div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input name="contact_number" required class="form-control" placeholder="Contact Number">
                            </div>
					</div>
                </div>
				
			  </div>
			 
			</div>
			
              <center>
			  <button class="btn btn-success btn-xs">Save</button> <a href="registration.php" class="btn btn-default btn-xs">Cancel</a> <br><br>
			  </center>
				
			</form>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
