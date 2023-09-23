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
   <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                    <a href="home.php"><i class="fa fa-home"></i>Homepage</a>
                    </li>
                    <li>
                        <a  href="adopt.php"><i class="fa fa-home"></i>Adopt Pets</a>
                    </li>
					<li>
                        <a  href="adopt2.php"><i class="fa fa-home"></i>Put Up For Adoption</a>
                    </li>
					</ul>
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Adoption Details<small> </small>
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
                                            <th>Owner's Name</th>
                                            <th>Owner's Contact Number</th>
                                            <th>Pet Type</th>
                                            <th>Pet Gender</th>
                                            <th>Pet Breed</th>
                                            <th>Pet Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$con = mysqli_connect('localhost','root','','petcare');
                                        $ID =$_GET['eid'];
										$sql="select * from adopt where pid='$ID'";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
                                           
                                            echo"<tr class='gradeC'>
                                            <td>".$row['fname']."</td>
                                            <td>".$row['pnum']."</td>
                                            <td>".$row['type']."</td>
                                            <td>".$row['gender']."</td>
                                            <td>".$row['breed']."</td>
                                            <td>".$row['details']."</td>
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
