<?php
include("includes/header.html");
include("includes/sidebar.html");
require "lib/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new DbManager();
    $db->execute(
          "INSERT INTO residents (first_name, middle_name, last_name, suffix, address_line_1, address_line_2, address_line_3, address_line_4, address_line_5, gender_id, birth_date, martial_status_id, citizenship, contact_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"
        , array($_POST['first_name'], $_POST['middle_name'], $_POST['last_name'], $_POST['suffix'], $_POST['address_line_1'], $_POST['address_line_2'], $_POST['address_line_3'], $_POST['address_line_4'], $_POST['address_line_5'], $_POST['gender'], $_POST['birth_date'], $_POST['martial_status'], $_POST['citizenship'], $_POST['contact_number']));
}
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
				
		<div class="row">	
			<div class="col-lg-4">
			<div class="input-group">
			  <input type="text" class="form-control" placeholder="Search for...">
			  <span class="input-group-btn">
				<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span> Search</button>
			  </span>
			</div><!-- /input-group -->
		  </div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
			<br>
			<form role="form">
			
			<div class="panel panel-info">
			  <div class="panel-heading">
			  <a href="registration_add.php" class="btn btn-xs btn-primary" style="float:right"><span class=" glyphicon glyphicon-plus"></span> Add New</a>
				<h3 class="panel-title">
				List of all Residents</h3>
			  </div>
			  <div class="panel-body" style="height: 300px; overflow-y:scroll;">
				<table class="table table-hover">
				<tr>
				<th>Action</th>
				<th>ID No.</th>
				<th>Full Name</th>
				<th>Birthday</th>
				<th>Age</th>
				<th>Address</th>
				</tr>
				
				<tr>
				<td>
				<a class="btn btn-info btn-xs glyphicon glyphicon-search" href="registration_view.php"> </a> &nbsp;
				<a class="btn btn-info btn-xs glyphicon glyphicon-pencil" href="registration_edit.php"> </a>
				</td>
				<td>000001</td>
				<td>Catherine Adonis</td>
				<td>12/04/1992</td>
				<td>24</td>
				<td>Imus Cavite</td>
				</tr>
				
				<tr>
				<td>
				<a class="btn btn-info btn-xs glyphicon glyphicon-search" href="registration_view.php"> </a> &nbsp;
				<a class="btn btn-info btn-xs glyphicon glyphicon-pencil" href="registration_edit.php"> </a>
				</td>
				<td>000002</td>
				<td>Hideshi Ogoshi</td>
				<td>10/04/1993</td>
				<td>22</td>
				<td>Imus Cavite</td>
				</tr>
				
				<tr>
				<td>
				<a class="btn btn-info btn-xs glyphicon glyphicon-search" href="registration_view.php"> </a> &nbsp;
				<a class="btn btn-info btn-xs glyphicon glyphicon-pencil" href="registration_edit.php"> </a>
				</td>
				<td>000003</td>
				<td>Francis Vigor De Ocampo</td>
				<td>10/04/1993</td>
				<td>22</td>
				<td>Imus Cavite</td>
				</tr>
				
				<tr>
				<td>
				<a class="btn btn-info btn-xs glyphicon glyphicon-search" href="registration_view.php"> </a> &nbsp;
				<a class="btn btn-info btn-xs glyphicon glyphicon-pencil" href="registration_edit.php"> </a>
				</td>
				<td>000004</td>
				<td>Rose Ann Assuncion</td>
				<td>10/04/1993</td>
				<td>22</td>
				<td>Imus Cavite</td>
				</tr>
				
				<tr>
				<td>
				<a class="btn btn-info btn-xs glyphicon glyphicon-search" href="registration_view.php"> </a> &nbsp;
				<a class="btn btn-info btn-xs glyphicon glyphicon-pencil" href="registration_edit.php"> </a>
				</td>
				<td>000004</td>
				<td>Ejay Reyes</td>
				<td>10/04/1993</td>
				<td>22</td>
				<td>Imus Cavite</td>
				</tr>
				
				<tr>
				<td>
				<a class="btn btn-info btn-xs glyphicon glyphicon-search" href="registration_view.php"> </a> &nbsp;
				<a class="btn btn-info btn-xs glyphicon glyphicon-pencil" href="registration_edit.php"> </a>
				</td>
				<td>000004</td>
				<td>Bin Cui</td>
				<td>10/04/1993</td>
				<td>22</td>
				<td>Imus Cavite</td>
				</tr>
				
				</table>
				
			  </div>
			 
			</div>
			
			<center>
			<nav>
			  <ul class="pagination">
				<li>
				  <a href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				  </a>
				</li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
				  <a href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				  </a>
				</li>
			  </ul>
			</nav>
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
