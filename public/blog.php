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
			<title>Tech Benders | Blog</title>
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

		<!-- //ALL INCLUDED SCRIPTS -->

		<style type="text/css">
			
			
			
				.delete-post{
						display: none;
					}
		</style>
				
		

</head>
<body onload="loadPosts()">

	
 <!--===============================PAGE BANNER SECTION==========================-->

	<header class="ed-banner bg-purple" id="pageBanner" style="height: auto;">
		<div>
		<!-- Top Navigation -->
			<nav class="navbar navbar-expand-lg bg-purple boder-0 shadow-none">
				<a class="navbar-brand font-weight-bold text-white ml-5 mt-2" href="">TECH BENDERS</a>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-5 mt-3 ml-auto">
						<li class="nav-item mr-2 ml-2"><a href="" class="text-white nav-link"><small>HOME</small></a></li>
						<li class="nav-item mr-2 ml-2"><a href="" class="text-white nav-link"><small>ABOUT</small></a></li>
						<li class="nav-item mr-2 ml-2"><a href="" class="text-white nav-link"><small>CONTACT US</small></a></li>
						<li class="nav-item mr-2 ml-2"><a href="" class="text-white nav-link"><small>PROJECTS</small></a></li>
						<li class="nav-item mr-2 ml-2"><a href="" class="text-white nav-link"><small>BLOG</small></a></li>
						<li class="nav-item mr-2 ml-2"><a href="" class="text-white nav-link"><small>ACCOUNT</small></a></li>
					</ul>
				</div>
				
			</nav>

		<!-- //Top Navigation -->

				<div class="container p-4">
					<div class="row mt-5">
						<div class="col-12 text-center text-white">
							<div class="">
								<div>
									<center>
										<img src="assets/img/util_images/brand.png" width="80" height="80">
									</center>
									<h3 class="ed-text-white  font-weight-bold mb-4 mt-5 animated fadeInDown" id="bannerText">BLOG</h3>
									<a href="">Home</a> <i class="fa fa-arrow-right"></i>	<a href="">About</a>
								</div>
							 </div>
						</div>	
					</div>
				</div>

		</div>		
	</header>
 <!--===============================END OF PAGE BANNER SECTION==========================-->




 			
 			
 			<div class="container p-4">
				<div class="row">
					<div class="col-12">
						
						<h2 class="text-center font-weight-bold">BLOG POSTS</h2>
					</div>
				</div>
			</div>
 			<div id="blogPosts">
 				<!-- Where all blog posts appear -->
 			</div>

 				



<!-- ========================================================FOOTER SECTION ======================================================== -->
	<section class="bg-purple">
		<div class="navbar navbar-expand-lg ">
		</div>
		<footer class="footer text-white">
			<div class="container p-4">
					<div class="row p-4 mt-5 mb-5">
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
											<small><a href="" class="xsm-text text-white">HOME</a></small>
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
									<small class="xsm-text ed-text-muted">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</small>
									
								</div>
							</div>
						</div>
						
						

					</div>
			</div>
		</footer>
	</section>

<!-- ========================================================END OF FOOTER SECTION ================================================== -->

<!-- ALL INCLUDED SCRIPTS -->
	<!-- ==================================================================================================== -->
			<script src="assets/js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="assets/js/wow.min.js"></script>
			<script type="text/javascript" src="assets/js/wow.js"></script>
			<script type="text/javascript" src="assets/js/custom.js"></script>
			
	<!-- ==================================================================================================== -->
<!-- //ALL INCLUDED SCRIPTS -->


<script type="text/javascript">
	function loadPosts(){
		setInterval(getPosts, 1000);
	}

	function getPosts() {
		 var Req = new XMLHttpRequest();
		 var RequestedInfo = document.getElementById("blogPosts");
		     Req.onreadystatechange = function(){
		         if(Req.readyState == 4 && Req.status == 200){
		             RequestedInfo.innerHTML = Req.responseText;
		         }
		     };
		      Req.open("GET", "php/blog/get-posts.php", true);
		      Req.send();
	}
</script>

		

</body>
</html>