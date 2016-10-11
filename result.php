<html>
	<head>
		<meta charset="utf 8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">	
		<link rel="stylesheet" href="../css/shortestway.css">
		<link rel="shortcut icon" href="../img/favicon.ico">
		<title>The shortest way</title>
		
	<style>
		
		.btn {
			width: 50px;
			height: 20px;
			display:inline-block;
			text-decoration: none;
			font-family: Open Sans, sans-serif;
			text-align: center;
			background-color: skyblue;
			color:black;
			padding:5px 25px;
			border-radius: 5px;
			font-size:16px;
			cursor: pointer;
		}
				
		.close {
			color: firebrick;
			margin-top: 7px;
			margin-right: 7px;
			padding: 5px 25px;
			border-radius: 5px;
			font-size:16px;
				}		
				
		.slide-down-page {
			display: none;
			position: absolute;
			width: 100%;
			height: 100%;
			left:0;
			top:0;
			box-sizing: content-box;
			text-align: right;
			background-image: url(../img/map.jpg);
			background-repeat: no-repeat;
            background-size: 100%;
			background-position:cover;
		}
		
		.content {
			text-align: right;		
		}

		

	</style>
		
	</head>
<body>
	<div id="map"></div>
	<!-- <div class="slide-down-page">
		<a id="btn_close" class="close btn"><b>Close</a>
	</div>
	
	<div class="content">
		<a id="btn_open" class="open btn"><b>Map</a>
	</div>
	
	<script src="../js/jquery-2.2.3.js"></script>
	<script type="text/javascript">

		$("#btn_open, #btn_close").on('click', function() {
				$('.slide-down-page').slideToggle("slow")({
      		direction: "up"
    		}, 300);
    	$(this).toggleClass('');
	
		});
	</script> -->
	<script src="../js/jquery-2.2.3.js"></script>
	<script type="text/javascript">		
		$('<figure><object data="../shortestway/ajax/map.html"></object></figure>').appendTo('#map');
	    console.log('map.append');
	</script>	
	
	<div class="aa">
		<div class="main">
			<?php

			$from = $_POST['select1'];
			$to = $_POST['select2'];

			echo "<h2>You choose way from $from to $to <br/><br/>";
			echo "<p2>the Shortest way in kilometers: </p2><br/>";
			echo "<div style=\"text-align:center\">";
				include ('script.php');
			echo "</div>\n";
				
			echo "<br/><p2>the Shortest way in time: </p2><br/>";
			echo "<div style=\"text-align:center\">";
				include ('script_time.php');
			echo "</div>\n";	
			?>
		</div>
	</div>
</body>
</html>
