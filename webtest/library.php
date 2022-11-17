<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		<title>The Library</title> <!--The page title in the browser tab-->
		<link rel="icon" href="Site_Assets/icon.png"> <!--The icon in the browser tab!-->
		<link rel="stylesheet" href="styles.css"> <!--Linking the stylesheets (that contain all the 'How to display this stuff' information)-->
		<link rel="stylesheet" href="egobracer.css"> <!--Egobracer.css is for the top and bottom menus, to make it easier to put them into other pages.-->
		<link href="jquery-ui/jquery-ui.css" rel="stylesheet"> <!--Jquery ui styles!-->
	</head>
	<body>
		<div class="bg"> <!--This is just a container that holds the background picture. Styles.css has all the information!-->
		</div>
		
		<div class="main" id="library" style="margin-top:15vh">
			<center>
			<img src="Site_Assets/header_fanart.png" class="headerImg"/>
			</center>
			
			
			<!--TO PUCK AND LOSIAN: Copy and paste the entire 'libLeft' block to make a left-aligned entry (text on the left, picture on the right). Make sure to include a Sal Spacer underneath to keep them broken up!-->
			<div class="libLeft">
				<div class="libTitle"><a href="URL" target="_blank">EXAMPLE ITEM</a></div>
				<div class="libAuth"><a href="URL" target="_blank">EXAMPLE CREDIT</a></div>
				<div class="libText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				<div class="libstats">STATS</div>
				<div class="libCW">INFO</div>
			</div>
			
			<div style="display:block;padding-bottom:5vh;"></div> <!--It's a Sal spacer!-->
							
				<!--TO PUCK AND LOSIAN: Venture beyond this point in the sourcefile if you like, but it's much less user friendly down below!-->
			</div>
			</center>
		</div>
		
		
		<?php include('headfoot.php'); ?>
		
		<div id="blackout" style="background-color:#000000;opacity:0.5;height:100vh;width:100vw;top:0;left:0;position:fixed;display:none;"></div>
				
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="jquery-ui/jquery-ui.js"></script>
		<script> //Now we start the jQuery script 'zone' where all the scripts live that power a site. We also use // for comments now since we're in a Javascript zone.
	  
			var pois;
			var poiID = 1;
			var currentLoc = "";
			var lastLoc = "induction";
			var ref; //Something to track our modal!
			
			var oldX; //Where to return the popped out image to!
			var oldY; //Second part of the coordinates.
			var stage = 0; //A thing to toggle whether to 're-set' the position at the end of the movement!

			
			
			/******************************************/
			$('#egoBracerBut').on('click', function(e) { //In the element named specifically "egoBracerBut", when someone clicks it, run this code.
				$('.egoShell').toggleClass('egoButton_active'); //Find the things of the type .egoShell, and either add (or remove if they already have it) all the settings in the .css file for ".egoButton_active".
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
				"Site_Assets/topmenu_right.png"
			);
		</script>
	</body>
</html>
