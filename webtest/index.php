<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		<title>Home</title> <!--The page title in the browser tab-->
		<link rel="icon" href="Site_Assets/icon.png"> <!--The icon in the browser tab!-->
		<link rel="stylesheet" href="styles.css"> <!--Linking the stylesheets (that contain all the 'How to display this stuff' information)-->
		<link rel="stylesheet" href="egobracer.css"> <!--Egobracer.css is for the top and bottom menus, to make it easier to put them into other pages.-->
		<link href="jquery-ui/jquery-ui.css" rel="stylesheet"> <!--Jquery ui styles!-->
	</head>
	<body>
		<div id="timeBG" class="homeBg"> <!--This is just a container that holds the background picture. Styles.css has all the information!-->
			<img src="" id="bgImg" style="width:90%;min-height:90%;top:0;margin-left:50%;transform:translate(-50%,0%);opacity:0.75;object-fit:cover;" />
		</div>
		
		<!--**********************************************-->
		
		<div class="main" id="home">
			<img src="Site_Assets/nodd_title_crest.webp" style="position:absolute;width:max(10vw,300px);left:50vw;transform:translate(-50%,0%);top:150px;"/>
			
			<div class="homeBanner1" style="vertical-align: middle;overflow:none;">
				<img src="Site_Assets/greep_placeholder.webp" style="width:max(30%,400px);height:auto;display:block;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);"/>
			</div>
			
			<div class="homeBanner2">
				<!--BG-->
				<img src="Site_Assets/homebanner2.webp" style="min-height:1300px;min-width:100vw;height:auto;width:auto;z-index:-2;"/>
				<img src="Site_Assets/pagebreak.webp" style="width: max(30%,400px);height:auto;display:block;position:absolute;top:15%;left:50%;transform:translate(-50%,0%);" />
				
				<div class="newsContainer">
					<img src="Site_Assets/horn_placeholder.webp" style="width: auto;height:600px;display:block;position:absolute;top:100px;left:100%;transform:translate(-50%,0%);" /> <!--The hornblower-->
				</div>
				
				<img src="Site_Assets/header_news.png" style="width: auto;height:125px;display:block;position:absolute;top:300px;left:40%;transform:translate(-50%,0%);" /> <!--The news header thing-->
			</div>
			
			<div class="homeBanner3">
				<div class="homeLost">
					<div style="font-family:Futura, sans-serif;font-size:max(2.5em,2.5vw);padding:25px 40px 10px;">TITLE TEXT</div>
					<div style="font-family:Futura, sans-serif;font-size:max(1em,1vw);padding:5px 40px 5px 65px;">Lorem ipsum dolor...</div>
					<div style="font-family:Futura, sans-serif;font-size:max(0.8em,0.8vw);padding:5px 40px 10px;line-height:150%;"><ul><li>Item</li>
					<li>Item</li>
					<li>Item</li>
					<li>Item</li>
					<li>Item</li>
					<li>Item</li>
					</div>
				</div>
				
				<img src="Site_Assets/welcome_citizen.webp" style="position:absolute;left:50%;transform:translate(-65%,0%);height:550px;top:150px;" />
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
			
			var curTime = new Date();
			if (curTime.getHours() >= 8 && curTime.getHours() < 20) {
				$("#bgImg").attr("src","Site_Assets/cityscape_day.jpg");
			} else {
				$("#bgImg").attr("src","Site_Assets/cityscape_night.jpg");
			}
			
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
