<?php
	$Error = 'An error occured, please try again later.';
	
	if(isset($_GET['eid']) ) {
		$ErrorID = $_GET['eid'];
		if ($ErrorID == 1) {
			$Error = 'The required variables have not been submited.';
		} else if ($ErrorID == 2) {
			$Error = "The type you've submited does not exist.";
		} else if ($ErrorID == 12) {
			$Error = "The job has already been started.";
		} else if ($ErrorID == 13) {
			$Error = "That job has been completed.";
		} else if ($ErrorID == 14) {
			$Error = "You don't have access to this area.";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Coder4Hire - Error</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="css/c4h_login.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="ico/favicon.png">
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#">Coder4Hire</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="home.php"><img src="Images/FatCow_16x16/button_navigation_back.png" alt="Back Button" /> Back</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div id="container" class="container" style="background-color: #FFFFFF;border-radius:5px;">
			<h1>Error!</h1>
			<?php 
				echo '<p class="alert alert-error"><img src="Images/FatCow/error.png" alt="Failure" /> '.$Error.'</p>';
			?>
		</div> <!-- /container -->
		
		<div class="navbar navbar-fixed-bottom">
			<div class="navbar-inner">
				<div id='footer' class="container">
					<p>Powered by <a  href="http://steampowered.com/" alt="Powered by Steam">Steam</a></p>
				</div>
			</div>
		</div>

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="js/bootstrap-transition.js"></script>
		<script src="js/bootstrap-alert.js"></script>
		<script src="js/bootstrap-modal.js"></script>
		<script src="js/bootstrap-dropdown.js"></script>
		<script src="js/bootstrap-scrollspy.js"></script>
		<script src="js/bootstrap-tab.js"></script>
		<script src="js/bootstrap-tooltip.js"></script>
		<script src="js/bootstrap-popover.js"></script>
		<script src="js/bootstrap-button.js"></script>
		<script src="js/bootstrap-collapse.js"></script>
		<script src="js/bootstrap-carousel.js"></script>
		<script src="js/bootstrap-typeahead.js"></script>

	</body>
</html>