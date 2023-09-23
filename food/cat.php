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
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="../home.php"><i class="fa fa-home"></i>Homepage</a>
                    </li>
                    <li>
                        <a  href="cat.php"><i class="fa fa-home"></i>Food Details</a>
                    </li>
					</ul>
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Select Cat Food<small> </small>
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
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Availabilty</th>
                                            <th>Order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										include ('db.php');
										$sql="select * from orderfood where pet='cat'";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
                                            $id = $row['id'];
                                            if($id !="Null")
                                            {
                                                $stock=$row['stock'];
                                                if($stock =="Available")
                                                {
                                                    echo"<tr class='gradeC'>
                                                    <td>".$row['name']."</td>
                                                    <td>".$row['price']," Taka"."</td>
                                                    <td>".$row['stock']."</td>
                                                    <td><a href=catorder.php?eid=".$id ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i>Order</button></td>
                                                    </tr>";
                                                }
                                                else
                                                {
                                                    echo"<tr class='gradeC'>
                                                    <td>".$row['name']."</td>
                                                    <td>".$row['price']," Taka"."</td>
                                                    <td>".$row['stock']."</td>
                                                    <td></td></tr>";    
                                                }
                                            }
                                            else
                                            {
                                                echo"<tr class='gradeC'>
												<td>".$row['name']."</td>
												<td>".$row['price']," Taka"."</td>
                                                <td>".$row['stock']."</td>
                                                <td><a href=catorder.php?eid=".$id ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i>Order</button></td>
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
