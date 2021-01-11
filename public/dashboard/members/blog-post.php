 
<?php 
session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Dasboard | Blog Posts</title>


	<!-- META TAGS -->
	<!-- ==================================================================================================== -->
	  <meta name="description" content="Mordern E Library">
	  <meta name="keywords" content="Library, E-Library, Library Management, School E-kits, Schools, Management">
	  <meta name="author" content="Library Management">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ================================================================================================== -->
	<!-- //META TAGS -->


	<!-- ALL INCLUDED STYLESHEETS -->
	<!-- =================================================================================================== -->
	  <link rel="stylesheet" type="text/css" href="../../assets/css/ed.css">
	  <link rel="stylesheet" type="text/css" href="../../assets/icons/fa/css/all.css">
	<!-- =================================================================================================== -->
	<!-- //ALL INCLUDED STYLESHEETS -->

	<!-- ALL INCLUDED SCRIPTS -->
	<!-- ==================================================================================================== -->
		<script src="../../assets/js/ed.js"></script>
	<!-- ==================================================================================================== -->
	<!-- //ALL INCLUDED SCRIPTS -->

<style>
	
.ed-nav{margin-right: 20%;}
.delete-post{ display: none;}


/*@media only screen and (orientation:portrait){
	.ed-nav a{color: dodgerblue;}
	.chat-toggle{
			width: 80px;
			height: 80px;
			position: fixed;
			padding: 20px;
			bottom: 8%;
			transition: 0.74s;
			right:22%;
			border-radius: 50%;
			box-shadow: 0px 6px 7px 0px rgba(0,0,0,0.15);
		}
		.chat-toggle:hover{
			width: 86px;
			height: 86px;
			box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.15);
		}
		
			html,body{
		margin: auto;
	}
		.chat-container{
			width: 100%;
			height: 80%;
			position: fixed;
			overflow: auto;
			background-color: white;
		}
		.inner-chat-container{
			width: 100%;
			height: 100%;
			padding: 20px;
			overflow: auto;
			background-color: whitesmoke;
		}
		.chat{
			width: 100%;
			height: auto;
			padding: 10px;
			margin-top: 10px;
			box-shadow: 0 4px 4px 0 rgba(0,0,0,0.1);
			margin-bottom: 20px;
			border-radius: 15px;
			background-color: white;
			color: black;
		}
		.chat-head{width: 100%; height: auto;}
		.username{
			font-size: 10px;
			font-weight: bolder;
			float: left;
			font-family: calibri light;
		}
		.time{
			font-size: 8px;
			padding-left: 15px;
			font-weight: bolder;
			float: right;
			font-family: calibri light;
		}
		.chat-text{font-size: 12px; padding-top: 1px; font-family: calibri light; float: left; width: width: 100%; height: auto;}
		.chat{}

}

@media only screen and (orientation: landscape){
		#user{height: 100px;}
			.chat-toggle{
			width: 80px;
			height: 80px;
			position: fixed;
			padding: 20px;
			bottom: 8%;
			transition: 0.74s;
			right:22%;
			border-radius: 50%;
			box-shadow: 0px 6px 7px 0px rgba(0,0,0,0.15);
		}
		.chat-toggle:hover{
			width: 86px;
			height: 86px;
			box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.15);
		}
		
	html,body{margin: auto;}
		.blog-container{
			width: 100%;
			height: 100%;
			position: fixed;
			background-color: whitesmoke;
		}
		.blog-section{
				width: 76%;
				height: 100%;
				background-color: whitesmoke;
				padding: 75px;
				float: left;
				position: fixed;
		}
		.related{
			width: 20%;
			height: 100%;
			background-color: snow;
			float: right;
			position: relative;
		}
		.blog-post{
			width: 70%;
			height: auto;
			padding: 20px;
			margin-top: 40px;
			margin-bottom: 40px;
			border-radius: 10px;
			box-shadow: 0px 3px 3px 0px rgba(0,0,0,0.05);
			overflow: auto;
			background-color: snow;

		}
		.blog-post img{
			width: 140px;
			height: 170px;
			float: left;
			border: 10px solid lightgrey;
		}
		.blog-post .blog-text{
			width: auto;
			height: auto;
			padding-left: 15px;
			overflow: auto; 
		}
		.blog-post footer{
			width: 100%;
			height: auto;
			padding: 8px;
			overflow: auto;
		}
}
*/

