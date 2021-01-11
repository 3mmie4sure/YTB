
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 	
				require("php/db-connect.php");
				$id = $_GET['article_id'];
				$selectPost = "SELECT * FROM blog WHERE article_id='$id'";
				$result = mysqli_query($conn, $selectPost);
				$row = mysqli_fetch_assoc($result);
				echo "POST: " .$row['article_name'];
	 	?>


	 	
	 </title>

	 <?php
		require("php/db-connect.php");
		if(isset($_POST['view-post'])){
			$id = $_GET['article_id'];
			$selectPost = "SELECT * FROM blog WHERE article_id='$id'";
			$result = mysqli_query($conn, $selectPost);

			if($result){
					 $fetchPost = mysqli_fetch_assoc($result);
					 $image = $fetchPost['article_img'];
					 $image_src = "dashboard/admin/uploads/".$image;
					 

			}
			else{
				echo "COULD NOT FETCH USER POST";
			}
		}
		
	?>

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
			<title>Tech Benders | Home</title>
		<!-- ================================================================================================== -->
		<!-- //PAGE TITLE -->

		<!-- ALL INCLUDED STYLESHEETS -->
		<!-- =================================================================================================== -->
		  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		  <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
		  <link rel="stylesheet" type="text/css" href="assets/icons/fa/css/all.css">
		   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		  
		<!-- =================================================================================================== -->
		<!-- //ALL INCLUDED STYLESHEETS -->

		<!-- ALL INCLUDED SCRIPTS -->
		<!-- ==================================================================================================== -->
			<script type="text/javascript" src="assets/js/jquery.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="assets/js/wow.min.js"></script>
			<script type="text/javascript" src="assets/js/wow.js"></script>
			
		<!-- ==================================================================================================== -->
		<!-- //ALL INCLUDED SCRIPTS -->
		<style type="text/css">
			header{
				
				background-image: url(<?php echo $image_src;?>);
				background-size: 100% 900px;
				height: 600px;
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
			.dim{
				width: 100%;
				height: 600px;
				background-color: rgba(0,0,0,0.7);
			}
		</style>
</head>
<body>
	

	<header>
		<div class="dim">
			<div class="container p-4 mb-4" style="overflow: auto !important;">
				<div class="row p-4 mt-5" style="overflow: auto !important;">
					<div class="col-12 mt-5" style="overflow: auto !important;">
						<h1 class="text-white display-4 mt-5 text-center font-weight-bold"><?php echo $fetchPost['article_name'];?></h1>
						<h4 class="text-center text-white mt-3">Posted By <?php echo $fetchPost['user_id']; ?></h4>
						<h6 class="text-center text-white"><?php echo $fetchPost['dateadded']; ?></h6>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="container p-4">
		<div class="row">
			<div class="offset-lg-0 col-lg-12">
				<h3 class="ml-4"><?php echo $fetchPost['article_name'];?></h3>
				<p class="text-dark p-4"><?php echo $fetchPost['article_content']; ?></p>
			</div>
		</div>
	</div>



<!-- ========================================================FOOTER SECTION ======================================================== -->
	<section>
		<div class="navbar navbar-expand-lg bg-lightteal">
			<a class="navbar-brand   offset-lg-1 text-white">YOUNG TECH BENDERS</a>
		</div>
		<footer class="ed-footer text-white" style="background-color: #021017;">
			<div class="container p-4">
					<div class="row p-4 mt-4">
						<div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">
							<div class="row">
								<div class="col-lg-4 p-4">
									<div class="ed-text">
										<h4 class="mb-4"><strong>ABOUT US</strong></h4>
										<small class="xsm-text ed-text-muted">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</small>
									</div>
								</div>

								<div class="col-lg-4 p-4">
									<div class="ed-text">
										<h4 class="mb-4"><strong>QUICK LINKS</strong></h4>
										<div class="row p-0">
											<div class="col-lg-6 col-md-6">
											<small><a href="index.html" class="xsm-text text-white">HOME</a></small>
											<br>
											<small><a href="" class="xsm-text text-white">ABOUT</a></small>
											<br>
											<small><a href="" class="xsm-text text-white">CONTACT</a></small>
										</div>
										<div class="col-lg-6 col-md-6">
											<small><a href="" class="xsm-text text-white">PROJECT</a></small>
											<br>
											<small><a href="" class="xsm-text text-white">BLOG</a></small>
											<br>
											<small><a href="" class="xsm-text text-white">REGISTER | LOGIN</a></small>
										</div>
										</div>

									</div>
								</div>

								<div class="col-lg-4 p-4">
									<h4 class="mb-4"><b>CONTACT INFO</b></h4>
									<address class="text-light">
											<blockquote>
												<small><i class="fa fa-home"></i> | No. 8, Ondo Street, Ebute Metta(West), Lagos Nigeria.</small>
												<br>
												<small><i class="fa fa-envelope"></i> | info@edsofta.com</small>
												<br>
												<small><i class="fa fa-mobile"></i> | 0814-653-0653, 0814-162-0162.</small>
												<br>
												<small><i class="fa fa-whatsapp"></i> | 0814-653-0653</small>
											</blockquote>
										</address>
									
								</div>
							</div>
						</div>
						
						

					</div>
			</div>
		</footer>
	</section>

<!-- ========================================================END OF FOOTER SECTION ================================================== -->


	
	

</body>
</html>
