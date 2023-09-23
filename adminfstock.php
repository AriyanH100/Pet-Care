<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PET CARE</title>
	<!-- Bootstrap Styles-->
    <link href="food/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="food/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="food/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                    <li>
                        <a  href="adminhome.php"><i class="fa fa-home"></i>Homepage</a>
                    </li>
                    <li>
                        <a  href="addfood.php"><i class="fa fa-home"></i>Add Food Store</a>
                    </li>
                    <li>
                        <a  href="addmed.php"><i class="fa fa-home"></i>Add Medicine Store</a>
                    </li>
                    <li>
                        <a  href="adminfood.php"><i class="fa fa-home"></i>Approve Food Order</a>
                    </li>
					<li>
                        <a  href="adminmedicine.php"><i class="fa fa-home"></i>Approve Medicine Order</a>
                    </li>
                    <li>
                        <a  href="admingroom.php"><i class="fa fa-home"></i>Approve Grooming Service</a>
                    </li>
                    <li>
                        <a  href="adminadopt.php"><i class="fa fa-home"></i>Approve Pet Adoption</a>
                    </li>
                    <li>
                        <a  href="adminfstock.php"><i class="fa fa-home"></i>Update Food Stock</a>
                    </li>
                    <li>
                        <a  href="adminmstock.php"><i class="fa fa-home"></i>Update Medicine Stock</a>
                    </li>
                    <li>
                        <a  href="logout.php"><i class="fa fa-home"></i>Logout</a>
                    </li>
					</ul>
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Update Food Stock<small> </small>
                        </h1>
                    </div>
                </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                            <th>Food Name</th>
                                            <th>Pet Type</th>
                                            <th>Stock</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($_GET['available'])) 
                                    {
                                        $con = mysqli_connect('localhost','root','','petcare');
                                        if ($con->query("update orderfood set stock='Available' where id = '$_GET[available]'"))
                                        {
                                        header("location:adminfstock.php");
                                        }
                                    }  
                                    if (isset($_GET['unavailable'])) 
                                    {
                                        $con = mysqli_connect('localhost','root','','petcare');
                                        if ($con->query("update orderfood set stock='Unavailable' where id = '$_GET[unavailable]'"))
                                        {
                                        header("location:adminfstock.php");
                                        }
                                    } 
                                    ?>
									<?php
										include ('db.php');
										$sql="select * from orderfood";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{

                                              
                                            echo"<tr class='gradeC'>
                                            <td>".$row['name']."</td>
                                            <td>".$row['pet']."</td>
                                            <td>".$row['stock']."</td>
                                            <td> <a href=adminfstock.php?available=".$row['id']."<button class='btn btn-primary'> <i class='fa fa-edit' ></i>Available</button> </td>
                                            <td> <a href=adminfstock.php?unavailable=".$row['id']."<button class='btn btn-danger'> <i class='fa fa-edit' ></i>Unavailable</button> </td>
                                            
                                            </tr>";
                                                

                                        }


									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>