</style>


</head>
<body class="ed-animate-fadeIn">

	
		<div class="ed-sidebar ed-black" id="ed-sidebar">
			<div class="ed-sidebar-head">
				<div class="ed-sidebar-header ed-teal">
					<h5 class="ed-text-white ed-flt-left ed-font-segoe-ui-light">Tech Benders</h5>
				</div>

					<div class="ed-row">
						<div class="ed-col-onethird ed-text-center">
							<h1 class="ed-text-white"><i class="fa fa-user-secret"></i></h1>
						</div>

						<div class="ed-col-twothird ed-text-white">
							<p class="ed-text-white  ed-font-calibri-light"><?php echo $_SESSION['member-username']; ?></p>
							<p>Admin.</p>
							
						</div>
					</div>
			</div>
			<a class="ed-text-white ed-hover-teal" href="index.php"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
			<a class="ed-text-white ed-hover-teal ed-accordion-ctrl"><i class="fa fa-blog"></i> Blog</a>
				<div class="ed-accordion-content">
					<a class="ed-text-white ed-hover-teal" href="write-post.php"><i class="fa fa-comments"></i> Write Post</a>
					<a class="ed-text-white ed-hover-teal" href="blog-post.php"><i class="fa fa-users"></i> View Post</a>
				</div>
			<a class="ed-text-white ed-hover-teal" href="chat.php"><i class="fa fa-comments"></i> Chat</a>
			<a class="ed-text-white ed-hover-teal" href="view-member.php"><i class="fa fa-users"></i> View Members</a>
			<a class="ed-text-white ed-hover-teal"><i class="fa fa-users"></i> My Profile</a>
			<a class="ed-text-white ed-hover-teal" href="logout.php"><i class="fa fa-sign-out-alt"></i> Log Out</a>
		</div>


	<div class="ed-dshbrd-container" id="ed-dshbrd-container">
		<div class="ed-dshbrd-topnav ed-teal">
			<h3 class="ed-flt-left ed-text-white" id="open-sidebar" style="display: block;" onclick="openSidebar()"><i class="fa fa-bars"></i></h3>
			<h3 class="ed-flt-left ed-text-white" id="close-sidebar" onclick="closeSidebar()" style="display: none;"><i class="fa fa-bars"></i></h3>
		</div>	

		<div class="ed-topnav ed-ws">
			<h3 class="ed-brand ed-font-arial-narrow"><i class="fa fa-feather"></i> Blog</h3>
		</div>
		<div class="ed-container" style="display: block;">
			<?php 
							
							 require("../../php/db-connect.php");
							 $selectPost = "SELECT * FROM blog";
							 $result = mysqli_query($conn, $selectPost);
							 $row = mysqli_fetch_assoc($result);
							 $image = $row['article_img'];
							$image_src = "../admin/uploads/".$image;
							 include("../../php/blog/get-posts.php");
							 echo "Plsease show na";

								

						 ?>
			

						
		
		</div>

	
</div>
			
<script type="text/javascript">
	 (function() {
  var elements;
  var windowHeight;

  function init() {
    elements = document.querySelectorAll('.ed-reveal');
    windowHeight = window.innerHeight;
  }

  function checkPosition() {
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = elements[i].getBoundingClientRect().top;

      if (positionFromTop - windowHeight <= 0) {
        element.classList.add('fade-in-element');
        element.classList.remove('ed-reveal');
      }
    }
  }

  window.addEventListener('scroll', checkPosition);
  window.addEventListener('resize', init);

  init();
  checkPosition();
})();
</script>

</body>
</html>

