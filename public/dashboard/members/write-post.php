
<?php 
	session_start();
	if ($_SESSION['email'] == false) {
			header("location:../../index.html");
		}

?><!DOCTYPE html>
<html>
<head>

	<title></title>
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
<body class="bg-light">

	<?php 
		// $selectUser = "SELECT * FROM member_user"; 
		// $results = mysqli_query($conn, $selectUser);
		// $result = mysqli_fetch_assoc($results);
		// $id = $result['id'];
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
               	<li class="list-group mt-0 mb-0 sidebar-links"><a href="view-post.php" class="p-3 text-light text-decoration-none"><i class="fa fa-eye"></i>  View Posts</a></li>
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
    				<h3>Write A Post</h3>
    				<h6>Post on the tech benders forum</h6>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- //Dashboard Header -->

    <!-- dashboard body -->




		



		<div class="container">
			<div class="row">
					<div class="col-12">
						<center>
							<div class="card border-0 bg-white">
								<div class="card-body">
									<form action="../../php/blog/insert-post-member.php" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-lg-4 offset-lg-0 offset-md-3 col-md-6">
												<h1 style="font-size: 300px;" class="m-0"><i class="fa fa-image"></i></h1>
												<input type="file" name="file" class="border border-dark rounded-pill bg-light">
											</div>

											<div class="col-lg-6 col-md-12 p-4 mt-5">
													<input type="text" name="article-name" class="form-control-lg mb-4 border-0 shadow-none w-100 bg-light" placeholder="Enter Post title">
													<textarea class="form-control-lg border-0 bg-light rounded w-100 mb-3" name="article-content" placeholder="Write A post" style="height: 120px;"></textarea>
													<button type="submit" name="post-article" class="btn bg-lightteal  w-100 text-white btn-lg" >POST ARTICLE</button>
												
											</div>
										</div>
										
										
									</form>
								</div>
							</div>
						</center>
					</div>
				</center>
			</div>
		</div>

	</div>

	

</body>
</html>