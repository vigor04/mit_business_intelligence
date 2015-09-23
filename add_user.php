<?php
include("includes/header.html");
include("includes/sidebar.html");
require "lib/db.php";
$db = new DbManager();
$pos = $db->execute("SELECT id, name FROM positions ORDER BY id ASC", array());
?> 
        <div id="page-wrapper">
            <div id="message"></div>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           System Users
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

				<div class="panel panel-info">
			  <div class="panel-heading">
			  <button style="float:right" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalAdd"><span class="glyphicon glyphicon-plus"></span> Add New</button>
				<h3 class="panel-title">
				List of system users</h3>
			  </div>
			  <div class="panel-body">
			  <table class="table table-hover">
				<tr>
				<th>Action</th>
				<th>ID No.</th>
				<th>Full Name</th>
				<th>Position</th>
				</tr>
				
				<tr>
				<td>
				<button class="btn btn-info btn-xs glyphicon glyphicon-search" data-toggle="modal" data-target="#myModalView"> </button> &nbsp;
				<button class="btn btn-info btn-xs glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalEdit"> </button> &nbsp;
				<button class="btn btn-info btn-xs glyphicon glyphicon-trash"> </button>
				</td>
				<td>000001</td>
				<td>Catherine Adonis</td>
				<td>Barangay Captain</td>
				</tr>
				
				<tr>
				<td>
				<button class="btn btn-info btn-xs glyphicon glyphicon-search" data-toggle="modal" data-target="#myModalView"> </button> &nbsp;
				<button class="btn btn-info btn-xs glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModalEdit"> </button> &nbsp;
				<button class="btn btn-info btn-xs glyphicon glyphicon-trash"> </button>
				</td>
				<td>000002</td>
				<td>Hideshi Ogoshi</td>
				<td>Barangay Tanod</td>
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
		<th style="border:hidden" rowspan="5"><center><img height="100px" width="100px" src="img/user.png" class="img-responsive img-rounded"> <br> <input type="file"></center></th>
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



<div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Barangay Official Information</h4>
      </div>
      <form id="form_add">
      <div class="modal-body">
        <table class="table"> 
		<tr>
		<th style="border:hidden" rowspan="5"><center><img height="100px" width="100px" src="img/user.png" class="img-responsive img-rounded"> <br> <input id="image" type="file"></center></th>
		<th>Name:</th>
		<td><input id="name" class="form-control" placeholder="Name" required></td>
		</tr>
		<tr>
		<th>Position:</th>
		<td>
		<select id="position" required class="form-control">
<?php foreach($pos as $p): ?>
		<option value="<?php echo $p['id'];?>" <?php if ($p['id'] == 1) echo 'selected'; ?>><?php echo $p['name'];?></option>
<?php endforeach; ?>
		</select>
		</td>
		</tr>
		<tr>
		<th>Contact No:</th>
		<td><input id="contact_number" class="form-control" placeholder="Contact Number" required></td>
		</tr>
		<tr>
		<th>Username:</th>
		<td><input id="user_name" class="form-control" placeholder="Username" required></td>
		</tr>
		<tr>
		<th>Password:</th>
		<td><input id="password" type="password" class="form-control" placeholder="Password" required></td>
		</tr>
		</table>
      </div>
      <div class="modal-footer">
        <button id="save" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
jQuery(function($){
    $('input[type=file]').on('change', prepareUpload);
    function prepareUpload(event) {
        console.log('prepareUpload');
        files = event.target.files;
    }
    $('#save').click(function(event) {
        var formData = new FormData($('#form_add'));
        formData.append('name', $('#name').val());
        formData.append('position', $('#position option:selected').val());
        formData.append('contact_number', $('#contact_number').val());
        formData.append('user_name', $('#user_name').val());
        formData.append('password', $('#password').val());
        formData.append('image', files[0]);
        $.ajax({
            url: '/ajax/add_user.php',
            type: 'post',
            processData: false,
            contentType: false,
            data: formData
        })
        .done(function(data) {
            console.log("success");
            $('#message').append(data);
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            console.log("error");
            $('#message').append(jqXHR);
            $('#message').append(textStatus);
            $('#message').append(errorThrown);
        })
        .always(function() {
            console.log("complete");
        });
    });
});
</script>
