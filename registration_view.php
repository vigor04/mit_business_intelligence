<?php
include("includes/header.html");
include("includes/sidebar.html");
require "lib/db.php";
$db = new DbManager();
if (!empty($_GET['id'])) {
    $i = $db->execute("SELECT id, first_name, middle_name, last_name, suffix, birth_date, TIMESTAMPDIFF(YEAR,birth_date,CURDATE()) AS age, address_line_1, address_line_2, address_line_3, address_line_4, address_line_5, gender_id, martial_status_id, citizenship, contact_number FROM residents WHERE id = ?", array($_GET['id']));
}
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
				
			<form role="form">
            <input name="id" type="hidden" value="<?php echo $_GET['id'];?>"/>
			<div class="panel panel-info">
			  <div class="panel-heading">
			  <a href="registration_edit.php?id=<?php echo $_GET['id'];?>" class="btn btn-xs btn-primary" style="float:right"><span class=" glyphicon glyphicon-pencil"></span> Edit</a>
				<h3 class="panel-title">
				<?php echo $_GET['id'];?> - <?php echo $i[0]['first_name'] . " " . $i[0]['middle_name'] . " " . $i[0]['last_name'] . " " . $i[0]['suffix'];?></h3>
			  </div>
			  <div class="panel-body">
				<div class="row">
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>First Name:</label> <br>
                                <?php echo $i[0]['first_name'];?>
                            </div>
					</div>
                    <div class="col-lg-3">
                            <div class="form-group">
                                <label>Middle Name:</label> <br>
                                <?php if(empty($i[0]['middle_name'])) echo "-"; else echo $i[0]['middle_name'];?>
                            </div>
                    </div>
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Last Name:</label> <br>
                                <?php echo $i[0]['last_name'];?>
                            </div>
                    </div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Suffix:</label> <br>
                                <?php if(empty($i[0]['suffix'])) echo "-"; else echo $i[0]['suffix'];?>
                            </div>
                    </div>
                </div>
				
				<div class="row">
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Address Line 1:</label> <br>
                                <?php echo $i[0]['address_line_1'];?>
                            </div>
					</div>
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Address Line 2:</label> <br>
                                <?php if(empty($i[0]['address_line_2'])) echo "-"; else echo $i[0]['address_line_2'];?>
                            </div>
					</div>
					 <div class="col-lg-2">
                            <div class="form-group">
                                <label>Address Line 3:</label> <br>
                                <?php if(empty($i[0]['address_line_3'])) echo "-"; else echo $i[0]['address_line_3'];?>
                            </div>
					</div>
					 <div class="col-lg-2">
                            <div class="form-group">
                                <label>Address Line 4:</label><br>
                                <?php if(empty($i[0]['address_line_4'])) echo "-"; else echo $i[0]['address_line_4'];?>
                            </div>
					</div>
					 <div class="col-lg-2">
                            <div class="form-group">
                                <label>Address Line 5:</label> <br>
                                <?php if(empty($i[0]['address_line_5'])) echo "-"; else echo $i[0]['address_line_5'];?>
                            </div>
					</div>
                </div>
				
				
				<div class="row">
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Gender:</label> <br>
<?php foreach($genders as $g):?>
    <?php if($g['id'] === $i[0]['gender_id']):?>
        <?php echo $g['name'];?>
    <?php endif;?>
<?php endforeach;?>
                            </div>
					</div>
					 <div class="col-lg-3">
                            <div class="form-group">
                                <label>Birthdate:</label><br>
                                <?php echo $i[0]['birth_date'];?>
                            </div>
					</div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Age:</label><br>
                                <?php echo $i[0]['age'];?>
                            </div>
					</div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Marital Status:</label><br>
<?php foreach($martial_statuses as $s):?>
    <?php if($s['id'] === $i[0]['martial_status_id']):?>
        <?php echo $s['name'];?>
    <?php endif;?>
<?php endforeach;?>
                            </div>
					</div>
                </div>
				
				<div class="row">
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Citizenship:</label><br>
                                <?php echo $i[0]['citizenship'];?>
                            </div>
					</div>
					<div class="col-lg-3">
                            <div class="form-group">
                                <label>Contact Number:</label><br>
                                <?php echo $i[0]['contact_number'];?>
                            </div>
					</div>
                </div>
				
			  </div>
			 
			</div>
			 <center>
			 <a href="registration.php" class="btn btn-default btn-xs">Cancel</a> <br><br>
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
