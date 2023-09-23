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
                           Welcome, Admin<small> </small>
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
                                    <h3>Approved Food Orders </h3><br> &nbsp
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                            <th>Payment Method</th>
                                            <th>Quantity</th>
                                            <th>Pet Type</th>
                                            <th>Food Name</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($_GET['delete1'])) 
                                    {
                                        $con = mysqli_connect('localhost','root','','petcare');
                                        if ($con->query("delete from foodorderdetails where fid = '$_GET[delete1]'"))
                                        {
                                        header("location:adminhome.php");
                                        }
                                    }  
                                    ?>
									<?php
										include ('db.php');
										$sql="select * from orderfood,foodorderdetails where orderfood.id=foodorderdetails.pid and approval='Yes'";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
                                            echo"<tr class='gradeC'>
                                            <td>".$row['fname']."</td>
                                            <td>".$row['lname']."</td>
                                            <td>".$row['email']."</td>
                                            <td>".$row['address']."</td>
                                            <td>".$row['pnum']."</td>
                                            <td>".$row['pmethod']."</td>
                                            <td>".$row['quantity']."</td>
                                            <td>".$row['pet']."</td>
                                            <td>".$row['name']."</td>
                                            <td>".$row['price'] * $row['quantity']," Taka"."</td>
                                            <td> <a href=adminhome.php?delete1=".$row['fid']."<button class='btn btn-danger'> <i class='fa fa-edit' ></i>Delete</button> </td>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <h3>Approved Medicine Orders </h3><br> &nbsp
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                            <th>Payment Method</th>
                                            <th>Quantity</th>
                                            <th>Pet Type</th>
                                            <th>Medicine Name</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($_GET['delete2'])) 
                                    {
                                        $con = mysqli_connect('localhost','root','','petcare');
                                        if ($con->query("delete from medorderdetails where mid = '$_GET[delete2]'"))
                                        {
                                        header("location:adminhome.php");
                                        }
                                    }  
                                    ?>
									<?php
										include ('db.php');
										$sql="select * from ordermed,medorderdetails where ordermed.id=medorderdetails.pid and approval='Yes'";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
                                            echo"<tr class='gradeC'>
                                            <td>".$row['fname']."</td>
                                            <td>".$row['lname']."</td>
                                            <td>".$row['email']."</td>
                                            <td>".$row['address']."</td>
                                            <td>".$row['pnum']."</td>
                                            <td>".$row['pmethod']."</td>
                                            <td>".$row['quantity']."</td>
                                            <td>".$row['pet']."</td>
                                            <td>".$row['name']."</td>
                                            <td>".$row['price'] * $row['quantity']," Taka"."</td>
                                            <td> <a href=adminhome.php?delete2=".$row['mid']."<button class='btn btn-danger'> <i class='fa fa-edit' ></i>Delete</button> </td>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <h3>Approved Grooming Services </h3><br> &nbsp
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                            <th>Payment Method</th> 
                                            <th>Pet Type</th>
                                            <th>Service Type</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($_GET['delete3'])) 
                                    {
                                        $con = mysqli_connect('localhost','root','','petcare');
                                        if ($con->query("delete from groomorderdetails where gid = '$_GET[delete3]'"))
                                        {
                                        header("location:adminhome.php");
                                        }
                                    }  
                                    ?>
									<?php
										include ('db.php');
										$sql="select * from groom,groomorderdetails where groom.id=groomorderdetails.pid and approval='Yes'";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
                                            echo"<tr class='gradeC'>
                                            <td>".$row['fname']."</td>
                                            <td>".$row['lname']."</td>
                                            <td>".$row['email']."</td>
                                            <td>".$row['address']."</td>
                                            <td>".$row['pnum']."</td>
                                            <td>".$row['pmethod']."</td>
                                            <td>".$row['pet']."</td>
                                            <td>".$row['type']."</td>
                                            <td>".$row['price']," Taka"."</td>
                                            <td> <a href=adminhome.php?delete3=".$row['gid']."<button class='btn btn-danger'> <i class='fa fa-edit' ></i>Delete</button> </td>
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
