<?php 
session_start();
require_once 'config.php';
//TODO: load from database all modules
//TODO: Login module (if session empty, ask js to load loginform in Jquery ui modal
?>
<html>
	<head>
		<title><?php echo $PROGNAME;?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/jquery.session.js" type="text/javascript"></script>
		<script src="js/jquery.md5.min.js" type="text/javascript"></script>
		<script src="js/functions.js" type="text/javascript"></script>
		<!-- <script src="modules/[mod_folder]/functions.js" type="text/javascript"></script> -->
	</head>
	<body>
		<div id="container">
			<div id="login">
				<!-- Button here (login/logout) -->
			</div>
		    <div id="head">
		        <img alt="SmallBusinessManager" class="head_logo" src="img/head.png" />
		        <span id="lbl_progname"><?php echo $COPYRIGHT;?></span>
		        <span id="lbl_customer"><?php echo $CUSTOMER;?></span>
		        <span id="lbl_headline"><?php echo $PROGNAME;?></span>
		    </div>
		    <div id="content_main">
			    <div id="navigation">
			    	<ul>
			    		<!-- <li><span class="nav_button" data-link="[mod_folder]/php/[mod_starting_ajax]">[Mod-Name]</span></li>-->
			    	</ul>
			    </div>
			    <div id="content">
			    	You are currently not logged in. Please Login using the upper right button.
			    	<!-- Filled by JS -->
			    </div>
		    </div>
		    <div id="footer">
		    	&copy; 2013 by Dominik Sigmund@WebDaD.eu
		    </div>
	    </div>
	</body>
</html>
