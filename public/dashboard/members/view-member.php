<?php 
	session_start();
	if ($_SESSION['admin-email'] == false) {
			header("location:../../index.html");
		}

?>
<!DOCTYPE html>
<html>
<head>
<title>Index</title>



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
		<title> <?php echo $_SESSION['admin-username']; ?> </title>
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
			<script type="text/javascript" src="../../assets/js/custom.js"></script>
			<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
		<!-- ==================================================================================================== -->
		<!-- //ALL INCLUDED SCRIPTS -->

</head>
<body class="">


	<?php 
		include("../../php/db-connect.php");
		$selectAll = "SELECT * FROM user";
		$result = mysqli_query($conn, $selectAll);

	?>

	<?php
		include("../../php/db-connect.php");
		$select = "SELECT * FROM user";
		$select = mysqli_query($conn, $select);
		$countRows = mysqli_num_rows($select);

	?>

	
	<?php require('../../php/ui/components/member-sidebar.php'); ?>


<div class="sidebar-pushoff" id="sidebar-pushoff">
	  <!-- dashboard-nav -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm mb-0 p-3">
    	 <a class="sidebar-ctrl"><h5><i class="fa fa-bars sidebar-ctrl-icon"></i></h5></a>
    </nav>
  <!-- //dashbord-navigation -->

  <!-- Dashboard Header -->
    <section>
    	<div class="container animated fadeInUp">
    		<div class="row p-2">
    			<div class="col-12 mt-3">
    				<h3>View Members</h3>
    				<h6>You have <?php echo $countRows; ?> Members on the platform</h6>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- //Dashboard Header -->

    <!-- Dashboard Body -->
     <section>
    	<div class="container p-4 animated fadeInUp slow">
    		<div class="row p-1">
    			<div class="col-md-6 col-lg-5 mb-4">
    				<input type="search" class="form-control bg-light border-0 mb-0 rounded-pill" id="searchTable" name="searchUser" placeholder="Search User By Firstname.." onkeyup="filterTable()">
    			</div>
    			<div class="col-12 table-responsive p-1">
    				<table class="table table-striped" id="edTable">
						
							<?php
								if ($countRows !== 0) {
									echo "<thead class=\"bg-purple text-white\">
											<tr>
												<th class=\"ed-text-white\">FIRSTNAME</th>
												<th class=\"ed-text-white\">LASTNAME</th>
												<th class=\"ed-text-white\">EMAIL ADDRESS</th>
											</tr>
										</thead>";
										echo "<tbody>";
										while($results = mysqli_fetch_assoc($result)){

									
										echo "<tr>
												<td>". $results['firstname']."</td>
												<td>". $results['lastname']."</td>
												<td>". $results['email']  . "</td>
											</tr>";
										echo "</tbody>";
									}
								}

							?>
					</table>
    			</div>
    		</div>
    	</div>
    </section>
</div>
	



	 <script type="text/javascript">
	
		function filterTable(){
			var input, filter, table, tr, td, i;
			input = document.getElementById("searchTable");
			filter = input.value.toUpperCase();
			table = document.getElementById("edTable");
			tr = table.getElementsByTagName("tr");


			for(i = 0; i < tr.length; i++){
				td = tr[i].getElementsByTagName("td")[0];

				if (td) {
					if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					}
					else {
						tr[i].style.display = "none";
					}

				}
			}
		}
</script>

</body>
</html>


