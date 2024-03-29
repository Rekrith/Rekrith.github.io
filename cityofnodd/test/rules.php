<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		<title>The City of Nodd - Rules</title> <!--The page title in the browser tab-->
		<link rel="icon" href="https://nodd-arca.net/test/Site_Assets/icon.png"> <!--The icon in the browser tab!-->
		<link rel="stylesheet" href="styles.css"> <!--Linking the stylesheets (that contain all the 'How to display this stuff' information)-->
		<link rel="stylesheet" href="egobracer.css"> <!--Egobracer.css is for the top and bottom menus, to make it easier to put them into other pages.-->
		<link href="jquery-ui/jquery-ui.css" rel="stylesheet"> <!--Jquery ui styles!-->
	</head>
	<body>
		<div class="bg"> <!--This is just a container that holds the background picture. Styles.css has all the information!-->
		</div>
		
		<!--**********************************************-->
		
		<div class="main" id="rules" style="margin-top:15vh"> <center>
			<img src="Site_Assets/header_rules.png" class="headerImg"/></center>
			
			<div class="rulesTitle">Age</div>
			<div class="rulesText"><span style="font-weight:bold">You must be 18 or older to access City of Nodd content.</span> When feasible, <span style="font-weight:bold">please do not expose minors to Nodd.</span> Don't distribute, advertise, or sell anything Nodd-themed to minors, even if SFW. This is strictly for adults only.</div>
			
			<div class="rulesTitle">Consent & Safety</div>
			<div class="rulesText">Please do not take any of the lore too seriously; this is a work of fiction, and exists as artistic expression. As always, <span style="font-weight:bold">play safe, sane, and consensual.</span></div>

			<div class="rulesTitle">Concepts</div>
			<div class="rulesText"><b>All official City of Nodd <i>concepts</i> - except cameos and exclusive adoptables - are "open" for <u>personal and commercial</u> use.</b> You do not need to ask permission to take Nodd-themed commissions, make/sell Nodd-themed characters/adoptables, draw characters, etc. You are also encouraged to make your own species, locations, cults, etc. All we ask is that you credit City of Nodd. A link to Nodd's FA page or website would also be immensely appreciated. </div>

			<div class="rulesTitle">Art</div>
			<div class="rulesText"><b>All official City of Nodd <i>art</i> that is not an exclusive adoptable or includes someone's OC is free for <u>personal</u> use, and you are allowed to make alterations.</b> Please do not use official art for commercial purposes, even if edits are made. As above, please credit Nodd as appropriate, and specify any changes made to the original art.</div>

			<div class="rulesTitle">Adoptables</div>
			<div class="rulesText">If you've paid for a unique item or creature (or have won it by some means), you may resell the original design. While you may make edits to adoptables for personal use, keep in mind <b>you may not continue using <i>any version</i> of the design, original or altered, after reselling, and you many not resell altered/multiple versions of paid adoptables.</b></div>
			
​			<div class="rulesTitle">Questions & Feedback</div>
			<div class="rulesText">If you have a question or feedback about the lore or anything else Nodd-related, and have already checked the <a href="https://www.cityofnodd.com/faq">FAQ</a>, try posting in <span style="color:#49DAA7">#questions</span> or <span style="color:#49DAA7">#feedback</span> on the <a href="http://nodd-arca.net/invite.html">Discord server</a> where Council Attendants and other citizens can help you. If you don't use Discord, you may <span style="color:#49DAA7">contact us directly</span>. The Council can't guarantee that all your questions will be answered, nor can we guarantee they'll be answered truthfully - particularly if it's a question whose answer can easily be found elsewhere.</div>
			
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
