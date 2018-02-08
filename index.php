<?php
error_reporting(0);
include "curl_gd.php";

	$url = $_GET['url'];
	$linkdown = Drive($url);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
	<title>Get link Google Drive</title>
</head>
<body>

		<!-- Styles -->
  <link rel="stylesheet" href="https://cdn.plyr.io/2.0.13/plyr.css">

  <!-- Docs styles -->
  <link rel="stylesheet" href="https://cdn.plyr.io/2.0.13/demo.css">
	<style>
		.container {
		  max-width: 100%;
		  margin: 0 auto;
			overflow: hidden;
			height: 100%;
		}
		.plyr {
		  border-radius: 0px;
		  margin-bottom: 0px;
		}
	</style>

	<div class="container">
	<?php echo $linkdown;?>
	  <video controls crossorigin>
	    <!-- Video files -->
	    <source src="<?php echo $linkdown;?>" type="video/mp4">
	    <!-- Fallback for browsers that don't support the <video> element -->
	    <a href="<?php echo $linkdown;?>" download>Download</a>
	  </video>
	</div>

	<!-- Plyr core script -->
 <script src="https://cdn.plyr.io/2.0.13/plyr.js"></script>

 <!-- Docs script -->
 <script src="https://cdn.plyr.io/2.0.13/demo.js"></script>

</body>
</html>
