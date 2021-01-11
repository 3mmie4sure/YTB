
<?php 
	session_start();
	if ($_SESSION['email'] == false) {
			header("location:../../index.html");
		}

?>

<!DOCTYPE html>
<html>
<head>

 		<!-- META TAGS -->
		<!-- ==================================================================================================== -->
		  <meta name="description" content="">
		  <meta name="keywords" content="">
		  <meta name="author" content="Edsofta">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- ================================================================================================== -->
		<!-- //META TAGS -->

		<!-- PAGE TITLE -->
		<!-- ================================================================================================== -->
		<title> <?php echo $_SESSION['member-username']; ?> </title>
		<!-- ================================================================================================== -->
		<!-- //PAGE TITLE -->

		<!-- ALL INCLUDED STYLESHEETS -->
		<!-- =================================================================================================== -->
		  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
		  <link rel="stylesheet" type="text/css" href="../../assets/css/animate.css">
		  <link rel="stylesheet" type="text/css" href="../../assets/css/custom.css">
		  <link rel="stylesheet" type="text/css" href="../../assets/icons/fa/css/all.css">
		   <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
		  
		<!-- =================================================================================================== -->
		<!-- //ALL INCLUDED STYLESHEETS -->

		<!-- ALL INCLUDED SCRIPTS -->
		<!-- ==================================================================================================== -->
			<script type="text/javascript" src="../../assets/js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
			<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="../../assets/js/custom.js"></script>
			
			
			
		<!-- ==================================================================================================== -->
		<!-- //ALL INCLUDED SCRIPTS -->
		<style type="text/css">
			html,body{
				overflow-x: hidden;
			}
		</style>
<style>


</style>



</head>
<body class="animated fadeIn bg-light">

	<?php 
	require("../../php/db-connect.php");
	include("../../php/functions/countVerifiedUsers.php");
	include("../../php/functions/countUsers.php");
		
	?>

	<!-- DASHBOARD SIDENAV -->

    <?php require('../../php/ui/components/member-sidebar.php'); ?>

<!-- //DASHBOARD SIDENAV -->

	
<div class="sidebar-pushoff" id="sidebar-pushoff">
	 <!-- dashboard-nav -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm mb-0 p-3">
      <a class="sidebar-ctrl"><h5><i class="fa fa-bars sidebar-ctrl-icon"></i></h5></a>
      
    </nav>
  <!-- //dashbord-navigation -->

  <!-- Dashboard Header -->
    <section>
    	<div class="container">
    		<div class="row p-2">
    			<div class="col-12">
    				<h3>Dashboard</h3>
    				<h6>Welcome Back, <?php echo $_SESSION['member-firstname']; ?></h6>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- //Dashboard Header -->

     <!-- Dashboard Body -->
    <section>
    	<div class="container p-4 mt-4">
    		<div class="row">
    			<div class="col-lg-4 mb-4 col-md-6">
    				<div class="card border-0 dashboard-card custom_shadow p-2">
						<div class="card-body">
							<div class="row mt-3">
								<div class="col-lg-3 col-6">
									<h1 class="text-white display-4"><i class="fa fa-blog"></i></h1>
								</div>
								<div class=" offset-lg-3 col-lg-6 col-6  mt-1 text-white text-left">
									<h4 class="text-purple mt-3 font-weight-bold">Blog</h4>
									<small class="text-purple">Read, Manage Blog Posts</small>
								</div>
 							</div>
						</div>
						
					</div>
    			</div>

    			<div class="col-lg-4 mb-4 col-md-6">
    				<div class="card border-0 dashboard-card custom_shadow p-2">
						<div class="card-body">
							<div class="row mt-3">
								<div class="col-lg-3 col-6">
									<h1 class="text-white display-4"><i class="fa fa-comments"></i></h1>
								</div>
								<div class=" offset-lg-3 col-lg-6 col-6  mt-1 text-white text-left">
									<h4 class="text-purple mt-3 font-weight-bold">Chat</h4>
									<small class="text-purple">Read, Manage Blog Posts</small>
								</div>
 							</div>
						</div>
					</div>
    			</div>


    			<div class="col-lg-4 mb-4 col-md-6">
    				<div class="card border-0 dashboard-card custom_shadow p-2">
						<div class="card-body">
							<div class="row mt-3">
								<div class="col-lg-3 col-6">
									<h1 class="text-white display-4"><i class="fa fa-comments"></i></h1>
								</div>
								<div class=" offset-lg-3 col-lg-6 col-6  mt-1 text-white text-left">
									<h4 class="text-purple mt-3 font-weight-bold">My Profile</h4>
									<small class="text-purple">View, Edit Profile as memberistrator</small>
								</div>
 							</div>
						</div>
					</div>
    			</div>

    			<div class="col-lg-4 mb-4 col-md-6">
    				<div class="card border-0 dashboard-card custom_shadow p-2">
						<div class="card-body">
							<div class="row mt-3">
								<div class="col-lg-3 col-6">
									<h1 class="text-white display-4"><i class="fa fa-users"></i></h1>
								</div>
								<div class=" offset-lg-3 col-lg-6 col-6  mt-1 text-left">
									<h4 class="text-purple mt-3 font-weight-bold">View Members</h4>
									<p class="m-0 h4 font-weight-bold"><?php echo $countUsers; ?></p>
								</div>
 							</div>
						</div>
					</div>
    			</div>

    		


    		</div>
    	</div>
    </section>
</div>
<!-- //dashboard body -->
<script type="text/javascript">

       
</script>
	
	


</body>
</html>


