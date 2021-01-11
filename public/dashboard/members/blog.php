
<?php 
	session_start();
	if ($_SESSION['email'] == false) {
			header("location:../../index.html");
		}

?>

<!DOCTYPE html>
<html>
<head>
<title> Welcome, <?php echo $_SESSION["member-username"]; ?></title>


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
			<script type="text/javascript" src="../../assets/js/jquery.js"></script>
			<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
			<script type="text/javascript" src="../../assets/js/custom.js"></script>
			<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
		<!-- ==================================================================================================== -->
		<!-- //ALL INCLUDED SCRIPTS -->

</head>
<body class="ed-animate-fadeIn">

	<?php 
	require("../../php/db-connect.php");
	include("../../php/functions/countVerifiedUsers.php");
	include("../../php/functions/countUsers.php");
		
	?>

	
	<!-- DASHBOARD SIDENAV -->

    <div class="sidebar bg-blackblue" id="sidebar">
        <div class="col-12 p-2">
          <a class="navbar-brand text-light float-right" onclick="closeSidebar()" style="display: none;" id="sidebarCloser"><i class="fa fa-times"></i></a>
        </div>
        <div class="container mt-4 p-2" style="overflow-y: auto; overflow-x: hidden;">
          <div class="row p-2">
            <!-- Sidebar Head -->
            <div class="col-12">
              <div class="row mb-3">
                <div class="col-2">
                  <h3 class="text-light"><i class="fa fa-user-secret"></i></h3>
                </div>
                <div class="col-10">
                  <p class="text-white text-left ml-2"><small><?php echo $_SESSION["member-username"]; ?><br><?php echo $_SESSION['member-status']; ?></small></p>
                </div>
              </div>
            </div>
           
            <!-- //SideBar Head -->
            <div class="col-12 p-0 m-0">
              <li class="list-group mt-0 mb-0 sidebar-links "><a href="index.php" class="p-3 active  text-white text-decoration-none"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
              <li class="list-group mt-0 mb-0 sidebar-links"><a class="p-3  float-left text-decoration-none" data-toggle="collapse" data-target="#acc"><i class="fa fa-blog"></i>  Blog <span class="float-right mr-5"><i class="fa fa-caret-down"></i></span></a></li>

              <div class="collapse ml-3" id="acc">
              	<li class="list-group mt-0 mb-0 sidebar-links"><a href="write-post.php" class="p-3 text-light text-decoration-none"><i class="fa fa-edit"></i>  Write Post</a></li>
               	<li class="list-group mt-0 mb-0 sidebar-links"><a href="blog-post.php" class="p-3 text-light text-decoration-none"><i class="fa fa-eye"></i>  View Posts</a></li>
              </div>
              
              <li class="list-group mt-0 mb-0 sidebar-links"><a href="chat.php" class="p-3 text-light text-decoration-none"><i class="fa fa-comments"></i>  Chat</a></li>
              <li class="list-group mt-0 mb-0 sidebar-links"><a href="view-member.php" class="p-3 text-light text-decoration-none"><i class="fa fa-users"></i> View Members</a></li>
              <li class="list-group mt-0 mb-0 sidebar-links"><a href="verify-member.php" class="p-3 text-light text-decoration-none"><i class="fa fa-user-check"></i> Verify Users</a></li>
              <li class="list-group mt-0 mb-0 sidebar-links"><a href="profile.php" class="p-3 text-light text-decoration-none"><i class="fa fa-user-secret"></i> My Profile</a></li>
              <li class="list-group mt-0 mb-0 sidebar-links"><a href="logout.php" class="p-3 text-light text-decoration-none"><i class="fa fa-sign-out-alt"></i> Log Out</a></li>

            </div>
          </div>
        </div>
    </div>

<!-- //DASHBOARD SIDENAV -->

<div class="sidebar-pushoff" id="sidebar-pushoff">
	 <!-- dashboard-nav -->
    <nav class="navbar navbar-expand-lg mt-1 mb-0">
      <a class="text-dark navbar-brand float-left mt-0 m-0" onclick="openSidebar()" id="sidebarOpener" style="opacity: 1.5 !important;"><i class="fa fa-bars"></i></a>
      <div class="navbar-collapse collapse">
         <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-3"><a href="" class="nav-link h3 text-muted"><i class="fa fa-bell"></i></a></li>
          <li class="nav-item mr-3"><a href="" class="nav-link h3 text-muted"><i class="fa fa-cog"></i></a></li>
      </ul>
      </div>
    </nav>
  <!-- //dashbord-navigation -->

  <!-- Dashboard Header -->
    <section>
    	<div class="container">
    		<div class="row p-2">
    			<div class="col-12">
    				<h3>Blog</h3>
    				<h6>View and write blog posts</h6>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- //Dashboard Header -->


  <!-- Dashboard Body -->
    <section>
    	<div class="container p-4 mt-4">
    		<div class="row">
    			<div class="offset-lg-1 col-lg-5 mb-4 col-md-6">
    				<div class="card border-0 shadow-sm">
						<div class="card-body bg-white">
							<div class="row">
								<div class="col-4 text-center">
									<h1><i class="fa fa-feather"></i></h1>
								</div>
								<div class="col-8 mt-1 text-left">
									<h4>Write Post</h4>
								</div>
 							</div>
						</div>
						<a class="text-decoration-none" href="write-post.php">
							<div class="card-footer border-0 p-3 bg-primary text-white">
								<span>View | Edit Blog Posts</span>
							</div>
						</a>
					</div>
    			</div>

    			<div class="col-lg-5 mb-4 col-md-6">
    				<div class="card border-0 shadow-sm">
						<div class="card-body bg-white">
							<div class="row">
								<div class="col-4 text-center">
									<h1><i class="fa fa-edit"></i></h1>
								</div>
								<div class="col-8 mt-1 text-left">
									<h4>Manage Posts</h4>
								</div>
 							</div>
						</div>
						<a class="text-decoration-none" href="blog-post.php">
							<div class="card-footer border-0 p-3 bg-lightteal text-white">
								<span>Manage all Posts</span>
							</div>
						</a>
					</div>
    			</div>
    		</div>
    	</div>
    </section>
</div>


</body>
</html>


