<html>
	<body>
		<!--**********************************************-->
		<!--The top menu-->
		<div class="topMenuClass" id="topMenu"> <!--First we make a 'container' DIV (everything's divs!)-->
			<!--Then we add the background top menu stuff. We give them styles that make them appear at 29% of the width of the scren, 58%, and 87% of the screen width. That should be enough to cover the top of the screen, always.-->
			<img src="Site_Assets/ui_topmenu_left.gif" style="width:auto;height:8vw;max-height:154px;float:left;pointer-events:none;">
			<img src="Site_Assets/topmenu_right.png" style="width:auto;height:4.7vw;max-height:90px;left:29vw;float:left;pointer-events:none;">
			<img src="Site_Assets/topmenu_right.png" style="width:auto;height:4.7vw;max-height:90px;left:58vw;float:left;pointer-events:none;">
			<img src="Site_Assets/topmenu_right_end.png" id="testme" style="width:auto;height:5.05vw;max-height:97px;left:87vw;float:left;pointer-events:none;">
			<!--Then we can add the buttons. The a href tag says which URL they go to - a # means it goes nowhere yet.-->
			<div class="butcontain">
				<a href="explore"><img src="Site_Assets/menu_explore_default.png" class="topBut" id="exploreBut"></a>
				<a href="about"><img src="Site_Assets/menu_about_default.png" class="topBut" id="aboutBut"></a>
				<a href="#"><img src="Site_Assets/menu_news_default.png" class="topBut" id="newsBut"></a>
				<a href="faq"><img src="Site_Assets/menu_faq_default.png" class="topBut" id="faqBut"></a>
				<a href="media"><img src="Site_Assets/menu_media_default.png" class="topBut" id="mediaBut"></a>
				<a href="#"><img src="Site_Assets/menu_discord_default.png" class="topBut" id="discordBut"></a>
				<a href="#" target="_blank"><img src="Site_Assets/menu_subscribe_default.png" class="topBut" id="subscribeBut"></a>
				<a href="#"><img src="Site_Assets/menu_store_default.png" class="topBut" id="storeBut"></a>
			</div>
		</div>
		<!--**********************************************-->
		
		<div id="footer">
			
		</div>
		
		<!--**********************************************-->
		<!--The bottom menu-->
		<div class="egobracer" id="Arcanet"> <img id="egoBracerBut" src="Site_Assets/ui_egobracer.gif"></img> 
		<!-- This makes a container of the type 'egobracer' (so it inherits all the instructions from the .egobracer section in egobracer.css) and calls it Arcanet so we can talk about THIS ELEMENT individually. Then, it makes an image called egoBracerBut - it inherits everything from the egobracer.css file under #egoBracerBut. -->
			<nav class="egoShell"> <!--I confess, I'm still figuring out what 'nav' functionally means, but it seems to work here.-->
				<img src="Site_Assets/menu_tray.png" class="slidymenu"> <!--This is the slidy part of the bottom menu. It's about half the page wide - more than that and it looks oddly stretched and unpleasant.-->
				<!--Next we add the big Arcanet links - world and magic and so. &emsp; is computer code for a big space - HTML ignores multiple spaces normally, so you have to specifically tell it 'big space here, please'.-->
				<div class="arcanetLinksTop"><a href="rules">Rules</a>&emsp;&emsp;&emsp;<a href="downloads">Downloads</a>&emsp;&emsp;&emsp;<a href="interactive">Interactive</a>&emsp;&emsp;&emsp;<a href="credits">Credits</a>&emsp;&emsp;&emsp;<a href="#">Wiki</a></div>
				<!--Then we have the bottom links. They're different in style (different font, sizes, etc) so it has a new class.-->
				<div class="arcanetLinksBot"><a href="world">World</a>&emsp;&emsp;&emsp;•&emsp;&emsp;&emsp;<a href="city">The City</a>&emsp;&emsp;&emsp;•&emsp;&emsp;&emsp;<a href="magic">Magic</a>&emsp;&emsp;&emsp;•&emsp;&emsp;&emsp;<a href="sapients">Sapients</a>&emsp;&emsp;&emsp;•&emsp;&emsp;&emsp;<a href="florafauna">Flora and Fauna</a></div>
			</nav>
		</div>
		<!--**********************************************-->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="jquery-ui/jquery-ui.js"></script>
		<script>
			function footPos() {
				$("#footer").hide();
				var height = $(document).height();
				var width = $(document).width();
				$("#footer").show();
				height = height - $("#footer").height() - 5;
				width = width - $("#footer").width() - 30;
				$("#footer").css({top: height+"px", left: width+"px"});
			}
			footPos();
			$(window).resize(function() {footPos();});
		</script>
	</body>
</html>