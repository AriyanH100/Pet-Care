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
                           Approve Pet Adoption<small> </small>
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
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                            <th>Pet Type</th>
                                            <th>Gender</th>
                                            <th>Breed</th>
                                            <th>Details</th>
                                            <th>Approval</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                    if (isset($_GET['approve'])) 
                                    {
                                        $con = mysqli_connect('localhost','root','','petcare');
                                        if ($con->query("update adopt set approval='Yes' where pid = '$_GET[approve]'"))
                                        {
                                        header("location:adminadopt.php");
                                        }
                                    } 
                                    ?>
                                    <?php
										include ('db.php');
										$sql="select * from adopt";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
                                            $approval=$row['approval'];
                                            if($approval =="Yes")
                                            {  
                                                echo"<tr class='gradeC'>
                                                <td>".$row['fname']."</td>
                                                <td>".$row['lname']."</td>
                                                <td>".$row['email']."</td>
                                                <td>".$row['address']."</td>
                                                <td>".$row['pnum']."</td>
                                                <td>".$row['type']."</td>
                                                <td>".$row['gender']."</td>
                                                <td>".$row['breed']."</td>
                                                <td>".$row['details']."</td>
                                                <td>Approved</td>
                                                </tr>";
                                            }
                                            else
                                            {
                                                echo"<tr class='gradeC'>
                                                <td>".$row['fname']."</td>
                                                <td>".$row['lname']."</td>
                                                <td>".$row['email']."</td>
                                                <td>".$row['address']."</td>
                                                <td>".$row['pnum']."</td>
                                                <td>".$row['type']."</td>
                                                <td>".$row['gender']."</td>
                                                <td>".$row['breed']."</td>
                                                <td>".$row['details']."</td>
                                                <td><a href=adminadopt.php?approve=".$row['pid']." <button class='btn btn-primary'> <i class='fa fa-edit' ></i>Approve</button></td>
                                                </tr>";  
                                            }
                                                
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
