<?php

echo "<!DOCTYPE html>";
echo "<html>";
	
	require_once('includes/head.php');

	echo "<body>";
	
		require_once('includes/header.php');

		if (!isset ($_GET["page"])) {

  			require_once('includes/home.php');
  		}

  		if (isset($_GET["page"])) {


  			$content_file = "includes/content_".$_GET["page"].".php";

  			if (file_exists ($content_file)) {

  				require_once ($content_file);
  			}

  			else {
  				require_once ('includes/content_404.php');
  			}
 		}

	echo "</body>";

echo "</html>";
?>