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
		<title>The City of Nodd - Home</title> <!--The page title in the browser tab-->
		<link rel="icon" href="https://nodd-arca.net/test/Site_Assets/icon.png"> <!--The icon in the browser tab!-->
		<link rel="stylesheet" href="styles.css"> <!--Linking the stylesheets (that contain all the 'How to display this stuff' information)-->
		<link rel="stylesheet" href="egobracer.css"> <!--Egobracer.css is for the top and bottom menus, to make it easier to put them into other pages.-->
	</head>
	<body>
		<div class="bg"> <!--This is just a container that holds the background picture. Styles.css has all the information!-->
		</div>
		
		<!--**********************************************-->
		<!--The main map! It's an interactable (S)calable (V)ector (G)raphic (SVG).-->
		<!--It has some opening information about how web browsers use SVGs (the links), then it has style settings.-->
		<!--The important part is the Viewbox. The Viewbox is kinda like the actual window we get to see. It has the format "x position, y position, width, height". It's a little confusing unfortunately, but I can link you some tutorials on them if you would like.-->
		<div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:absolute;left:50%;top:0%;transform:translate(-50%,0%);overflow:none;width:100%;height:100%;min-width:400px;min-height:300px;" preserveAspectRatio="xMidYMid meet" viewBox="225 180 100 75" id="mapContainer">
			<!--Inside the SVG, we can define areas, images, and general 'stuff'. First, we define the map background and give it a width and height double that of the Viewbox (so it's zoomed in). We give it the id 'mapImg' so we can refer to it programmatically.-->
			<image width="400" height="300" xlink:href="Site_Assets/map_icons/map_iso_small.png" id="mapImg" /> 
			<!--Next, we define a bunch of polygons that are the 'wedges'. We tell it to, on mouseup (lifting your finger from the mouse button), call a Javascript function defined below in the <script> area called 'openPoi()', and ALSO one called 'setPOI()'. The points are all x,y coordinates inside the Viewbox that I've manually defined.-->
			<!--The style "pointer-events:all" says that ANY mouse activity inside it should do things. Normally transparent pixels don't count.-->
			<image id="vorn" cursor="pointer" width="14" height="42" xlink:href="Site_Assets/map_icons/vorn_citadel_small.png" x="194" y="46" pointer-events="none"  />
			
			<image id="viviria" cursor="pointer" width="16" height="40" xlink:href="Site_Assets/map_icons/viviria_citadel_small.png" x="126" y="68" pointer-events="none" />
			
			<image id="pundlepox" cursor="pointer" width="12" height="12" xlink:href="Site_Assets/map_icons/pundlepox_small.png" x="162" y="92" pointer-events="visiblePainted" onmouseup="setLoc('pundlepox');setPOI(2, 'viviria');openPoi();" />
			
			<image id="omnillian" cursor="pointer" width="20" height="36" xlink:href="Site_Assets/map_icons/omnillian_citadel_small.png" x="264" y="72" pointer-events="none" />
			
			<image id="morphoria" cursor="pointer" width="26" height="44" xlink:href="Site_Assets/map_icons/morphoria_citadel_small.png" x="106" y="120" pointer-events="none" />
			
			<image id="umbrasia" cursor="pointer" width="20" height="44" xlink:href="Site_Assets/map_icons/umbrasia_citadel_small.png" x="270" y="116" pointer-events="none" />
			
			<image id="spire" cursor="pointer" width="22" height="56" xlink:href="Site_Assets/map_icons/council_spire_small.png" x="192" y="76" pointer-events="none" />
			
			<image id="psilysium" cursor="pointer" width="24" height="48" xlink:href="Site_Assets/map_icons/psilysium_citadel_small.png" x="192" y="142" pointer-events="none"  />
			
			<image id="eggpluck" cursor="pointer" width="9" height="8" xlink:href="Site_Assets/map_icons/misc_shop_small.png" x="266" y="207" pointer-events="visiblePainted" onmouseup="setLoc('eggpluck');setPOI(1, 'eggpluck');openPoi();" />
			
			<image id="grudGrub" cursor="pointer" width="9" height="8" xlink:href="Site_Assets/map_icons/misc_food_small.png" x="84" y="103" pointer-events="visiblePainted" onmouseup="setLoc('grudGrub');setPOI(1, 'viviria');openPoi();" />
			
			<text id="induction" cursor="pointer" onmouseup="setLoc('induction');setPOI(1, 'induction');openPoi();" x="310" y="341" width="11" height="10" fill="#2DC991" transform="skewX(-5) skewY(-20)">Induction</text>
			
			<image id="outside-inn" cursor="pointer" width="12" height="11" xlink:href="Site_Assets/map_icons/outside_inn_small.png" x="290" y="195" pointer-events="visiblePainted" onmouseup="setLoc('outside-inn');setPOI(1, 'outside-inn');openPoi();" />
			
			<image id="slucky" cursor="pointer" width="9" height="8" xlink:href="Site_Assets/map_icons/misc_food_small.png" x="112" y="88" pointer-events="visiblePainted" onmouseup="setLoc('sluckysloach');setPOI(3, 'viviria');openPoi();" />
			
			<image id="tuffets" cursor="pointer" width="9" height="8" xlink:href="Site_Assets/map_icons/misc_shop_small.png" x="152" y="72" pointer-events="visiblePainted" onmouseup="setLoc('tendertuffets');setPOI(4, 'viviria');openPoi();" />
			
		</svg></div>
		
		<!--**********************************************-->
		<!--The weather widget.-->
		<div class="weatherContainer">
			<!--To do!-->
			<img src="Site_Assets/Weather_Icons/mephitoad_rain.png" class="weatherImg" />
		</div>
		<!--**********************************************-->
		
		<?php include('headfoot.php'); ?>
		
		<!--**********************************************-->
		<!--Here we store the wedge lightbox popups for the different map sections. They're hidden by default!-->
		<!--A 'lightbox' is a type of modal, which is a webpage element that only appears sometimes as far as I understand it. Modals include things like pop-up image galleries, usually.-->
		<div id="wedge" class="modal"> <!--We make just ONE wedge 'shell', and then inside that we make a bunch of inner parts that are all toggleable.-->
			<div class="close" onclick="closePoi()"> <!--First, a dimmed background. We tell it that onclick it calls the Javascript function "closeWedge()" such that you can click outside the map zoom and close the modal lightbox.-->
			</div>
			
			<?php include('locations.php'); ?>
						
			<div class="empty">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:relative;left:50%;top:50%;transform:translate(-50%,-50%);overflow:none;height:100%;width:auto;" preserveAspectRatio="xMidYMid meet"  viewBox="0 00 400 300">
				
				</svg>
			</div>
		</div>
	
				
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<!--This includes the jQuery library (jQuery is a subset of javascript) Google hosts it for people to use for free without having to manually include it on websites. The website won't load properly if Google crashes, but I think Google is about one of the safest 'never going down' websites out there. Nodd will crash before it does. We could, however, manually host jQuery so it's not a worry.-->
		<script src="https://unpkg.com/@popperjs/core@2"></script>
		<script src="https://unpkg.com/tippy.js@6"></script>
		<script> //Now we start the jQuery script 'zone' where all the scripts live that power a site. We also use // for comments now since we're in a Javascript zone.
	  
			$('#egoBracerBut').on('click', function(e) { //In the element named specifically "egoBracerBut", when someone clicks it, run this code.
				$('.egoShell').toggleClass('egoButton_active'); //Find the things of the type .egoShell, and either add (or remove if they already have it) all the settings in the .css file for ".egoButton_active".
			});
			
			
			$('img').on('dragstart', function(event) { event.preventDefault(); }); //If someone tries to drag an image somewhere else, just don't do the image dragging thing. We like our images to stay in place!
			
			//Now we load in all the loves/cums/deaths.
			var allDeaths = <?php echo json_encode($deathData); ?>;
			var allCums = <?php echo json_encode($cumData); ?>;
			var allLoves = <?php echo json_encode($loveData); ?>;
			
			/*********************This operates the map panning and scrolling and zooming.*********************/
			const mapContainer = document.getElementById("mapContainer");
			var scale = 0.1; //10%
			var minScale = 1.0;
			var maxScale = 2.0;
			var curScale = 1.0; //What's our current scale compared to the original?
			var isPanning = false;
			var startPoint = {x:0,y:0};
			var endPoint = {x:0,y:0};
			var scrollLock = false;
			var mwidth = 100;
			var mheight = 75;
			var viewBox = {x:225,y:180,w:mwidth,h:mheight};
			var maxHor = 30;
			var maxVer = 0;
			var trueMaxHor = maxHor;
			var pois;
			var poiID = 1;
			var currentLoc = "";
			
			mapContainer.onmousedown = function(e){
				e.preventDefault();
				isPanning = true;
				startPoint = {x:e.x,y:e.y};
			}
			mapContainer.onmousemove = function(e){
				e.preventDefault();
			    if (isPanning){
					scrollLock = true;
					endPoint = {x:e.x,y:e.y};
					var dx = (startPoint.x - endPoint.x)*mwidth*curScale/(mapContainer.clientWidth);
					var dy = (startPoint.y - endPoint.y)*mheight*curScale/(mapContainer.clientHeight);
					var movedViewBox = {x:viewBox.x+dx,y:viewBox.y+dy,w:viewBox.w,h:viewBox.h};
					if (`${movedViewBox.x}` < maxHor) { movedViewBox.x = maxHor; }
					if (`${movedViewBox.x}` > 400-(mwidth*curScale+maxHor)) { movedViewBox.x = 400-(mwidth*curScale+maxHor); }
					if (`${movedViewBox.y}` < maxVer) { movedViewBox.y = maxVer; }
					if (`${movedViewBox.y}` > 300-(mheight*curScale+maxVer)) { movedViewBox.y = 300-(mheight*curScale+maxVer); }
					mapContainer.setAttribute('viewBox', `${movedViewBox.x} ${movedViewBox.y} ${movedViewBox.w} ${movedViewBox.h}`);
			    }
			}
			mapContainer.onmouseup = function(e){
				e.preventDefault();
			    if (isPanning){ 
					endPoint = {x:e.x,y:e.y};
					var dx = (startPoint.x - endPoint.x)*mwidth*curScale/(mapContainer.clientWidth);
					var dy = (startPoint.y - endPoint.y)*mheight*curScale/(mapContainer.clientHeight);
					if (`${viewBox.x+dx}` < maxHor) { dx = maxHor - `${viewBox.x}`; }
					if (`${viewBox.x+dx}` > (400-(mwidth*curScale+maxHor))) { dx = 400 - (mwidth*curScale+maxHor) - `${viewBox.x}`; }
					if (`${viewBox.y+dy}` < maxVer) { dy = maxVer - `${viewBox.y}`; }
					if (`${viewBox.y+dy}` > (300-(mheight*curScale+maxVer))) { dy = 300 - (mheight*curScale+maxVer) - `${viewBox.y}`; }
					viewBox = {x:viewBox.x+dx,y:viewBox.y+dy,w:viewBox.w,h:viewBox.h};
					mapContainer.setAttribute('viewBox', `${viewBox.x} ${viewBox.y} ${viewBox.w} ${viewBox.h}`);
			    }
			    isPanning = false;
				scrollLock = false;
			}
			mapContainer.onwheel = function(e) {
				e.preventDefault();
				curScale += Math.sign(e.deltaY)*scale;
				curScale = parseFloat((Math.round(curScale*10)/10).toFixed(1));
				if (Math.sign(e.deltaY) > 0) { //Zooming out
					if (curScale > maxScale) {
						curScale = maxScale;
						//Nothing else happens, we're maxxed.
						return;
					}
					var dw = mwidth*curScale;
					var dh = mheight*curScale;
					var dx = (-e.offsetX*mwidth/mapContainer.clientWidth*scale);
					var dy = (-e.offsetY*mheight/mapContainer.clientHeight*scale);
					if (`${viewBox.x+dx}` < maxHor) { dx = maxHor - `${viewBox.x}`; }
					if (`${viewBox.x+dx}` > 400-(mwidth*curScale+maxHor)) { dx = 400-(mwidth*curScale+maxHor) - `${viewBox.x}`; }
					if (`${viewBox.y+dy}` < maxVer) { dy = maxVer - `${viewBox.y}`; }
					if (`${viewBox.y+dy}` > (300-(mheight*curScale+maxVer))) { dy = 300 - (mheight*curScale+maxVer) - `${viewBox.y}`; }
				} else if (Math.sign(e.deltaY) < 0) { //Zooming in
					if (curScale < minScale) {
						curScale = minScale;
						//Nothing else happens, we're maxxed.
						return;
					}
					var dw = mwidth*curScale;
					var dh = mheight*curScale;
					var dx = (e.offsetX*mwidth/mapContainer.clientWidth*scale);
					var dy = (e.offsetY*mheight/mapContainer.clientHeight*scale);
					if (`${viewBox.x+dx}` < maxHor) { dx = maxHor - `${viewBox.x}`; }
					if (`${viewBox.x+dx}` > 400-(mwidth*curScale+maxHor)) { dx = 400-(mwidth*curScale+maxHor) - `${viewBox.x}`; }
					if (`${viewBox.y+dy}` < maxVer) { dy = maxVer - `${viewBox.y}`; }
					if (`${viewBox.y+dy}` > (300-(mheight*curScale+maxVer))) { dy = 300 - (mheight*curScale+maxVer) - `${viewBox.y}`; }
				}

				viewBox = {x:viewBox.x+dx,y:viewBox.y+dy,w:dw,h:dh};
				
				mapContainer.setAttribute('viewBox', `${viewBox.x} ${viewBox.y} ${viewBox.w} ${viewBox.h}`);
			}
			
			
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
			
			var lastLoc = "induction"; //Give this a default value
			
			function nextPOI(n) {
				setPOI(poiID += n, lastLoc); //We don't change the 'area' we're in when updating the poi we're scrolling through.
			}
			
			function setLoc(loc) {
				currentLoc = loc;
			}
			
			function audioClick() {
				new Audio("Site_Assets/POIs/buttonclick.wav").play();
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
			
			
			/************This makes it so that when the mouse hovers over a hotspot, it glows.***********/
			/*Eggpluck's Discount Familiars*/
			$('#eggpluck').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/misc_shop_small_glow.png');
			});
			$('#eggpluck').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/misc_shop_small.png');
			});
			/*Grud's Grub*/
			$('#grudGrub').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/misc_food_small_glow.png');
			});
			$('#grudGrub').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/misc_food_small.png');
			});
			/*Induction*/
			$('#induction').mouseenter(function() {
				this.setAttribute("fill", '#d4d971');
			});
			$('#induction').mouseleave(function() {
				this.setAttribute("fill", '#2DC991');
			});
			/*Morphoria*/
			$('#morphoria').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/morphoria_citadel_small_glow.png');
			});
			$('#morphoria').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/morphoria_citadel_small.png');
			});
			/*Omnillian*/
			$('#omnillian').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/omnillian_citadel_small_glow.png');
			});
			$('#omnillian').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/omnillian_citadel_small.png');
			});
			/*Outside Inn*/
			$('#outside-inn').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/outside_inn_small_glow.png');
			});
			$('#outside-inn').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/outside_inn_small.png');
			});
			/*Psilysium*/
			$('#psilysium').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/psilysium_citadel_small_glow.png');
			});
			$('#psilysium').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/psilysium_citadel_small.png');
			});
			/*Pundlepox*/
			$('#pundlepox').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/pundlepox_small_glow.png');
			});
			$('#pundlepox').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/pundlepox_small.png');
			});
			/*Slucky's*/
			$('#slucky').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/misc_food_small_glow.png');
			});
			$('#slucky').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/misc_food_small.png');
			});
			/*Spire*/
			$('#spire').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/council_spire_small_glow.png');
			});
			$('#spire').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/council_spire_small.png');
			});
			/*Tender Tuffets*/
			$('#tuffets').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/misc_shop_small_glow.png');
			});
			$('#tuffets').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/misc_shop_small.png');
			});
			/*Umbrasia*/
			$('#umbrasia').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/umbrasia_citadel_small_glow.png');
			});
			$('#umbrasia').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/umbrasia_citadel_small.png');
			});
			/*Viviria*/
			$('#viviria').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/viviria_citadel_small_glow.png');
			});
			$('#viviria').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/viviria_citadel_small.png');
			});
			/*Vorn*/
			$('#vorn').mouseenter(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/vorn_citadel_small_glow.png');
			});
			$('#vorn').mouseleave(function() {
				this.setAttribute("xlink:href", 'Site_Assets/map_icons/vorn_citadel_small.png');
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
				"Site_Assets/map_icons/abattoir_small_glow.png",
				"Site_Assets/map_icons/hearthhunt_small_glow.png",
				"Site_Assets/map_icons/misc_building_small_glow.png",
				"Site_Assets/map_icons/misc_food_small_glow.png",
				"Site_Assets/map_icons/misc_tower_1_small_glow.png",
				"Site_Assets/map_icons/misc_tower_2_small_glow.png",
				"Site_Assets/map_icons/vorn_citadel_small_glow.png",
				"Site_Assets/map_icons/viviria_citadel_small_glow.png",
				"Site_Assets/map_icons/morphoria_citadel_small_glow.png",
				"Site_Assets/map_icons/umbrasia_citadel_small_glow.png",
				"Site_Assets/map_icons/omnillian_citadel_small_glow.png",
				"Site_Assets/map_icons/psilysium_citadel_small_glow.png",
				"Site_Assets/map_icons/council_spire_small_glow.png",
				"Site_Assets/map_icons/outside_inn_small_glow.png",
				"Site_Assets/map_icons/misc_shop_small_glow.png",
				"Site_Assets/map_icons/pundlepox_small_glow.png",
				"Site_Assets/map_icons/mortar_small_glow.png",
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
