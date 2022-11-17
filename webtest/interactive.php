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
	
	//Get cum count
	$sql = "SELECT location, userID FROM count_cum";
	$result = mysqli_query($conn, $sql);
	$cumData = array();
	while($row=mysqli_fetch_assoc($result)){
		$cumData[] = array("location"=>$row["location"], "clientID"=>$row["userID"]);
	}
	//Get death count
	$sql = "SELECT location, userID FROM count_death";
	$result = mysqli_query($conn, $sql);
	$deathData = array();
	while($row=mysqli_fetch_assoc($result)){
		$deathData[] = array("location"=>$row["location"], "clientID"=>$row["userID"]);
	}
	//Get love count
	$sql = "SELECT location, userID FROM count_love";
	$result = mysqli_query($conn, $sql);
	$loveData = array();
	while($row=mysqli_fetch_assoc($result)){
		$loveData[] = array("location"=>$row["location"], "clientID"=>$row["userID"]);
	}
	//Free the result from the memory
	mysqli_free_result($result);
	//close the connection
	mysqli_close($conn);

?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		<title>The City of Nodd - Interactive</title> <!--The page title in the browser tab-->
		<link rel="icon" href="https://nodd-arca.net/test/Site_Assets/icon.png"> <!--The icon in the browser tab!-->
		<link rel="stylesheet" href="styles.css"> <!--Linking the stylesheets (that contain all the 'How to display this stuff' information)-->
		<link rel="stylesheet" href="egobracer.css"> <!--Egobracer.css is for the top and bottom menus, to make it easier to put them into other pages.-->
		<link href="jquery-ui/jquery-ui.css" rel="stylesheet"> <!--Jquery ui styles!-->
	</head>
	<body>
		<div class="bg"> <!--This is just a container that holds the background picture. Styles.css has all the information!-->
		</div>
		
		<!--**********************************************-->
		
		<div class="main" id="interactive" style="margin-top:15vh;margin-bottom:15vh;"> <center>
			<img src="Site_Assets/header_interactive.png" class="headerImg"/></center>
			
			<div class="interactText" style="padding-top: 1vh;padding-bottom: 5vh;"><center>This is a collection of all interactive content, including all current Noddules. These can also be accessed with the <a href="explore.php">Noddule Map</a>.</center></div>
			
			<div class="interactLogo"><center><img src="Site_Assets/noddule_logo.webp" /></center></div>
			
			<div class="interactContainer">
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_085d840ba49c4ed39900ba4b55ef8f15~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_085d840ba49c4ed39900ba4b55ef8f15~mv2.jpg" onclick="setPOI(1);openPoi();" role="button" tabIndex="0" /></a>
					<div class="interactInnerTitle">Induction</div>
					<div class="interactInnerText">Experience an outsider's invasive induction through the City gates.</div>
				</div>
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_adc0051017404a54a25e10372bc4108b~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_adc0051017404a54a25e10372bc4108b~mv2.jpg" onclick="setPOI(2);openPoi();" role="button" tabIndex="0" />
					<div class="interactInnerTitle">Darkling Row</div>
					<div class="interactInnerText">Explore a mysterious area near the gates of Nodd.</div>
				</div>
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_bc2cce024bac4288a5fa85914ae04117~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_bc2cce024bac4288a5fa85914ae04117~mv2.jpg" onclick="setPOI(3);openPoi();" role="button" tabIndex="0" />
					<div class="interactInnerTitle">The Outside Inn</div>
					<div class="interactInnerText">Drink or talk your way through one of the 'friendlier' bars in the City - the only tavern you're likely to survive the night in.</div>
				</div>
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg" onclick="setPOI(4);openPoi();" role="button" tabIndex="0" />
					<div class="interactInnerTitle">Hearthhunt - My Dear Chambers</div>
					<div class="interactInnerText">Try to survive a building that does not want you inside it... Urbex with teeth.</div>
				</div>
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_d080b6e9acab406da33b467a9f8616e0~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_d080b6e9acab406da33b467a9f8616e0~mv2.jpg" onclick="setPOI(5);openPoi();" role="button" tabIndex="0"/>
					<div class="interactInnerTitle">Cirque du Sadique</div>
					<div class="interactInnerText">The greatest, goriest show in Nodd.</div>
				</div>
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_c9b5e98a68f5470c9d50ed58d461e139~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_c9b5e98a68f5470c9d50ed58d461e139~mv2.jpg" onclick="setPOI(6);openPoi();" role="button" tabIndex="0" />
					<div class="interactInnerTitle">Viviria District</div>
					<div class="interactInnerText">A quartet of experiences through the portions of the City that throb with life. Use the arrows to choose your adventure.</div>
				</div>
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_c571133643c7402486a463e68f09b7c6~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_c571133643c7402486a463e68f09b7c6~mv2.jpg" onclick="setPOI(10);openPoi();" role="button" tabIndex="0"  />
					<div class="interactInnerTitle">Crusty's Carriage</div>
					<div class="interactInnerText">A grand tour of the City and its many inhabitants.</div>
				</div>
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg" onclick="setPOI(11);openPoi();" role="button" tabIndex="0" />
					<div class="interactInnerTitle">Hearthhunt - Buttonbag's Toybox</div>
					<div class="interactInnerText">Once again try to survive a hostile environment - this time, a mysterious plush toy store where not all is as it seems...</div>
				</div>
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg" onclick="setPOI(12);openPoi();" role="button" tabIndex="0" />
					<div class="interactInnerTitle">Slurt's Sweets</div>
					<div class="interactInnerText">Taste the wild wonders of a Noddish confectionary shop.</div>
				</div>
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg" onclick="setPOI(13);openPoi();" role="button" tabIndex="0" />
					<div class="interactInnerTitle">Ditchfire Kitchen</div>
					<div class="interactInnerText">A more game-like Noddule. Can you rise to the challenge of being a Noddish chef?</div>
				</div>
				<hr class="solid">
				<div class="interactCiti">
					<a href="https://bit.ly/3ynS41C" target="_blank"><img src="Site_Assets/citizengen.webp" style="width:20vw;"/></a>
				</div>
				<div class="interactCitiText">
					A randomizer for creating new insider characters, including colors, body type, anomalies, personality traits, and more.
				</div>
				<div style="height:4vh;clear:left;"></div>
				<hr class="solid">
				<div class="interactInnerText" style="padding-top: 5vh;padding-bottom: 5vh;"><center>The following content was developed separately by <a href="https://www.furaffinity.net/user/rekrith" target="_blank">Salrith</a> prior to their formal assistance with the City of Nodd project.</center></div>
				
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg" onclick="setPOI(14);openPoi();" role="button" tabIndex="0" /></a>
					<div class="interactInnerTitle">The Compass House</div>
					<div class="interactInnerText">A personality-quiz style experience designed to help teach people about the different Houses and Cults of Nodd.</div>
				</div>
				
				<div class="interactNoddule">
					<img class="interactImg" src="https://static.wixstatic.com/media/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg/v1/fit/w_1164,h_529,q_90/ebefb2_d5c8e34f42c84e0295392b694874542f~mv2.jpg" onclick="setPOI(15);openPoi();" role="button" tabIndex="0" /></a>
					<div class="interactInnerTitle">The Beguiling Eye</div>
					<div class="interactInnerText">Visit the Beguiling Eye and examine their selection of voyeur glasses, each offering a different experience and perspective within the City.</div>
				</div>
			
			</div>
		</div>
		
		<?php include('headfoot.php'); ?>
		
		<div id="wedge" class="modal"> <!--We make just ONE wedge 'shell', and then inside that we make a bunch of inner parts that are all toggleable.-->
			<div class="close" onclick="closePoi()"> <!--First, a dimmed background. We tell it that onclick it calls the Javascript function "closePoi()" such that you can click outside the map zoom and close the modal lightbox.-->
			</div>
			
			<?php include('locations.php'); ?>
						
			<div class="empty">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:relative;left:50%;top:50%;transform:translate(-50%,-50%);overflow:none;height:100%;width:auto;" preserveAspectRatio="xMidYMid meet"  viewBox="0 00 400 300">
				
				</svg>
			</div>
		</div>
				
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="jquery-ui/jquery-ui.js"></script>
		<script> 
			/******************************************/
			$('#egoBracerBut').on('click', function(e) { //In the element named specifically "egoBracerBut", when someone clicks it, run this code.
				$('.egoShell').toggleClass('egoButton_active'); //Find the things of the type .egoShell, and either add (or remove if they already have it) all the settings in the .css file for ".egoButton_active".
			});
			
			//Now we load in all the loves/cums/deaths.
			var allDeaths = <?php echo json_encode($deathData); ?>;
			var allCums = <?php echo json_encode($cumData); ?>;
			var allLoves = <?php echo json_encode($loveData); ?>;
			
			var pois = [];
			pois.push(document.getElementById("inductionPOI"));
			pois.push(document.getElementById("darklingrowPOI"));
			pois.push(document.getElementById("outsideInn"));
			pois.push(document.getElementById("myDearChambersPOI"));
			pois.push(document.getElementById("cirquePOI"));
			pois.push(document.getElementById("sluckysloach"));
			pois.push(document.getElementById("tendertuffets"));
			pois.push(document.getElementById("infestedNurk"));
			pois.push(document.getElementById("pundlepox"));
			pois.push(document.getElementById("carriagePOI"));
			pois.push(document.getElementById("buttonbagsPOI"));
			pois.push(document.getElementById("slurtsPOI"));
			pois.push(document.getElementById("ditchfirePOI"));
			pois.push(document.getElementById("compassPOI"));
			pois.push(document.getElementById("beguilingPOI"));
			var poiID;
			var currentLoc = "";
			var modalOpen = false;
			
			/*********************These are our lightbox wedge-popup codes.*********************/
			// Open the Modal
			function openPoi() {
				modalOpen = true;
				$("#wedge").fadeIn("slow");
			}
			
			// Close the Modal
			function closePoi() {
				modalOpen = false;
				$("#wedge").fadeOut("slow");
				for (var i = 0; i < pois.length; i++) {
					pois[i].style.display = "none";
				}
			}
			
			function nextPOI(n) {
				setPOI(poiID += n);
			}
			
			function setLocName(x) {
				switch (x) {
					case 1:
						currentLoc = "induction";
					break;
					case 2:
						currentLoc = "darklingrow";
					break;
					case 3:
						currentLoc = "outside-inn";
					break;
					case 4:
						currentLoc = "hearthhunt";
					break;
					case 5:
						currentLoc = "cirque";
					break;
					case 6:
						currentLoc = "sluckysloach";
					break;
					case 7:
						currentLoc = "tendertuffets";
					break;
					case 8:
						currentLoc = "infestednurk";
					break;
					case 9:
						currentLoc = "pundlepox";
					break;
					case 10:
						currentLoc = "carriage";
					break;
					case 11:
						currentLoc = "buttonbags";
					break;
					case 12:
						currentLoc = "slurts";
					break;
					case 13:
						currentLoc = "ditchfire";
					break;
					case 14:
						currentLoc = "compass";
					break;
					case 15:
						currentLoc = "beguiling";
					break;
					default:
						currentLoc = "induction";
				}
			}
			
			function audioClick() {
				new Audio("Site_Assets/POIs/buttonclick.wav").play();
			}
			
			function setPOI(x) { 
				var i;
				if (x > pois.length) {poiID = 1}
				else if (x < 1) {poiID = pois.length}
				else {poiID = x};
				setLocName(poiID);
				for (i = 0; i < pois.length; i++) {
					pois[i].style.display = "none";
				}
				pois[poiID-1].style.display = "block";
				getLCD(currentLoc);
			}
			
			$(document).ready(function(){
				$(document).bind('keydown', function(e) { 
					if (e.which == 27) { //escape
						closePoi();
					} else if (e.which == 37) { //right
						if (modalOpen) {
							audioClick();
							nextPOI(-1);
						}
					} else if (e.which == 39) { //left
						if (modalOpen) {
							audioClick();
							nextPOI(1);
						}
					}
				}); 
			});
			
			var countCum = 0;
			var countLove = 0;
			var countDeath = 0;
			var locCums = [];
			var locLoves = [];
			var locDeaths = [];
			
			/************Here we have our code that *reads* our loves, cums and deaths!***********/
			function getLCD(location) {
				locCums = [];
				locLoves = [];
				locDeaths = [];
				countCum = countLove = countDeath = 0; //Reset them all!
				for (i=0; i<allCums.length; i++) {
					if (allCums[i].location == location) {
						countCum++;
						locCums.push(allCums[i]);
					}
				}
				$(".numCum").text(countCum);
				for (i=0; i<allDeaths.length; i++) {
					if (allDeaths[i].location == location) {
						countDeath++;
						locDeaths.push(allDeaths[i]);
					}
				}
				$(".numDeath").text(countDeath);
				for (i=0; i<allLoves.length; i++) {
					if (allLoves[i].location == location) {
						countLove++;
						locLoves.push(allLoves[i]);
					}
				}
				$(".numLikes").text(countLove);
			}
			
			/************Here we have our code that increments likes, cum, and deaths (naturally).***********/
			function countLCD(type) {
				var userIP = '<?php echo $clientID; ?>';
				switch (type) {
					case "cum":
						if (locCums.some(el => el.clientID === userIP)) { //We found the user's randomly generated cookie ID already in this list! They have already creamed themselves to this one.
							//Uncum (kinky)
							countCum--; //Subtract one!
							$(".numCum").text(countCum);
							//Then push it to the database on the website.
							$.ajax({
							url: 'LCD.php',
							type: 'POST',
							data: {'type': "cum", 'loc': currentLoc, 'user': userIP, 'addRem': "rem"}
							});
							//Lastly, scrub it from our local page storage in the allCums database!
							for (i = allCums.length-1; i>=0; i--) {
								if (allCums[i].clientID === userIP && allCums[i].location === currentLoc) allCums.splice(i, 1);
							}
							for (i = locCums.length-1; i>=0; i--) {
								if (locCums[i].clientID === userIP) locCums.splice(i, 1);
							}
						} else {
							//They just came.
							countCum++; //Add one!
							$(".numCum").text(countCum);
							//Add it to the database...
							$.ajax({
							url: 'LCD.php',
							type: 'POST',
							data: {'type': "cum", 'loc': currentLoc, 'user': userIP, 'addRem': "add"}
							});
							//And add it to our local array, too!
							allCums.push({location: currentLoc, clientID: userIP});
							locCums.push({location: currentLoc, clientID: userIP});
						}
					break;
					case "like":
						if (locLoves.some(el => el.clientID === userIP)) { //We found the user's randomly generated cookie ID already in this list! They loved it already.
							//Unlove
							countLove--; //Subtract one!
							$(".numLikes").text(countLove);
							$.ajax({
							url: 'LCD.php',
							type: 'POST',
							data: {'type': "love", 'loc': currentLoc, 'user': userIP, 'addRem': "rem"}
							});
							for (i = allLoves.length-1; i>=0; i--) {
								if (allLoves[i].clientID === userIP && allLoves[i].location === currentLoc) allLoves.splice(i, 1);
							}
							for (i = locLoves.length-1; i>=0; i--) {
								if (locLoves[i].clientID === userIP) locLoves.splice(i, 1);
							}
						} else {
							//They just loved it.
							countLove++; //Add one!
							$(".numLikes").text(countLove);
							$.ajax({
							url: 'LCD.php',
							type: 'POST',
							data: {'type': "love", 'loc': currentLoc, 'user': userIP, 'addRem': "add"}
							});
							allLoves.push({location: currentLoc, clientID: userIP});
							locLoves.push({location: currentLoc, clientID: userIP});
						}
					break;
					case "death":
						if (locDeaths.some(el => el.clientID == userIP)) { //We found the user's randomly generated cookie ID already in this list! They have already died.
							//Come back to life!
							countDeath--; //Subtract one!
							$(".numDeath").text(countDeath);
							$.ajax({
							url: 'LCD.php',
							type: 'POST',
							data: {'type': "death", 'loc': currentLoc, 'user': userIP, 'addRem': "rem"}
							});
							for (i = allDeaths.length-1; i>=0; i--) {
								if (allDeaths[i].clientID === userIP && allDeaths[i].location === currentLoc) allDeaths.splice(i, 1);
							}
							for (i = locDeaths.length-1; i>=0; i--) {
								if (locDeaths[i].clientID === userIP) locDeaths.splice(i, 1);
							}
						} else {
							//They just died.
							countDeath++; //Add one!
							$(".numDeath").text(countDeath);
							$.ajax({
							url: 'LCD.php',
							type: 'POST',
							data: {'type': "death", 'loc': currentLoc, 'user': userIP, 'addRem': "add"}
							});
							allDeaths.push({location: currentLoc, clientID: userIP});
							locDeaths.push({location: currentLoc, clientID: userIP});
						}
					break;
					default:
					break;
				}
			}
			
			/************This makes it so that when we move our mouse over the elements in the modal window, they turn that lovely red or glow properly.************/
			/*The arrows for left/right*/
			$('.slideLeft').mouseenter(function() {
				this.setAttribute("opacity", 100);
			});
			$('.slideLeft').mouseleave(function() {
				this.setAttribute("opacity", 0);
			});
			$('.slideRight').mouseenter(function() {
				this.setAttribute("opacity", 100);
			});
			$('.slideRight').mouseleave(function() {
				this.setAttribute("opacity", 0);
			});
			/*The like, cum, and death buttons, respectively.*/
			$('.countLike').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/POIs/poi_window_like_glow.png');
			});
			$('.countLike').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/POIs/poi_window_like.png');
			});
			$('.countCum').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/POIs/poi_window_cum_glow.png');
			});
			$('.countCum').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/POIs/poi_window_cum.png');
			});
			$('.countDeath').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/POIs/poi_window_death_glow.png');
			});
			$('.countDeath').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/POIs/poi_window_death.png');
			});
			/*The close button...*/
			$('.closeButton').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/POIs/poi_x_hover.png');
			});
			$('.closeButton').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/POIs/poi_x.png');
			});
			/*Lastly, the Explore button.*/
			$('.explore').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/POIs/poi_window_explore2.png');
			});
			$('.explore').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/POIs/poi_window_explore.png');
			});
			
			/*******************Preload our images (borrowed code)**********************/
			var images = new Array()
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image();
					images[i].src = preload.arguments[i];
				}
			}
			preload(
				"Site_Assets/menu_media_hover.png",
				"Site_Assets/menu_media_clicked.png",
				"Site_Assets/menu_media_default.png",
				"Site_Assets/menu_explore_hover.png",
				"Site_Assets/menu_explore_clicked.png",
				"Site_Assets/menu_explore_default.png",
				"Site_Assets/menu_about_hover.png",
				"Site_Assets/menu_about_clicked.png",
				"Site_Assets/menu_about_default.png",
				"Site_Assets/menu_news_hover.png",
				"Site_Assets/menu_news_clicked.png",
				"Site_Assets/menu_news_default.png",
				"Site_Assets/menu_faq_hover.png",
				"Site_Assets/menu_faq_clicked.png",
				"Site_Assets/menu_faq_default.png",
				"Site_Assets/menu_discord_hover.png",
				"Site_Assets/menu_discord_clicked.png",
				"Site_Assets/menu_discord_default.png",
				"Site_Assets/menu_subscribe_hover.png",
				"Site_Assets/menu_subscribe_clicked.png",
				"Site_Assets/menu_subscribe_default.png",
				"Site_Assets/menu_store_hover.png",
				"Site_Assets/menu_store_clicked.png",
				"Site_Assets/menu_store_default.png",
				"Site_Assets/ui_egobracer.gif",
				"Site_Assets/ui_topmenu_left.gif",
				"Site_Assets/menu_tray.png",
				"Site_Assets/topmenu_right.png",
				"Site_Assets/POIs/poi_arrow_left.png",
				"Site_Assets/POIs/poi_arrow_right.png",
				"Site_Assets/POIs/poi_window_cum_glow.png",
				"Site_Assets/POIs/poi_window_death_glow.png",
				"Site_Assets/POIs/poi_window_like_glow.png",
				"Site_Assets/POIs/poi_window_explore2.png",
				"Site_Assets/POIs/poi_x.png",
				"Site_Assets/POIs/poi_x_hover.png"
			);
		</script>
	</body>
</html>
