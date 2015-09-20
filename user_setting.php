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
                           User Settings
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<div class="panel panel-info">
			  <div class="panel-heading">
				<h3 class="panel-title">
				Edit User Settings</h3>
			  </div>
			  <div class="panel-body">
			  <table class="table table-hover">
				<tr>
				<th>Action:</th>
				<th>Name:</th>
				<th>Position:</th>
				<th>Contact No:</th>
				<th>Username:</th>
				</tr>
				
				<tr>
				<td><button class="btn btn-info btn-xs glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalEdit"> </button></td>
				<th>Erlinda Constantino</th>
				<th>Barangay Captain</th>
				<th>09269145245</th>
				<th>erlinda12</th>
				</tr>
				
				</table>
			  </div>
			  </div>

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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>




<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Barangay Official Information</h4>
      </div>
      <div class="modal-body">
        <table class="table"> 
		<tr>
		<th style="border:hidden" rowspan="5"><center><img height="100px" width="100px" src="img/user.png" class="img-responsive img-rounded"> <br> <input type="file"></center></th>
		<th>Name:</th>
		<td><input class="form-control" value="Erlinda Constantino" required></td>
		</tr>
		<tr>
		<th>Position:</th>
		<td>
		<select required class="form-control">
		<option>Barangay Captain</option>
		<option>Kagawad</option>
		<option>Secretary</option>
		<option>Treasurer</option>
		</select>
		</td>
		</tr>
		<tr>
		<th>Contact No:</th>
		<td><input class="form-control" value="09269145245" required></td>
		</tr>
		<th>Username:</th>
		<td><input class="form-control" value="erlinda12" required></td>
		</tr>
		<th>Password:</th>
		<td><input type="password" placeholder="Password" class="form-control" required></td>
		</tr>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>