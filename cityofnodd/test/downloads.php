<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		<title>The City of Nodd - Downloads</title> <!--The page title in the browser tab-->
		<link rel="icon" href="https://nodd-arca.net/test/Site_Assets/icon.png"> <!--The icon in the browser tab!-->
		<link rel="stylesheet" href="styles.css"> <!--Linking the stylesheets (that contain all the 'How to display this stuff' information)-->
		<link rel="stylesheet" href="egobracer.css"> <!--Egobracer.css is for the top and bottom menus, to make it easier to put them into other pages.-->
		<link href="jquery-ui/jquery-ui.css" rel="stylesheet"> <!--Jquery ui styles!-->
	</head>
	<body>
		<div class="bg"> <!--This is just a container that holds the background picture. Styles.css has all the information!-->
		</div>
		
		<!--**********************************************-->
		
		<div class="main" id="downloads" style="margin-top:15vh;margin-bottom:15vh;"> <center>
			<img src="http://nodd-arca.net/test/Site_Assets/header_downloads.png" class="headerImg"/></center>
			
			<div class="downloadsText" style="padding-left:20vw;padding-bottom:5vh;padding-top:2vh;">This is a collection of miscellaneous downloadable content.</div>
			
			<div class="downloadsThumb"><a href="https://nodd-arca.net/arcanet/index.php?title=Ego_File" target="_blank"><img src="https://nodd-arca.net/test/Site_Assets/egofile_thumbnail.webp" style="width: 12vw;"/></a></div>
			<div class="downloadsContainer">
				<div class="downloadsTitle">Ego File Kit</div>
				<div class="downloadsText">Everything you need to get started on your Ego File.</div>
				<div class="downloadsText">Full instructions can be found on the <a href="https://nodd-arca.net/arcanet/index.php?title=Ego_File" target="_blank">Ego File Arcanet page</a>.</div>
			</div>

			<div class="downloadsThumb"><a href="#" target="_blank"><img src="https://nodd-arca.net/test/Site_Assets/icon_example.webp" style="width: 12vw;"/></a></div>
			<div class="downloadsContainer">
				<div class="downloadsTitle">Icon Kit</div>
				<div class="downloadsText">An assortment of inks and backgrounds for crafting your own insider icons.</div>
			</div>
			
			<div class="downloadsThumb"><a href="#" target="_blank"><img src="https://nodd-arca.net/test/Site_Assets/artorgy_thumbnail.webp" style="width: 12vw;"/></a></div>
			<div class="downloadsContainer">
				<div class="downloadsTitle">Art Orgy Files</div>
				<div class="downloadsText">Everything needed to host your very own art orgy.</div>
			</div>
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
