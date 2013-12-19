<?php 
require_once 'config.php';
mysql_connect($db["server"], $db["user"], $db["pass"]) or die("Unable to reach Database, check User");
mysql_select_db($db["name"]) or die("Unable to reach specific Database, check Database");

mysql_query("SET NAMES utf8");

$modules = array();

$sql = "SELECT name, folder, starting_ajax FROM modules ORDER BY name";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
	array_push(array(name => $row["name"], folder => $row["folder"], starting_ajax => $row["starting_ajax"]));
}
mysql_close();
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
		<?php foreach($modules as $mod): ?>
			<script src="modules/<?php echo $mod["folder"]; ?>/functions.js" type="text/javascript" ></script>
		<?php endforeach ?>
	</head>
	<body>
		<div id="container">
			<div id="login">
				<img src="img/lock.png" class="login" alt="Login" title="Login"/>
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
			    	<?php foreach($modules as $mod): ?>
						<li><span class="nav_button" data-link="<?php echo $mod["folder"]; ?>/php/<?php echo $mod["starting_ajax"]; ?>"><?php echo $mod["name"]; ?></span></li>
					<?php endforeach ?>
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
