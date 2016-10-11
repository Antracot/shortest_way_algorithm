<html>
	<head>
		<meta charset="utf 8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">	
		<link rel="stylesheet" href="../css/shortestway.css">
		<link rel="shortcut icon" href="../img/favicon.ico">
		<title>The shortest way</title>
	<style>
		body{
			background-image: url(../img/shortestway/bg_airport.jpg);
			background-size: cover;
		}
		
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
			z-index: 2
		}
				
		.close {
			color: firebrick;
			margin-top: 7px;
			margin-right: 7px;
			padding: 5px 25px;
			border-radius: 5px;
			font-size:16px;
			z-index: 2
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
			background-image: url(../img/shortestway/map.jpg);
			background-repeat: no-repeat;
            background-size: 100%;
			background-position:cover;
			z-index: 2
		}
		
		.content {
			/*height: 1800px;
			padding-top: 200px;*/
			/*background-color: chartreuse;*/
			text-align: right;		
		}

	</style>
		
	</head>
<body>
	
	<div class="slide-down-page">
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
	</script>
	
	<div class="aa">
		<h1>the Shortest way to the countries of Europe</h1>
		
			<?php
				//db connect file
				include ('connect_db.php');
				
				//style for select tag
				$select_tag="style=' width:200px; 
									height:35px; 
									border:0;
									border-radius: 5px;
									-webkit-border-radius: 5px;
									-o-border-radius: 5px;
									-moz-border-radius: 5px;
									cursor: text'";
		
		
				//style for button GO!
				$button="style='width: 100px;
								height: 35px;
								border:0;
								border-radius: 5px;
								font-size:16px;	
								-webkit-border-radius: 5px;
								-o-border-radius: 5px;
								-moz-border-radius: 5px;
								background-color: skyblue;
								cursor: pointer'";
						
				// first cities list from db
				echo "<form action='result.php' method='post' name='from'>";
				echo "<select ".$select_tag." size='1' name='select1'>";



				$sql = "SELECT countries FROM city";
				$result_select = mysql_query($sql);


				while($object = mysql_fetch_object($result_select)){
				echo "<option value='' disabled selected hidden>Choose the country from ...</option>
				<option value = '$object->countries' > $object->countries </option>";}
				echo"</select>&nbsp&nbsp&nbsp";	

				// second cities list from db
				echo "<form action='result.php' method='post' name='to'>";
				echo "<select ".$select_tag." size='1' name='select2'>";

				$sql = "SELECT countries FROM city";
				$result_select = mysql_query($sql);


				while($object = mysql_fetch_object($result_select)){
				echo "<option value='' disabled selected hidden>Choose the country to ...</option>
				<option value = '$object->countries' > $object->countries </option>";}
				echo"</select>&nbsp&nbsp&nbsp";	

				echo "<input type='submit' ".$button." name='enter' value='START'></form>";

					if(isset($_POST['enter'])){
					$from = $_POST['select1'];
					$to = $_POST['select2'];
					}
				?>
		<p>If you plan some trip with friends to Europe by car and want to watch beautiful cities on 
			you way use easy option to find shortest way. You can choose by time or by distance and spend your time more 
			comfortable and fun</p>
		</div>
	</div>
	</body>
</html>











	


	  



	  