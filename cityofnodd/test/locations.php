<html>
	<body>
		<!--Eggpluck-->
		<div class="eggpluckPOIs" id="eggpluckPOI" style="z-index: 2000;display:none;">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:relative;left:50%;top:50%;transform:translate(-50%,0%);overflow:none;height:auto;max-height:100vh;width:auto;z-index:99999;" preserveAspectRatio="xMidYMid meet"  viewBox="0 00 400 300">
				<image width="400" height="300" xlink:href="Site_Assets/POIs/poi_window_frame.png" x="0" y="0" pointer-events="visible" />
				
				<image width="115" xlink:href="Site_Assets/POIs/eggplucks.png" x="65" y="97" />
				<a xlink:href="https://www.cityofnodd.com/darkling-row" target="_blank"><image class="explore" cursor="pointer" height="35" xlink:href="Site_Assets/POIs/poi_window_explore.png" x="236.5" y="216" /></a>
				<text id="textTitle" x="200" y="67" width="30" height="20" fill="#2DC991" font-family="yarin-bld" text-anchor="middle" font-size="14px">Eggpluck's Discount Familiars</text>
				<text id="textCW" x="60" y="205" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Content Warnings:</text>
				<text id="textCW2" x="60" y="213" width="120" height="30" fill="#ffffff" font-family="arial" font-size="5px">None</text>
				<text id="textLength" x="60" y="225" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Length: S</text>
				<text id="textCollectibles" x="60" y="237" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Collectibles: 3</text>
				
				<text id="textDesc" x="215" y="105" fill="#ffffff" font-family="arial" font-size="5px">
				<tspan x="215" dy="00">In the backstreets of the City, not too far from Darkling Row,</tspan>
				<tspan x="215" dy="08">a charming establishment touting itself as</tspan> <tspan font-style="italic">Eggpluck's</tspan>
				<tspan x="215" dy="08" font-style="italic">Discount Familiars</tspan> <tspan>seems to be offering a number of</tspan>
				<tspan x="215" dy="08">curious creatures for sale.</tspan>
				<tspan x="215" dy="12">The shop's proprietor, a nurk named Eggpluck, offers only</tspan>
				<tspan x="215" dy="08">the best* and greatest* familiars.</tspan>
				<tspan x="215" dy="12">You think you can hear quiet shrieking from within.</tspan>
				</text>
				
				<image onclick="nextPOI(-1);audioClick();" class="slideLeft" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_left.png" x="0" y="132" />
				<image onclick="nextPOI(1);audioClick();" class="slideRight" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_right.png" x="360" y="132" />
				<image onclick="countLCD('like')" class="countLike" cursor="pointer" height="18" xlink:href="Site_Assets/POIs/poi_window_like.png" x="300" y="63" />
				<image onclick="countLCD('cum')" class="countCum" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_cum.png" x="321" y="61" />
				<image onclick="countLCD('death')" class="countDeath" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_death.png" x="340" y="61" />
				<text class="numLikes" x="315" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numCum" x="334" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numDeath" x="353" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<image onclick="closePoi()" class="closeButton" cursor="pointer" x="362" y="45" width="25" height="15" xlink:href="Site_Assets/POIs/poi_x.png" />
			</svg>
		</div>
		
		<!--Grud's Grub-->
		<div class="vivPOIs" id="grudGrub" style="z-index: 2000;display:none;">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:relative;left:50%;top:50%;transform:translate(-50%,0%);overflow:none;height:auto;max-height:100vh;width:auto;z-index:99999;" preserveAspectRatio="xMidYMid meet"  viewBox="0 00 400 300">
				<image width="400" height="300" xlink:href="Site_Assets/POIs/poi_window_frame.png" x="0" y="0" pointer-events="visible" />
				
				<image width="115" xlink:href="Site_Assets/POIs/grud.png" x="65" y="97" />
				<a xlink:href="https://www.cityofnodd.com/darkling-row" target="_blank"><image class="explore" cursor="pointer" height="35" xlink:href="Site_Assets/POIs/poi_window_explore.png" x="236.5" y="216" /></a>
				<text id="textTitle" x="200" y="67" width="30" height="20" fill="#2DC991" font-family="yarin-bld" text-anchor="middle">Grud's Grub</text>
				<text id="textCW" x="60" y="205" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Content Warnings:</text>
				<text id="textCW2" x="60" y="213" width="120" height="30" fill="#ffffff" font-family="arial" font-size="5px">Parasites</text>
				<text id="textLength" x="60" y="225" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Length: S</text>
				<text id="textCollectibles" x="60" y="237" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Collectibles: 0</text>
				
				<text id="textDesc" x="215" y="105" fill="#ffffff" font-family="arial" font-size="5px">
				<tspan x="215" dy="00">In the verdant and slimy streets of the Viviria district,</tspan>
				<tspan x="215" dy="08">there are many stalls and stores of all sorts and shapes.</tspan>
				<tspan x="215" dy="08">This one, it seems, sells various types of street food -</tspan>
				<tspan x="215" dy="08">all sold by the eponymous </tspan><tspan font-style="italic">Grud.</tspan>
				<tspan x="215" dy="12">You </tspan><tspan font-style="italic">are</tspan> <tspan> a little hungry...</tspan>
				</text>
				
				<image onclick="nextPOI(-1);audioClick();" class="slideLeft" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_left.png" x="0" y="132" />
				<image onclick="nextPOI(1);audioClick();" class="slideRight" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_right.png" x="360" y="132" />
				<image onclick="countLCD('like')" class="countLike" cursor="pointer" height="18" xlink:href="Site_Assets/POIs/poi_window_like.png" x="300" y="63" />
				<image onclick="countLCD('cum')" class="countCum" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_cum.png" x="321" y="61" />
				<image onclick="countLCD('death')" class="countDeath" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_death.png" x="340" y="61" />
				<text class="numLikes" x="315" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numCum" x="334" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numDeath" x="353" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<image onclick="closePoi()" class="closeButton" cursor="pointer" x="362" y="45" width="25" height="15" xlink:href="Site_Assets/POIs/poi_x.png" />
			</svg>
		</div>
		
		<!--Induction-->
		<div class="inductionPOIs" id="inductionPOI" style="z-index: 2000;display:none;">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:relative;left:50%;top:50%;transform:translate(-50%,0%);overflow:none;height:auto;max-height:100vh;width:auto;z-index:99999;" preserveAspectRatio="xMidYMid meet"  viewBox="0 00 400 300">
				<image width="400" height="300" xlink:href="Site_Assets/POIs/poi_window_frame.png" x="0" y="0" pointer-events="visible" />
				
				<image width="115" xlink:href="Site_Assets/POIs/induction.png" x="65" y="97" />
				<a xlink:href="https://www.cityofnodd.com/induction" target="_blank"><image class="explore" cursor="pointer" height="35" xlink:href="Site_Assets/POIs/poi_window_explore.png" x="236.5" y="216" /></a>
				<text id="textTitle" x="200" y="67" width="30" height="20" fill="#2DC991" font-family="yarin-bld" text-anchor="middle">Induction</text>
				<text id="textCW" x="60" y="205" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Content Warnings:</text>
				<text id="textCW2" x="60" y="213" width="120" height="30" fill="#ffffff" font-family="arial" font-size="5px">Rough/Medical Play</text>
				<text id="textLength" x="60" y="225" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Length: S</text>
				<text id="textCollectibles" x="60" y="237" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Collectibles: 1</text>
				
				<text id="textDesc" x="215" y="105" fill="#ffffff" font-family="arial" font-size="5px">
				<tspan x="215" dy="00">From the dreary gates of this mysterious City, you find</tspan>
				<tspan x="215" dy="08">yourself being ushered into a strange and enigmatic</tspan>
				<tspan x="215" dy="08">process referred to only as </tspan><tspan font-style="italic">Induction.</tspan>
				<tspan x="215" dy="12">What awaits you in this strange City?</tspan>
				<tspan x="215" dy="12">What will you find beyond the City gates?</tspan>
				<tspan x="215" dy="12">The only way forwards is through this imposing process...</tspan>
				<tspan x="215" dy="08">Back only leads towards an infinite, inky darkness.</tspan>
				<tspan x="215" dy="12">But then... All tales have a beginning.</tspan>
				</text>
				
				<image onclick="nextPOI(-1);audioClick();" class="slideLeft" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_left.png" x="0" y="132" />
				<image onclick="nextPOI(1);audioClick();" class="slideRight" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_right.png" x="360" y="132" />
				<image onclick="countLCD('like')" class="countLike" cursor="pointer" height="18" xlink:href="Site_Assets/POIs/poi_window_like.png" x="300" y="63" />
				<image onclick="countLCD('cum')" class="countCum" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_cum.png" x="321" y="61" />
				<image onclick="countLCD('death')" class="countDeath" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_death.png" x="340" y="61" />
				<text class="numLikes" x="315" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numCum" x="334" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numDeath" x="353" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<image onclick="closePoi()" class="closeButton" cursor="pointer" x="362" y="45" width="25" height="15" xlink:href="Site_Assets/POIs/poi_x.png" />
			</svg>
		</div>
		
		<!--Outside Inn-->
		<div class="outsideInnPOIs" id="outsideInn" style="z-index: 2000;display:none;">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:relative;left:50%;top:50%;transform:translate(-50%,0%);overflow:none;height:auto;max-height:100vh;width:auto;z-index:99999;" preserveAspectRatio="xMidYMid meet"  viewBox="0 00 400 300">
				<image width="400" height="300" xlink:href="Site_Assets/POIs/poi_window_frame.png" x="0" y="0" pointer-events="visible" />
				
				<image width="115" xlink:href="Site_Assets/POIs/outside_inn.png" x="65" y="97" />
				<a xlink:href="https://www.cityofnodd.com/outside-inn" target="_blank"><image class="explore" cursor="pointer" height="35" xlink:href="Site_Assets/POIs/poi_window_explore.png" x="236.5" y="216" /></a>
				<text id="textTitle" x="200" y="67" width="30" height="20" fill="#2DC991" font-family="yarin-bld" text-anchor="middle">The Outside Inn</text>
				<text id="textCW" x="60" y="205" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Content Warnings:</text>
				<text id="textCW2" x="60" y="213" width="120" height="30" fill="#ffffff" font-family="arial" font-size="5px">Non-con; watersports</text>
				<text id="textLength" x="60" y="225" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Length: M</text>
				<text id="textCollectibles" x="60" y="237" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Collectibles: 10</text>
				
				<text id="textDesc" x="215" y="105" fill="#ffffff" font-family="arial" font-size="5px">
				<tspan x="215" dy="00">The Outside Inn is a small tavern near the outer gates of</tspan>
				<tspan x="215" dy="08">Nodd, established to help welcome in outsiders after the</tspan>
				<tspan x="215" dy="08">induction procedure.</tspan>
				<tspan x="215" dy="12">It features a bar, tables, a restroom, and several private</tspan>
				<tspan x="215" dy="08">inn rooms. Each inn room features a bed, bathroom, and</tspan>
				<tspan x="215" dy="08">refrigerator. The atmosphere is mostly non-violent.</tspan>
				<tspan x="215" dy="12">The inn is run by a relatively friendly chimera, and many</tspan>
				<tspan x="215" dy="08">outsiders find the Inn a safe haven upon first arriving in</tspan>
				<tspan x="215" dy="08">the City.</tspan>
				</text>
				
				<image onclick="nextPOI(-1);audioClick();" class="slideLeft" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_left.png" x="0" y="132" />
				<image onclick="nextPOI(1);audioClick();" class="slideRight" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_right.png" x="360" y="132" />
				<image onclick="countLCD('like')" class="countLike" cursor="pointer" height="18" xlink:href="Site_Assets/POIs/poi_window_like.png" x="300" y="63" />
				<image onclick="countLCD('cum')" class="countCum" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_cum.png" x="321" y="61" />
				<image onclick="countLCD('death')" class="countDeath" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_death.png" x="340" y="61" />
				<text class="numLikes" x="315" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numCum" x="334" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numDeath" x="353" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<image onclick="closePoi()" class="closeButton" cursor="pointer" x="362" y="45" width="25" height="15" xlink:href="Site_Assets/POIs/poi_x.png" />
			</svg>
		</div>
		
		<!--Pundlepox-->
		<div class="vivPOIs" id="pundlepox" style="z-index: 2000;display:none;">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:relative;left:50%;top:50%;transform:translate(-50%,0%);overflow:none;height:auto;max-height:100vh;width:auto;z-index:99999;" preserveAspectRatio="xMidYMid meet"  viewBox="0 00 400 300">
				<image width="400" height="300" xlink:href="Site_Assets/POIs/poi_window_frame.png" x="0" y="0" pointer-events="visible" />
				
				<image width="115" xlink:href="Site_Assets/POIs/pundlepox.png" x="65" y="97" />
				<a xlink:href="https://www.cityofnodd.com/pundlepox" target="_blank"><image class="explore" cursor="pointer" height="35" xlink:href="Site_Assets/POIs/poi_window_explore.png" x="236.5" y="216" /></a>
				<text id="textTitle" x="200" y="67" width="30" height="20" fill="#2DC991" font-family="yarin-bld" text-anchor="middle">Pundlepox Gardens</text>
				<text id="textCW" x="60" y="205" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Content Warnings:</text>
				<text id="textCW2" x="60" y="213" width="120" height="30" fill="#ffffff" font-family="arial" font-size="5px">Infestation | Optional: gore, vore, death, breathplay, scat</text>
				<text id="textLength" x="60" y="225" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Length: L</text>
				<text id="textCollectibles" x="60" y="237" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Collectibles: 10</text>
				
				<text id="textDesc" x="215" y="105" fill="#ffffff" font-family="arial" font-size="5px">
				<tspan x="215" dy="00">Even within the Viviria district, there are few places</tspan>
				<tspan x="215" dy="08">quite as verdant, quite as vibrant, and quite as wild as</tspan>
				<tspan x="215" dy="08">the Pundlepox Gardens.</tspan>
				<tspan x="215" dy="12">Filled with mysterious and often dangerous flora of all</tspan>
				<tspan x="215" dy="08">kinds, they say that the Gardens are the experience of</tspan>
				<tspan x="215" dy="08">a lifetime...</tspan>
				<tspan x="215" dy="12">Hopefully not because of the fatality count the Gardens</tspan>
				<tspan x="215" dy="08">have on record.</tspan>
				<tspan x="215" dy="12">Whether an avid gardener, a floral flirt, or merely</tspan>
				<tspan x="215" dy="08">curious about the strange and lush plants held in one of</tspan>
				<tspan x="215" dy="08">Nodd's most famous formal gardens, Pundlepox</tspan>
				<tspan x="215" dy="08">has something for all of its visitors.</tspan>
				</text>
				
				<image onclick="nextPOI(-1);audioClick();" class="slideLeft" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_left.png" x="0" y="132" />
				<image onclick="nextPOI(1);audioClick();" class="slideRight" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_right.png" x="360" y="132" />
				<image onclick="countLCD('like')" class="countLike" cursor="pointer" height="18" xlink:href="Site_Assets/POIs/poi_window_like.png" x="300" y="63" />
				<image onclick="countLCD('cum')" class="countCum" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_cum.png" x="321" y="61" />
				<image onclick="countLCD('death')" class="countDeath" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_death.png" x="340" y="61" />
				<text class="numLikes" x="315" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numCum" x="334" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numDeath" x="353" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<image onclick="closePoi()" class="closeButton" cursor="pointer" x="362" y="45" width="25" height="15" xlink:href="Site_Assets/POIs/poi_x.png" />
			</svg>
		</div>
		
		<!--Slucky's Sloach Shack-->
		<div class="vivPOIs" id="sluckysloach" style="z-index: 2000;display:none;">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:relative;left:50%;top:50%;transform:translate(-50%,0%);overflow:none;height:auto;max-height:100vh;width:auto;z-index:99999;" preserveAspectRatio="xMidYMid meet"  viewBox="0 00 400 300">
				<image width="400" height="300" xlink:href="Site_Assets/POIs/poi_window_frame.png" x="0" y="0" pointer-events="visible" />
				
				<image width="115" xlink:href="Site_Assets/POIs/slucky.png" x="65" y="97" />
				<a xlink:href="https://www.cityofnodd.com/viviria-district" target="_blank"><image class="explore" cursor="pointer" height="35" xlink:href="Site_Assets/POIs/poi_window_explore.png" x="236.5" y="216" /></a>
				<text id="textTitle" x="200" y="67" width="30" height="20" fill="#2DC991" font-family="yarin-bld" text-anchor="middle">Slucky's Sloach Shack</text>
				<text id="textCW" x="60" y="205" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Content Warnings:</text>
				<text id="textCW2" x="60" y="213" width="120" height="30" fill="#ffffff" font-family="arial" font-size="5px">None</text>
				<text id="textLength" x="60" y="225" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Length: S</text>
				<text id="textCollectibles" x="60" y="237" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Collectibles: 4</text>
				
				<text id="textDesc" x="215" y="105" fill="#ffffff" font-family="arial" font-size="5px">
				<tspan x="215" dy="00">In the depths of the Viviria district you come across a</tspan>
				<tspan x="215" dy="08">strangely mobile-looking food stall. The proprietor looks</tspan>
				<tspan x="215" dy="08">a little unusual...</tspan>
				<tspan x="215" dy="12">But the food, at least, looks edible. Some of it maybe even-</tspan>
				<tspan x="215" dy="08">dare you think it? - </tspan><tspan font-style="italic">good!</tspan>
				</text>
				
				<image onclick="nextPOI(-1);audioClick();" class="slideLeft" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_left.png" x="0" y="132" />
				<image onclick="nextPOI(1);audioClick();" class="slideRight" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_right.png" x="360" y="132" />
				<image onclick="countLCD('like')" class="countLike" cursor="pointer" height="18" xlink:href="Site_Assets/POIs/poi_window_like.png" x="300" y="63" />
				<image onclick="countLCD('cum')" class="countCum" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_cum.png" x="321" y="61" />
				<image onclick="countLCD('death')" class="countDeath" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_death.png" x="340" y="61" />
				<text class="numLikes" x="315" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numCum" x="334" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numDeath" x="353" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<image onclick="closePoi()" class="closeButton" cursor="pointer" x="362" y="45" width="25" height="15" xlink:href="Site_Assets/POIs/poi_x.png" />
			</svg>
		</div>
		
		<!--Tender Tuffets-->
		<div class="vivPOIs" id="tendertuffets" style="z-index: 2000;display:none;">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:relative;left:50%;top:50%;transform:translate(-50%,0%);overflow:none;height:auto;max-height:100vh;width:auto;z-index:99999;" preserveAspectRatio="xMidYMid meet"  viewBox="0 00 400 300">
				<image width="400" height="300" xlink:href="Site_Assets/POIs/poi_window_frame.png" x="0" y="0" pointer-events="visible" />
				
				<image width="115" xlink:href="Site_Assets/POIs/tuffet.png" x="65" y="97" />
				<a xlink:href="https://www.cityofnodd.com/tuffets" target="_blank"><image class="explore" cursor="pointer" height="35" xlink:href="Site_Assets/POIs/poi_window_explore.png" x="236.5" y="216" /></a>
				<text id="textTitle" x="200" y="67" width="30" height="20" fill="#2DC991" font-family="yarin-bld" text-anchor="middle">Tender Tuffets</text>
				<text id="textCW" x="60" y="205" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Content Warnings:</text>
				<text id="textCW2" x="60" y="213" width="120" height="30" fill="#ffffff" font-family="arial" font-size="5px">Furniture | Optional: lactation, vore, death, scat, castration</text>
				<text id="textLength" x="60" y="225" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Length: L</text>
				<text id="textCollectibles" x="60" y="237" width="120" height="30" fill="#ffffff" font-family="arial" font-size="8px">Collectibles: 0</text>
				
				<text id="textDesc" x="215" y="105" fill="#ffffff" font-family="arial" font-size="5px">
				<tspan x="215" dy="00">There seems to be a furniture store up ahead. Only, on</tspan>
				<tspan x="215" dy="08">second-glance it appears to instead be a furniture... rescue?</tspan>
				<tspan x="215" dy="12">The sign overhead proclaims it to be 'Tender Tuffets',</tspan>
				<tspan x="215" dy="08">and in through the window you can see a nurk feverishly</tspan>
				<tspan x="215" dy="08">rutting an ottoman.</tspan>
				<tspan x="215" dy="12">Regardless, it appears to be the sort of place one might</tspan>
				<tspan x="215" dy="08">be able to acquire some furniture, or at least learn more</tspan>
				<tspan x="215" dy="08">about the strangely ambulant objects of the City.</tspan>
				</text>
				
				<image onclick="nextPOI(-1);audioClick();" class="slideLeft" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_left.png" x="0" y="132" />
				<image onclick="nextPOI(1);audioClick();" class="slideRight" cursor="pointer" width="40" opacity="0" xlink:href="Site_Assets/POIs/poi_arrow_right.png" x="360" y="132" />
				<image onclick="countLCD('like')" class="countLike" cursor="pointer" height="18" xlink:href="Site_Assets/POIs/poi_window_like.png" x="300" y="63" />
				<image onclick="countLCD('cum')" class="countCum" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_cum.png" x="321" y="61" />
				<image onclick="countLCD('death')" class="countDeath" cursor="pointer" height="20" xlink:href="Site_Assets/POIs/poi_window_death.png" x="340" y="61" />
				<text class="numLikes" x="315" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numCum" x="334" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<text class="numDeath" x="353" y="79" fill="#ffffff" font-family="arial" font-size="5px" pointer-events="none">0</text>
				<image onclick="closePoi()" class="closeButton" cursor="pointer" x="362" y="45" width="25" height="15" xlink:href="Site_Assets/POIs/poi_x.png" />
			</svg>
		</div>
	</body>
</html>