
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
		  <link rel="stylesheet" type="text/css" href="../../assets/css/chat.css">
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
<body class="ed-animate-fadeIn" onload="loadAll()">


<?php require('../../php/ui/components/member-sidebar.php'); ?>

<div class="sidebar-pushoff" id="sidebar-pushoff">
	 <!-- dashboard-nav -->
     <nav class="navbar navbar-expand-lg bg-white shadow-sm mb-0 p-3">
      <a class="sidebar-ctrl"><h5><i class="fa fa-bars sidebar-ctrl-icon"></i></h5></a>
    </nav>
  <!-- //dashbord-navigation -->

  <!-- Dashboard Header -->    	
  		<div class="container m-0 p-0">
    		<div class="row m-0 p-0">
    			<div class="col-12">
    				<h3>Chat</h3>
    				<h6>Send Messages to the members</h6>
    			</div>
    		</div>
    	</div>

    	<div class="row m-0 p-0">
    		<div class="col-lg-2 bg-danger col-md-3 col-12 p-0 m-0" id="onlineUsers">
  
   						<!-- Ajax online users -->
   			</div>
   			<div class="col-lg-10 chat_container col-md-9 col-12 m-0 p-0">
   				<div class="" id="Messages">

    			</div>
    		</div>
    	</div>		
  
   
  

			<div class="message-box">
				<form action="../../php/chats/sendMsgM.php" method="post">
					<div class="row m-0 p-0">
						<div class="col-lg-10 col-9 col-md-10 p-0 m-0">
							<textarea class="form-control bg-light border-0 pl-4 w-100 vh-100 rounded font-weight-bold shadow-none" name="message" placeholder="Write A Message" required=""></textarea>
						</div>
						<div class="col-lg-2 col-md-2 col-3 p-0 m-0">
							 <button type="submit" name="send" class="btn btn-lg w-100 send-btn bg-green border-0 text-white"><i class="fa fa-paper-plane h3"></i></button>
						</div>
					</div>
				</form>
				
			</div>

</div>

		


<script>
function loadAll(){
			setInterval(getMsg, 30);
			setInterval(getOnlineUsers, 30);
		}
function getMsg() {
 var Req = new XMLHttpRequest();
 var RequestedInfo = document.getElementById("Messages");
     Req.onreadystatechange = function(){
         if(Req.readyState == 4 && Req.status == 200){
             RequestedInfo.innerHTML = Req.responseText;
         }
     };
      Req.open("GET", "../../php/chats/retrieve-messages.php", true);
      Req.send();
}

function getOnlineUsers(){
	var onlineUsers = new XMLHttpRequest();
 var onlineuserInfo = document.getElementById("onlineUsers");
     onlineUsers.onreadystatechange = function(){
         if(onlineUsers.readyState == 4 && onlineUsers.status == 200){
             onlineuserInfo.innerHTML = onlineUsers.responseText;
         }
     };
      onlineUsers.open("GET", "../../php/chats/get-online-users.php", true);
      onlineUsers.send();
 }

</script>

	


</body>
</html>


