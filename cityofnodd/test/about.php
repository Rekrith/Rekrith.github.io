<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		<title>The City of Nodd - About</title> <!--The page title in the browser tab-->
		<link rel="icon" href="https://nodd-arca.net/test/Site_Assets/icon.png"> <!--The icon in the browser tab!-->
		<link rel="stylesheet" href="styles.css"> <!--Linking the stylesheets (that contain all the 'How to display this stuff' information)-->
		<link rel="stylesheet" href="egobracer.css"> <!--Egobracer.css is for the top and bottom menus, to make it easier to put them into other pages.-->
		<link href="jquery-ui/jquery-ui.css" rel="stylesheet"> <!--Jquery ui styles!-->
	</head>
	<body>
		<div class="bg"> <!--This is just a container that holds the background picture. Styles.css has all the information!-->
		</div>
		
		<!--**********************************************-->
		
		<div class="main" id="about" style="margin-top:15vh"> <center>
			<img src="http://nodd-arca.net/test/Site_Assets/header_about.png" class="headerImg"/></center>
			
			<div class="aboutText">This is a fictional world intended for adults only, particularly those of a kinky nature.</div>

			<div class="aboutText">The City of Nodd began as a setting for Slug's character Filo, and developed from there. Between 2018 and 2020 Slug compiled all art and information into a website, and released the project publicly in October of 2020. In 2021, Slug officially enlisted both Losian and Salrith's help with development of lore and content, in addition to their help on the server.</div>

			<div class="aboutText">Nodd is presently an "open" setting - meaning you're free to do what you like with the concepts, even commercially. All official art can be used for non-commercial purposes as well (given it doesn't involve someone else's OC). It is also an interactive setting, meaning much of the media is in the form of interactive stories, community events, games, and more.</div>

			<div class="aboutText">This isn't a structured role-playing game, and there are no numbers, goals, or prizes. This is a collection of ideas, experiences, and artwork for you to indulge in and build upon as you please - some creativity and openness on your part may be required to get the most out of the project.</div>

			<div class="aboutText">Nodd is an ongoing and dynamic project, and things will change over time. We will constantly be updating, revising, and adding to various parts of the website and lore. Please don't get too attached to anything.</div>
			
​			<div class="aboutText">A subscription is not required to enjoy the vast majority of Nodd. That 	said, if you'd like to <a href="https://subscribestar.adult/cityofnodd">support the project</a>, and would like to see some WiPs in the process, feel free to do so. Any and all support is immensely appreciated, and will allow Slug to focus on Nodd.</div>

			<div style="padding-bottom:15vh"></div>
		</div>
		
		<?php include('headfoot.php'); ?>
				
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="jquery-ui/jquery-ui.js"></script>
		<script> 
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
