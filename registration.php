<?php
include("includes/header.html");
include("includes/sidebar.html");
require "lib/db.php";
$page = 1;
$condition = "";
$param = array();
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST['id'])) {
    $db = new DbManager();
    $db->execute(
          "INSERT INTO residents (first_name, middle_name, last_name, suffix, address_line_1, address_line_2, address_line_3, address_line_4, address_line_5, gender_id, birth_date, martial_status_id, citizenship, contact_number, created_date_time, modified_date_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"
        , array($_POST['first_name'], $_POST['middle_name'], $_POST['last_name'], $_POST['suffix'], $_POST['address_line_1'], $_POST['address_line_2'], $_POST['address_line_3'], $_POST['address_line_4'], $_POST['address_line_5'], $_POST['gender'], $_POST['birth_date'], $_POST['martial_status'], $_POST['citizenship'], $_POST['contact_number'], date('Y-m-d H:i:s'), date('Y-m-d H:i:s')));
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['id'])) {
    $db = new DbManager();
    $db->execute(
          "UPDATE residents SET first_name = ?, middle_name = ?, last_name = ?, suffix = ?, address_line_1 = ?, address_line_2 = ?, address_line_3 = ?, address_line_4 = ?, address_line_5 = ?, gender_id = ?, birth_date = ?, martial_status_id = ?, citizenship = ?, contact_number = ?, modified_date_time = ? WHERE id = ?;"
        , array($_POST['first_name'], $_POST['middle_name'], $_POST['last_name'], $_POST['suffix'], $_POST['address_line_1'], $_POST['address_line_2'], $_POST['address_line_3'], $_POST['address_line_4'], $_POST['address_line_5'], $_POST['gender'], $_POST['birth_date'], $_POST['martial_status'], $_POST['citizenship'], $_POST['contact_number'], date('Y-m-d H:i:s'), $_POST['id']));
} else if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['words'])) {
    $condition = "WHERE first_name LIKE ? OR middle_name LIKE ? OR last_name LIKE ? OR suffix LIKE ? OR address_line_1 LIKE ? OR address_line_2 LIKE ? OR address_line_3 LIKE ? OR address_line_4 LIKE ? OR address_line_5 LIKE ? OR citizenship LIKE ?";
    $words = preg_split('/[\s]+/', $_GET['words'], -1, PREG_SPLIT_NO_EMPTY);
    $word = $words[0];
    $param = array('%'.$word.'%', '%'.$word.'%', '%'.$word.'%', '%'.$word.'%', '%'.$word.'%', '%'.$word.'%', '%'.$word.'%', '%'.$word.'%', '%'.$word.'%', '%'.$word.'%');
} else {
    if(!empty($_GET['page'])) {
        $page = (int) $_GET['page'];
    }
}
$db = new DbManager();
$offset = ($page - 1) * 10;
$sql = "SELECT id, CONCAT(first_name, ' ', IFNULL(middle_name, ''), ' ', last_name, ' ', IFNULL(suffix, '')) as full_name, birth_date, TIMESTAMPDIFF(YEAR,birth_date,CURDATE()) AS age, CONCAT(address_line_1, ' ', address_line_2, ' ', address_line_3, ' ', address_line_4, ' ', address_line_5) AS address FROM residents $condition ORDER BY modified_date_time DESC LIMIT $offset, 10;";
$residents = $db->execute($sql, $param);
$count = $db->execute("SELECT COUNT(1) AS c FROM residents $condition ;", $param);
$number_of_pages = (int) ceil($count[0]['c'] / 10);
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
				
		<form role="form" id="search_form">
		  <div class="row">	
			  <div class="col-lg-4">
			  <div class="input-group">
			    <input id="words" type="text" name="words" value="<?php if (!empty($word)) echo $word;?>" class="form-control" placeholder="Search for...">
			    <span class="input-group-btn">
				  <button id="search_button" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span> Search</button>
			    </span>
			  </div><!-- /input-group -->
		    </div><!-- /.col-lg-6 -->
		  </div><!-- /.row -->
		</form>
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
<?php foreach($residents as $i): ?>
				<tr>
				<td>
				<a class="btn btn-info btn-xs glyphicon glyphicon-search" href="registration_view.php?id=<?php echo $i['id'];?>"> </a> &nbsp;
				<a class="btn btn-info btn-xs glyphicon glyphicon-pencil" href="registration_edit.php?id=<?php echo $i['id'];?>"> </a>
				</td>
				<td><?php echo $i['id'];?></td>
				<td><?php echo $i['full_name'];?></td>
				<td><?php echo $i['birth_date'];?></td>
				<td><?php echo $i['age'];?></td>
				<td><?php echo $i['address'];?></td>
				</tr>
<?php endforeach; ?>
				</table>
				
			  </div>
			 
			</div>
			
			<center>
			<nav>
			  <ul class="pagination">
				<li>
<?php if($page !== 1): ?>
				  <a href="registration.php?page=<?php echo ($page - 1);?>">
					<span aria-hidden="true">&laquo;</span>
				  </a>
<?php else: ?>
				  <span aria-hidden="true">&laquo;</span>
<?php endif; ?>
				</li>
<?php for($i = 1; $i <= $number_of_pages; $i++): ?>
				<li><a href="registration.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
<?php endfor; ?>
				<li>
<?php if($page !== $number_of_pages): ?>
				  <a href="registration.php?page=<?php echo ($page + 1);?>">
					<span aria-hidden="true">&raquo;</span>
				  </a>
<?php else: ?>
				  <span aria-hidden="true">&raquo;</span>
<?php endif; ?>
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

<script>
jQuery(function($){
    $('#search_button').click(function(event) {
        var words = $('#words').val();
        window.location.href = "registration.php?words=" + words;
    });
});
</script>
</body>
</html>
