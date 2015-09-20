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
                            Barangay Officials
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

				<div class="panel panel-info">
			  <div class="panel-heading">
				<h3 class="panel-title">
				List of Barangay Officials</h3>
			  </div>
			  <div class="panel-body">
			  <table class="table table-hover">
				<tr>
				<th>Action</th>
				<th>ID No.</th>
				<th>Full Name</th>
				<th>Position</th>
				<th>Birthday</th>
				<th>Age</th>
				<th>Address</th>
				</tr>
				
				<tr>
				<td>
				<button class="btn btn-info btn-xs glyphicon glyphicon-search" data-toggle="modal" data-target="#myModalView"> </button> &nbsp;
				<button class="btn btn-info btn-xs glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalEdit"> </button>
				</td>
				<td>000001</td>
				<td>Catherine Adonis</td>
				<td>Barangay Captain</td>
				<td>12/04/1992</td>
				<td>24</td>
				<td>Imus Cavite</td>
				</tr>
				
				<tr>
				<td>
				<button class="btn btn-info btn-xs glyphicon glyphicon-search" data-toggle="modal" data-target="#myModalView"> </button> &nbsp;
				<button class="btn btn-info btn-xs glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalEdit"> </button>
				</td>
				<td>000002</td>
				<td>Hideshi Ogoshi</td>
				<td>Barangay Tanod</td>
				<td>10/04/1993</td>
				<td>22</td>
				<td>Imus Cavite</td>
				</tr>
				
				<tr>
				<td>
				<button class="btn btn-info btn-xs glyphicon glyphicon-search" data-toggle="modal" data-target="#myModalView"> </button> &nbsp;
				<button class="btn btn-info btn-xs glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalEdit"> </button>
				</td>
				<td>000003</td>
				<td>Francis Vigor De Ocampo</td>
				<td>Barangay Tanod</td>
				<td>10/04/1993</td>
				<td>22</td>
				<td>Imus Cavite</td>
				</tr>
				
				<tr>
				<td>
				<button class="btn btn-info btn-xs glyphicon glyphicon-search" data-toggle="modal" data-target="#myModalView"> </button> &nbsp;
				<button class="btn btn-info btn-xs glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalEdit"> </button>
				</td>
				<td>000004</td>
				<td>Rose Ann Assuncion</td>
				<td>Barangay Tanod</td>
				<td>10/04/1993</td>
				<td>22</td>
				<td>Imus Cavite</td>
				</tr>
				
				<tr>
				<td>
				<button class="btn btn-info btn-xs glyphicon glyphicon-search" data-toggle="modal" data-target="#myModalView"> </button> &nbsp;
				<button class="btn btn-info btn-xs glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalEdit"> </button>
				</td>
				<td>000004</td>
				<td>Ejay Reyes</td>
				<td>Barangay Tanod</td>
				<td>10/04/1993</td>
				<td>22</td>
				<td>Imus Cavite</td>
				</tr>
				
				<tr>
				<td>
				<button class="btn btn-info btn-xs glyphicon glyphicon-search" data-toggle="modal" data-target="#myModalView"> </button> &nbsp;
				<button class="btn btn-info btn-xs glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalEdit"> </button>
				</td>
				<td>000004</td>
				<td>Bin Cui</td>
				<td>Barangay Tanod</td>
				<td>10/04/1993</td>
				<td>22</td>
				<td>Imus Cavite</td>
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

	
</body>

</html>


<div class="modal fade" id="myModalView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Barangay Official Information</h4>
      </div>
      <div class="modal-body">
        <table class="table"> 
		<tr>
		<th style="border:hidden" rowspan="3"><center><img height="100px" width="100px" src="img/user.png" class="img-responsive img-rounded"></center></th>
		<th>Name:</th>
		<td>Catherine Adonis</td>
		</tr>
		<tr>
		<th>Position:</th>
		<td>Barangay Captain</td>
		</tr>
		<tr>
		<th>Contact No:</th>
		<td>Barangay Captain</td>
		</tr>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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
		<th style="border:hidden" rowspan="3"><center><img height="100px" width="100px" src="img/user.png" class="img-responsive img-rounded"> <br> <input type="file"></center></th>
		<th>Name:</th>
		<td><input class="form-control" value="Catherine Adonis" required></td>
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
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
