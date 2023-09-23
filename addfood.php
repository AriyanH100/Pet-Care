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
                            Details <small></small>
                        </h1>
                    </div>
                </div>   
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            FOOD STORE INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
						        <div class="form-group">
                                        <label>Food Store Name</label>
                                        <input name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                        <label>Phone</label>
                                        <input name="phone" class="form-control" required>    
                                </div>
                                <div class="form-group">
                                            <label>Location</label>
                                            <select name="location" class="form-control">
												<option value selected ></option>
                                                <option value="dmd">Dhanmondi</option>
												<option value="uttara">Uttara</option>
                                                <option value="gulshan">Gulshan</option>
                                                <option value="banani">Banani</option>
                                                <option value="mdpr">Mohammadpur</option>
                                                <option value="mirpur">Mirpur</option>
                                                <option value="shahbagh">Shahbagh</option>
                                                <option value="bash">Bashundhara</option>
                                            </select>
                            </div>
                            <div class="form-group">
                                        <label>Address</label>
                                        <input name="address" class="form-control" required>    
                            </div>
                        </div>
                    </div>
                </div>
          
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
								$con=mysqli_connect("localhost","root","","petcare");
								$newUser="INSERT INTO foodloc (name,phone,addr,loc) VALUES ('$_POST[name]','$_POST[phone]','$_POST[address]','$_POST[location]')";
								if (mysqli_query($con,$newUser))
								if (mysqli_query($con,$newUser))
								{
									echo "<script type='text/javascript'> alert('Added successfully')</script>";
								}
								else
								{
									echo "<script type='text/javascript'> alert('Error in adding')</script>";
								}
							$msg="Your code is correct";
							}
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>
