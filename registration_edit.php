<?php
include("includes/header.html");
include("includes/sidebar.html");
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
			<form role="form">
			
			<div class="panel panel-info">
			  <div class="panel-heading">
				<h3 class="panel-title">Personal Information</h3>
			  </div>
			  <div class="panel-body">
				<div class="row">
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>First Name</label>
                                <input required class="form-control" value="Catherine">
                            </div>
					</div>
                    <div class="col-lg-3">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input class="form-control" value="Cajes">
                            </div>
                    </div>
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input required class="form-control" value="Adonis">
                            </div>
                    </div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Suffix</label>
                                <input class="form-control" value="">
                            </div>
                    </div>
                </div>
				
				<div class="row">
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Address Line 1</label>
                                <input required class="form-control" value="Imus Cavite">
                            </div>
					</div>
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Address Line 2</label>
                                <input class="form-control" value="">
                            </div>
					</div>
					 <div class="col-lg-2">
                            <div class="form-group">
                                <label>Address Line 3</label>
                                <input class="form-control" value="">
                            </div>
					</div>
					 <div class="col-lg-2">
                            <div class="form-group">
                                <label>Address Line 4</label>
                                <input class="form-control" value="">
                            </div>
					</div>
					 <div class="col-lg-2">
                            <div class="form-group">
                                <label>Address Line 5</label>
                                <input class="form-control" value="">
                            </div>
					</div>
                </div>
				
				
				<div class="row">
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Gender</label>
                                <select required class="form-control">
								<option>Male</option>
								<option selected>Female</option>
								</select>
                            </div>
					</div>
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Birthdate</label>
                                <input required type="date" value="12/14/1992" class="form-control">
                            </div>
					</div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Age</label>
                                <input min="0" max="99" required type="number" value="24" class="form-control">
                            </div>
					</div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Marital Status</label>
                                <select required class="form-control">
								<option selected>Single</option>
								<option>Married</option>
								<option>Separated</option>
								<option>Divorced</option>
								<option>Widowed</option>
								</select>
                            </div>
					</div>
                </div>
				
				<div class="row">
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Citizenship</label>
                                <input required class="form-control" value="Filipino">
                            </div>
					</div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input required class="form-control" value="09269145245">
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
