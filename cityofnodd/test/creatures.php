<?php
	//Connect to the database...
	$conn = mysqli_connect('108.163.243.218', 'noddarca_noddarca', '!Council!Business!Only!', 'noddarca_statistics');
	
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}
	
	//Give the user an 'ID' (cookie) so we can save/remove their love/cum/deaths instead of just increasing the count every time they mash that button.
	if (!isset($_COOKIE["nodd_clientID"])) {
		$clientID = random_int(1, 99999999);
		setcookie("nodd_clientID", $clientID, time() + (2 * 365 * 24 * 60 * 60));
	} else {
		//Oh! They already have a cookie.
		$clientID = $_COOKIE["nodd_clientID"];
	}
	
	
	//Free the result from the memory
	mysqli_free_result($result);
	//close the connection
	mysqli_close($conn);

?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		<title>The City of Nodd - Home</title> <!--The page title in the browser tab-->
		<link rel="icon" href="https://nodd-arca.net/test/Site_Assets/icon.png"> <!--The icon in the browser tab!-->
		<link rel="stylesheet" href="styles.css"> <!--Linking the stylesheets (that contain all the 'How to display this stuff' information)-->
		<link rel="stylesheet" href="egobracer.css"> <!--Egobracer.css is for the top and bottom menus, to make it easier to put them into other pages.-->
	</head>
	<body>
		<div class="bg"> <!--This is just a container that holds the background picture. Styles.css has all the information!-->
		</div>
		
		<!--**********************************************-->
		
	
		<?php include('headfoot.php'); ?>
		
		<!--**********************************************-->
		<div id="wedge" class="modal"> <!--We make just ONE 'shell', and then inside that we make a bunch of inner parts that are all toggleable.-->
			<div class="close" onclick="closePoi()"> <!--First, a dimmed background. We tell it that onclick it calls the Javascript function "closeWedge()" such that you can click outside and close the modal lightbox.-->
			</div>
			

		</div>
	
				
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script> //Now we start the jQuery script 'zone' where all the scripts live that power a site. We also use // for comments now since we're in a Javascript zone.
	  



			var pois;
			var poiID = 1;
			var currentLoc = "";
			

			
			
			/******************************************/
			
			/*********************These are our lightbox wedge-popup codes.*********************/
			// Open the Modal
			function openPoi() {
				if (scrollLock == false) {
					$("#wedge").fadeIn("slow");
				}
			}

			// Close the Modal
			function closePoi() {
				$("#wedge").fadeOut("slow");
				for (var i = 0; i < pois.length; i++) {
					pois[i].style.display = "none";
				}
			}

			
			function nextPOI(n) {
				setPOI(poiID += n, lastLoc); //We don't change the 'area' we're in when updating the poi we're scrolling through.
			}

			
			function setPOI(x, loc = lastLoc) { //Default to "no change in area".
				if (scrollLock == false) {
					lastLoc = loc; //Update the "no change in area" to the new value, if it changed.
					var i;
					switch (loc) { //Figure out which 'pool' of locations to draw from
						case "morphoria":
							pois = document.getElementsByClassName("morphPOIs");
							break;
						case "omnillian":
							pois = document.getElementsByClassName("omnPOIs");
							break;
						case "psilysium":
							pois = document.getElementsByClassName("psiPOIs");
							break;
						case "umbrasia":
							pois = document.getElementsByClassName("umbPOIs");
							break;
						case "vorn":
							pois = document.getElementsByClassName("vornPOIs");
							break;
						case "viviria":
							pois = document.getElementsByClassName("vivPOIs");
							console.log(pois);
							break;
						case "outside-inn":
							pois = document.getElementsByClassName("outsideInnPOIs");
							break;
						case "eggpluck":
							pois = document.getElementsByClassName("eggpluckPOIs");
							break;
						case "induction":
							pois = document.getElementsByClassName("inductionPOIs");
							break;
						default:
							pois = document.getElementsByClassName("empty");
					}
					if (x > pois.length) {poiID = 1}
					else if (x < 1) {poiID = pois.length}
					else {poiID = x};
					for (i = 0; i < pois.length; i++) {
						pois[i].style.display = "none";
					}
					pois[poiID-1].style.display = "block";
					getLCD(currentLoc);
				}
			}
			
			$(document).ready(function(){
				$(document).bind('keydown', function(e) { 
					if (e.which == 27) {
						closePoi();
					}
				}); 
			});

			
		</script>
	</body>
</html>
