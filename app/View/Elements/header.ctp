<div class='header span12 container'>
	<div class='navbar'>
		<ul class='span12 utilityLinks'> 
			<li><a class='b5 icon-24-texas-grey icon' href='#'>our store</a></li>
			<li><a class='b5 icon-24-box-grey' href='#'>track order</a></li>
			<li><a class='b5 icon-24-card-grey' href='#'>gift cards</a></li>
			<li><a class='b5 icon-24-chat-grey' href='#'>contact us</a></li>
			<li data-reveal-children='accountFlyout' class='reveal-closed reveal-showOnMouseover reveal-noAnimation'>
				<a class='b5 icon-24-account-grey' href='#'>hi, username</a>
				<ul id='accountFlyout' class='sublist reveal-closed'>
					<li><a href=''>My Account <span class='details'>Subtext</span></a></li>
					<li><a href=''>My Account <span class='details'>Subtext</span></a></li>
					<li class='last'><a href=''>My Account <span class='details'>Subtext</span></a></li>
				</ul>
			</li>
			<!-- these are in reverse order for IE7 basically, we had to use float-right, which reorders them -->
		</ul>
	</div>

	<div class='well span12'>
		<a href='#' class='image-logoCircle logo'>Lone Star Percussion</a>
		<span class='established'>Established <span class='icon-24-star-yellow'>1978</span></span>
		<span class='tagline'>We Speak Drum <span class='icon-24-phone-yellow'>1-866-792-0143</span></span>
	</div> 
	
	<ul class='shopbar span12'> 
		<li class='departments'><a id='flyoutControlButton' data-reveal-children='mainFlyout' class='reveal-context-phone reveal-closed b1 icon-24-star-black highlight-icon dropdown'>Shop By <strong>Department</strong></a></li>
		<li class='cart'><a class='b3 icon-24-cart-white highlight-icon'>Your <strong>Cart</strong> <span class='count'>2</span></a></li>
		<li class='wishlist'><a class='b3 icon-24-heart-white highlight-icon'><strong>Wish</strong> List</a></li>
		<li id='searchBar' class='search'>
			<div id='searchBarContainer' class='reveal-closed-phone'>
				<div>
					<form action='search' method='GET'>
						<input id='searchQuery' name='searchQuery' type='text' class='clearable autocomplete search' placeholder='e.g. Sticks, Pearl, 16' Drum Head''/>
						<button type='submit' class='b2 icon-24-magnify-black icon-only' data-action='search'>Search</button>
					</form>
				</div>
			</div>
		</li>
		<li class='mobileSearch visible-phone'>
			<button class='b3 reveal-closed-phone' data-reveal-children='searchBarContainer'>Toggle Search</button>
		</li>
	</ul>

	<div id='breadcrumbs' class='breadcrumbs'>
		<ul class='span12 breadcrumbLinks'>
			<li><a href='#'>Sticks &amp; Mallets</a></li>
		</ul>
	</div>
</div>
<div id='mainFlyout' class='departmentDropdown reveal-context-phone' style=''>
	<div class='wrapper container span12'>
		<ul class='topLevel'>
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Sticks_Mallets'>
					<div class='h3'>
						Sticks &amp; Mallets
					</div>
				</div>
				<div id='flyout-Sticks_Mallets' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Sticks_Mallets-Sticks'>Sticks</span>
								<ul id='flyout-Sticks_Mallets-Sticks' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Drum Set</a></li>
									<li class='link'><a href=''>Brushes</a></li>
									<li class='link'><a href=''>Bundle Sticks</a></li>
									<li class='link'><a href=''>Concert Snare</a></li>
									<li class='link'><a href=''>Hybrid</a></li>
									<li class='link'><a href=''>Jingle</a></li>
									<li class='link'><a href=''>Timbale</a></li>
									<li class='link'><a href=''>All World Sticks</a></li>
									<li class='link'><a href=''>Practice</a></li>
									<li class='link'><a href=''>Stick &amp; Mallet Bundles</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Sticks_Mallets-Marching_Sticks_Mallets'>Marching Sticks &amp; Mallets</span>
								<ul id='flyout-Sticks_Mallets-Marching_Sticks_Mallets' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Snare</a></li>
									<li class='link'><a href=''>Tenor</a></li>
									<li class='link'><a href=''>Bass</a></li>
									<li class='link'><a href=''>Front Ensemble</a></li>
								</ul>
							</div>
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Sticks_Mallets-Mallets'>Mallets</span>
								<ul id='flyout-Sticks_Mallets-Mallets' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Marimba</a></li>
									<li class='link'><a href=''>Vibraphone</a></li>
									<li class='link'><a href=''>Vibraphone/Marimba</a></li>
									<li class='link'><a href=''>Bell (Glockenspiel)</a></li>
									<li class='link'><a href=''>Xylophone</a></li>
									<li class='link'><a href=''>Bell/Xylophone</a></li>
									<li class='link'><a href=''>Timpani</a></li>
									<li class='link'><a href=''>Triangle</a></li>
									<li class='link'><a href=''>Concert Bass Drum</a></li>
									<li class='link'><a href=''>Gong (Tam-Tam)</a></li>
									<li class='link'><a href=''>Steel Drum (Pan)</a></li>
									<li class='link'><a href=''>Chime</a></li>
									<li class='link'><a href=''>Combination &amp; Specialty</a></li>
									<li class='link'><a href=''>Stick &amp; Mallet Bundles</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Drum_Heads'>
					<div class='h3'>
						Drum Heads
					</div>
				</div>
				<div id='flyout-Drum_Heads' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Drum_Heads-Drum_Set'>Drum Set Heads</span>
								<ul id='flyout-Drum_Heads-Drum_Set' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Snare</a></li>
									<li class='link'><a href=''>Tom</a></li>
									<li class='link'><a href=''>Bass</a></li>
									<li class='link'><a href=''>Pre-Packs</a></li>
								</ul>
							</div>
							
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Drum_Heads-Concert'>Concert Heads</span>
								<ul id='flyout-Drum_Heads-Concert' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Snare</a></li>
									<li class='link'><a href=''>Tom</a></li>
									<li class='link'><a href=''>Bass</a></li>
									<li class='link'><a href=''>Timpani</a></li>
									<li class='link'><a href=''>Tambourine</a></li>
								</ul>
							</div>
							
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Drum_Heads-Marching'>Marching Heads</span>
								<ul id='flyout-Drum_Heads-Marching' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Snare</a></li>
									<li class='link'><a href=''>Tenor</a></li>
									<li class='link'><a href=''>Bass</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Drum_Heads-World_Specialty'>World &amp; Specialty</span>
								<ul id='flyout-Drum_Heads-World_Specialty' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Bongo</a></li>
									<li class='link'><a href=''>Conga</a></li>
									<li class='link'><a href=''>Timbale</a></li>
									<li class='link'><a href=''>Djembe</a></li>
									<li class='link'><a href=''>Brazilian (Samba)</a></li>
									<li class='link'><a href=''>Practice</a></li>
									<li class='link allCategory'><a href=''>All World &amp; Specialty Heads</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Drums_Drum_Sets'>
					<div class='h3'>
						Drums &amp; Drum Sets
					</div>
				</div>
				<div id='flyout-Drums_Drum_Sets' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Drums_Drum_Sets-Drum_Set_Drums'>Drum Set Drums</span>
								<ul id='flyout-Drums_Drum_Sets-Drum_Set_Drums' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Drum Sets</a></li>
									<li class='link'><a href=''>Junior Sets</a></li>
									<li class='link'><a href=''>Snare Drums</a></li>
									<li class='link'><a href=''>Toms</a></li>
									<li class='link'><a href=''>Floor Toms</a></li>
									<li class='link'><a href=''>Bass Drums</a></li>
									<li class='link'><a href=''>Electronic Drums</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Drums_Drum_Sets-Concert_Drums'>Concert Drums</span>
								<ul id='flyout-Drums_Drum_Sets-Concert_Drums' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Snare Drums</a></li>
									<li class='link'><a href=''>Field Drums</a></li>
									<li class='link'><a href=''>Concert Toms</a></li>
									<li class='link'><a href=''>Bass Drums</a></li>
									<li class='link'><a href=''>Timpani</a></li>
								</ul>
							</div>
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Drums_Drum_Sets-Marching_Drums'>Marching Drums</span>
								<ul id='flyout-Drums_Drum_Sets-Marching_Drums' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Snare Drums</a></li>
									<li class='link'><a href=''>Tenors</a></li>
									<li class='link'><a href=''>Bass Drums</a></li>
									<li class='link'><a href=''>Pipe Band</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Drums_Drum_Sets-Latin_World_Drums'>Latin &amp; World Drums</span>
								<ul id='flyout-Drums_Drum_Sets-Latin_World_Drums' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Bongos</a></li>
									<li class='link'><a href=''>Cajons</a></li>
									<li class='link'><a href=''>Congas</a></li>
									<li class='link'><a href=''>Djembes</a></li>
									<li class='link'><a href=''>Timbales</a></li>
									<li class='link'><a href=''>Steel Drums (Pans)</a></li>
									<li class='link'><a href=''>Brazilian (Samba)</a></li>
									<li class='link allCategory'><a href=''>All Latin &amp; World Drums</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Cymbals_Gongs'>
					<div class='h3'>
						Cymbals &amp; Gongs
					</div>
				</div>
				<div id='flyout-Cymbals_Gongs' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Cymbals_Gongs-Cymbals'>Cymbals</span>
								<ul id='flyout-Cymbals_Gongs-Cymbals' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Crashes</a></li>
									<li class='link'><a href=''>Rides</a></li>
									<li class='link'><a href=''>Hi Hats</a></li>
									<li class='link'><a href=''>Crash/Rides</a></li>
									<li class='link'><a href=''>Boxed Sets</a></li>
									<li class='link'><a href=''>Chinas</a></li>
									<li class='link'><a href=''>Splashes</a></li>
									<li class='link'><a href=''>Effects</a></li>
									<li class='link'><a href=''>Electronic</a></li>
									<li class='link'><a href=''>Suspended</a></li>
									<li class='link'><a href=''>Concert Pairs</a></li>
									<li class='link'><a href=''>Marching Pairs</a></li>
									<li class='link'><a href=''>Refurbished</a></li>
									<li class='link allCategory'><a href=''>All Cymbals</a></li>
								</ul>
							</div>
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Cymbals_Gongs-Gongs'>Gongs</span>
								<ul id='flyout-Cymbals_Gongs-Gongs' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Symphonic (Tam-Tam)</a></li>
									<li class='link'><a href=''>Wind (Feng)</a></li>
									<li class='link'><a href=''>Button (Bao)</a></li>
									<li class='link'><a href=''>Opera (Jin)</a></li>
									<li class='link'><a href=''>Gong Sheets</a></li>
									<li class='link'><a href=''>Decorative</a></li>
									<li class='link allCategory'><a href=''>All Gongs</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Cymbals_Gongs-Accessories'>Accessories</span>
								<ul id='flyout-Cymbals_Gongs-Accessories' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Felts</a></li>
									<li class='link'><a href=''>Sleeves</a></li>
									<li class='link'><a href=''>Pads</a></li>
									<li class='link'><a href=''>Straps</a></li>
									<li class='link'><a href=''>Polish</a></li>
									<li class='link'><a href=''>Sizzles</a></li>
									<li class='link allCategory'><a href=''>All Accessories</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Keyboard_Instruments'>
					<div class='h3'>
						Keyboards
					</div>
					<!-- Details -->
				</div>
				<div id='flyout-Keyboard_Instruments' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Keyboard_Instruments-Keyboard_Instruments'>Instruments</span>
								<ul id='flyout-Keyboard_Instruments-Keyboard_Instruments' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Marimbas</a></li>
									<li class='link'><a href=''>Vibraphones</a></li>
									<li class='link'><a href=''>Xylophones</a></li>
									<li class='link'><a href=''>Bells (Glockenspiels)</a></li>
									<li class='link'><a href=''>Chimes</a></li>
									<li class='link'><a href=''>Crotales</a></li>
									<li class='link'><a href=''>Aluphones</a></li>
									<li class='link'><a href=''>Synthesizers &amp; Digital Pianos</a></li>
									<li class='link'><a href=''>Xylosynths</a></li>
									<li class='link'><a href=''>Rental Keyboards</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Keyboard_Instruments-Accessories_Hardware'>Accessories &amp; Hardware</span>
								<ul id='flyout-Keyboard_Instruments-Accessories_Hardware' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Cases</a></li>
									<li class='link'><a href=''>Covers</a></li>
									<li class='link'><a href=''>Field Frames</a></li>
									<li class='link'><a href=''>Stands</a></li>
									<li class='link'><a href=''>Mounts</a></li>
									<li class='link'><a href=''>Parts</a></li>
								</ul>
							</div>
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Keyboard_Instruments-Practice_Beginning_Keyboards'>Practice &amp; Beginner</span>
								<ul id='flyout-Keyboard_Instruments-Practice_Beginning_Keyboards' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Beginner Bell Kits</a></li>
									<li class='link'><a href=''>Practice Marimbas</a></li>
									<li class='link'><a href=''>Practice Xylophones</a></li>
									<li class='link'><a href=''>Orff Keyboards</a></li>
									<li class='link'><a href=''>Elementary Music Keyboards</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection gapAbove'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Concert'>
					<div class='h3'>
						Concert
					</div>
					<div class='details'>
						Timpani, Toms, Triangles
					</div>
				</div>
				<div id='flyout-Concert' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Concert-Drums'>Drums</span>
								<ul id='flyout-Concert-Drums' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Snare Drums</a></li>
									<li class='link'><a href=''>Field Drums</a></li>
									<li class='link'><a href=''>Concert Toms</a></li>
									<li class='link'><a href=''>Bass Drums</a></li>
									<li class='link'><a href=''>Timpani</a></li>
								</ul>
							</div>
							
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Concert-Accessories_Hardware'>Accessories &amp; Hardware</span>
								<ul id='flyout-Concert-Accessories_Hardware' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Triangle Clips</a></li>
									<li class='link'><a href=''>Beeswax</a></li>
									<li class='link'><a href=''>Hand Cymbal Cradles</a></li>
									<li class='link'><a href=''>Percussion Cabinets</a></li>
									<li class='link'><a href=''>Bass Drum Stands</a></li>
									<li class='link'><a href=''>Gong Stands</a></li>
									<li class='link'><a href=''>Trap Tables</a></li>
								</ul>
							</div>
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Concert-Handheld_Auxiliary'>Handheld &amp; Auxiliary</span>
								<ul id='flyout-Concert-Handheld_Auxiliary' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Tambourines</a></li>
									<li class='link'><a href=''>Triangles</a></li>
									<li class='link'><a href=''>Wood Blocks</a></li>
									<li class='link'><a href=''>Temple Blocks</a></li>
									<li class='link'><a href=''>Castanets</a></li>
									<li class='link'><a href=''>Wind Chimes</a></li>
									<li class='link'><a href=''>Ratchets</a></li>
									<li class='link'><a href=''>Whips (Slapsticks)</a></li>
									<li class='link'><a href=''>Flexatones</a></li>
									<li class='link'><a href=''>Vibraslaps</a></li>
									<li class='link'><a href=''>Claves</a></li>
									<li class='link'><a href=''>Sleigh Bells</a></li>
									<li class='link'><a href=''>Finger Cymbals</a></li>
									<li class='link allCategory'><a href=''>All Auxiliary Instruments</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Latin_World_Effects'>
					<div class='h3'>
						Latin &amp; World
					</div>
					<div class='details'>
						Djembes, Cajons, Effects
					</div>
				</div>
				<div id='flyout-Latin_World_Effects' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Latin_World_Effects-Latin_Percussion'>Latin Percussion</span>
								<ul id='flyout-Latin_World_Effects-Latin_Percussion' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Bongos</a></li>
									<li class='link'><a href=''>Congas</a></li>
									<li class='link'><a href=''>Cajons</a></li>
									<li class='link'><a href=''>Timbales</a></li>
									<li class='link'><a href=''>Shakers</a></li>
									<li class='link'><a href=''>Maracas</a></li>
									<li class='link'><a href=''>Cowbells</a></li>
									<li class='link'><a href=''>Cabasas</a></li>
									<li class='link'><a href=''>Guiros</a></li>
									<li class='link'><a href=''>Claves</a></li>
									<li class='link'><a href=''>Triangles</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Latin_World_Effects-Special_Effects'>Special Effects</span>
								<ul id='flyout-Latin_World_Effects-Special_Effects' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Whistles</a></li>
									<li class='link'><a href=''>Ratchets</a></li>
									<li class='link'><a href=''>Vibraslaps &amp; Rattle Sounds</a></li>
									<li class='link'><a href=''>Industrial Sound Effects</a></li>
									<li class='link'><a href=''>Rainsticks</a></li>
									<li class='link'><a href=''>Bird Calls</a></li>
									<li class='link'><a href=''>Nature Sound Effects</a></li>
									
								</ul>
							</div>
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Latin_World_Effects-World_Percussion'>World Percussion</span>
								<ul id='flyout-Latin_World_Effects-World_Percussion' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Djembes</a></li>
									<li class='link'><a href=''>Doumbeks</a></li>
									<li class='link'><a href=''>Frame Drums</a></li>
									<li class='link'><a href=''>Steel Drums (Pans)</a></li>
									<li class='link'><a href=''>Shekeres</a></li>
									<li class='link'><a href=''>Caxixi</a></li>
									<li class='link'><a href=''>Brazilian (Samba)</a></li>
									<li class='link allCategory'><a href=''>All World Percussion</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Latin_World_Effects-Metal_And_Wood_Sounds'>Metal &amp; Wood Sounds</span>
								<ul id='flyout-Latin_World_Effects-Metal_And_Wood_Sounds' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Tambourines</a></li>
									<li class='link'><a href=''>Finger Cymbals</a></li>
									<li class='link'><a href=''>Wind Chimes</a></li>
									<li class='link'><a href=''>Ribbon Crashers</a></li>
									<li class='link'><a href=''>Wood Blocks</a></li>
									<li class='link'><a href=''>Whips (Slapsticks)</a></li>
									<li class='link'><a href=''>All Metallic Sounds</a></li>
									<li class='link'><a href=''>All Wooden Sounds</a></li>
								</ul>
							</div>
						</li>
						<li class='column visible-desktopwide'>

							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Latin_World_Effects-Shop_by_Region'>Shop by Region</span>
								<ul id='flyout-Latin_World_Effects-Shop_by_Region' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Latin/Afro-Cuban</a></li>
									<li class='link'><a href=''>Brazilian (Samba)</a></li>
									<li class='link'><a href=''>African</a></li>
									<li class='link'><a href=''>Asian</a></li>
									<li class='link'><a href=''>Middle Eastern</a></li>
									<li class='link'><a href=''>Caribbean</a></li>
									<li class='link'><a href=''>European</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Marching'>
					<div class='h3'>
						Marching
					</div>
					<div class='details'>
						Drums, Carriers, Brass
					</div>
				</div>
				<div id='flyout-Marching' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Marching-Instruments'>Instruments</span>
								<ul id='flyout-Marching-Instruments' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Snare Drums</a></li>
									<li class='link'><a href=''>Tenors</a></li>
									<li class='link'><a href=''>Bass Drums</a></li>
									<li class='link'><a href=''>Crash Cymbals</a></li>
									<li class='link'><a href=''>Pipe Band Drums</a></li>
									<li class='link'><a href=''>Keyboards</a></li>
									<li class='link'><a href=''>Brass (Horns)</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Marching-Hardware'>Hardware</span>
								<ul id='flyout-Marching-Hardware' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Carriers</a></li>
									<li class='link'><a href=''>Stands</a></li>
									<li class='link'><a href=''>Carts &amp; Field Frames</a></li>
									<li class='link'><a href=''>Percussion Racks</a></li>
									<li class='link'><a href=''>Hoops &amp; Rims</a></li>
									<li class='link allCategory'><a href=''>All Marching Parts</a></li>
								</ul>
							</div>
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Marching-Cases_Accessories'>Cases &amp; Accessories</span>
								<ul id='flyout-Marching-Cases_Accessories' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Cases &amp; Covers</a></li>
									<li class='link'><a href=''>Stick Tape</a></li>
									<li class='link'><a href=''>Earplugs</a></li>
									<li class='link'><a href=''>Snare Scoops</a></li>
									<li class='link'><a href=''>Stick Bags</a></li>
									<li class='link'><a href=''>Hoop Guards</a></li>
									<li class='link'><a href=''>Bass Muffle Strips</a></li>
									<li class='link allCategory'><a href=''>All Marching Accessories</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Marching-Amplification'>Amplification</span>
								<ul id='flyout-Marching-Amplification' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Speakers</a></li>
									<li class='link'><a href=''>Consoles &amp; Mixers</a></li>
									<li class='link'><a href=''>Cables</a></li>
									<li class='link'><a href=''>Microphones</a></li>
									<li class='link'><a href=''>Microphone Mounts</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection gapAbove'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Practice_Classroom'>
					<div class='h3'>
						Practice &amp; Classroom
					</div>
					<div class='details'>
						Pads, Metronomes, Kits, Orff
					</div>
				</div>
				<div id='flyout-Practice_Classroom' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Practice_Classroom-Practice_Pads'>Practice Pads</span>
								<ul id='flyout-Practice_Classroom-Practice_Pads' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Snare (Standard)</a></li>
									<li class='link'><a href=''>Tenor</a></li>
									<li class='link'><a href=''>Marching Bass</a></li>
									<li class='link'><a href=''>Practice Drum Sets</a></li>
									<li class='link'><a href=''>Bass Pedal</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Practice_Classroom-Practice_Gear'>Practice Gear</span>
								<ul id='flyout-Practice_Classroom-Practice_Gear' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Metronomes &amp; Tuners</a></li>
									<li class='link'><a href=''>Practice Sticks</a></li>
									<li class='link'><a href=''>Pad Laminates</a></li>
									<li class='link'><a href=''>Drum Set Mutes</a></li>
									<li class='link'><a href=''>Mesh Heads</a></li>
									<li class='link'><a href=''>Music Stands</a></li>
								</ul>
							</div>
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Practice_Classroom-Beginning_Percussion'>Beginning Percussion</span>
								<ul id='flyout-Practice_Classroom-Beginning_Percussion' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Practice Keyboards</a></li>
									<li class='link'><a href=''>Rental Keyboards</a></li>
									<li class='link'><a href=''>Bell Kits</a></li>
									<li class='link'><a href=''>Snare Kits</a></li>
									<li class='link allCategory'><a href=''>All Beginner Kits</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Practice_Classroom-Elementary_Music_Orff'>Elementary Music &amp; Orff</span>
								<ul id='flyout-Practice_Classroom-Elementary_Music_Orff' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Drums</a></li>
									<li class='link'><a href=''>Boomwhackers</a></li>
									<li class='link'><a href=''>Recorders</a></li>
									<li class='link'><a href=''>Keyboards &amp; Bells</a></li>
									<li class='link'><a href=''>Handbells</a></li>
									<li class='link'><a href=''>Rhythm Instruments</a></li>
									<li class='link'><a href=''>Steel Drums (Pans)</a></li>
									<li class='link'><a href=''>Sticks &amp; Mallets</a></li>
									<li class='link gapAbove'><a href=''>Orff Drums</a></li>
									<li class='link'><a href=''>Orff Keyboards</a></li>
									<li class='link'><a href=''>Orff Rhythm Instruments</a></li>
									<li class='link'><a href=''>Orff Sticks &amp; Mallets</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Accessories_Cases'>
					<div class='h3'>
						Cases &amp; Bags
					</div>
				</div>
				<div id='flyout-Accessories_Cases' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Accessories_Cases-Hard_Cases'>Hard Cases</span>
								<ul id='flyout-Accessories_Cases-Hard_Cases' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Snare Drum</a></li>
									<li class='link'><a href=''>Tom</a></li>
									<li class='link'><a href=''>Bass Drum</a></li>
									<li class='link'><a href=''>Cymbal</a></li>
									<li class='link'><a href=''>Marching</a></li>
									<li class='link'><a href=''>Hardware</a></li>
									<li class='link'><a href=''>ATA Flight Cases</a></li>
									<li class='link allCategory'><a href=''>All Hard Cases</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone'
								data-reveal-children='flyout-Accessories_Cases-Soft_Cases'>Soft Cases &amp; Bags</span>
								<ul id='flyout-Accessories_Cases-Soft_Cases' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Stick &amp; Mallet</a></li>
									<li class='link'><a href=''>Snare Drum</a></li>
									<li class='link'><a href=''>Tom</a></li>
									<li class='link'><a href=''>Bass Drum</a></li>
									<li class='link'><a href=''>Cymbal</a></li>
									<li class='link allCategory'><a href=''>All Soft Cases</a></li>
								</ul>
							</div>
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Cases_Other_Cases_and_Bags'>Covers</span>
								<ul id='flyout-Cases_Other_Cases_and_Bags' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Timpani</a></li>
									<li class='link'><a href=''>Keyboard</a></li>
									<li class='link'><a href=''>Marching Snare</a></li>
									<li class='link'><a href=''>Marching Tenor</a></li>
									<li class='link'><a href=''>Marching Bass</a></li>
									<li class='link allCategory'><a href=''>All Covers</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Stands_Hardware'>
					<div class='h3'>
						Stands &amp; Hardware
					</div>
					<div class='details'>
						Pedals, Thrones, Parts, Speakers
					</div>
				</div>
				<div id='flyout-Stands_Hardware' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Stands_Hardware-Stands'>Stands</span>
								<ul id='flyout-Stands_Hardware-Stands' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Straight Cymbal</a></li>
									<li class='link'><a href=''>Boom Cymbal</a></li>
									<li class='link'><a href=''>Hi Hat</a></li>
									<li class='link'><a href=''>Snare Drum</a></li>
									<li class='link'><a href=''>Tom</a></li>
									<li class='link'><a href=''>Hardware Bundles</a></li>
									<li class='link'><a href=''>Conga</a></li>
									<li class='link'><a href=''>Bongo</a></li>
									<li class='link'><a href=''>Trap Tables</a></li>
									<li class='link allCategory'><a href=''>All Stands</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Stands_Hardware-Parts_Upgrades'>Parts &amp; Upgrades</span>
								<ul id='flyout-Stands_Hardware-Parts_Upgrades' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Cymbal Essentials</a></li>
									<li class='link'><a href=''>Cymbal Quick-Release Toppers</a></li>
									<li class='link'><a href=''>Hoops &amp; Rims</a></li>
									<li class='link'><a href=''>Tension Rods &amp; Lugs</a></li>
									<li class='link'><a href=''>Snare Wires</a></li>
									<li class='link'><a href=''>Snare Strainers &amp; Throws</a></li>
									<li class='link'><a href=''>Replacement Parts</a></li>
								</ul>
							</div>
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Stands_Hardware-Hardware'>Hardware</span>
								<ul id='flyout-Stands_Hardware-Hardware' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Bass Drum Pedals</a></li>
									<li class='link'><a href=''>Thrones</a></li>
									<li class='link'><a href=''>Carts, Frames &amp; Racks</a></li>
									<li class='link'><a href=''>Cymbal Mounts</a></li>
									<li class='link'><a href=''>Tom Mounts</a></li>
									<li class='link'><a href=''>Cowbell Mounts</a></li>
									<li class='link'><a href=''>Latin, World &amp; Effect Mounts</a></li>
									<li class='link'><a href=''>Microphone Mounts</a></li>
									<li class='link allCategory'><a href=''>All Adapters &amp; Mounts</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Stands_Hardware-Live_Sound_Recording'>Live Sound &amp; Recording</span>
								<ul id='flyout-Stands_Hardware-Live_Sound_Recording' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Speakers</a></li>
									<li class='link'><a href=''>Consoles &amp; Mixers</a></li>
									<li class='link'><a href=''>Cables</a></li>
									<li class='link'><a href=''>Microphones</a></li>
									<li class='link'><a href=''>Audio Recorders</a></li>
									<li class='link allCategory'><a href=''>All Live Sound &amp; Recording</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Accessories_Cases'>
					<div class='h3'>
						Apparel &amp; Accessories
					</div>
					<div class='details'>
						Shirts, Drum Keys, Stick Tape
					</div>
				</div>
				<div id='flyout-Accessories_Cases' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>								
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Accessories_Cases-Apparel_Gifts'>Apparel &amp; Gifts</span>
								<ul id='flyout-Accessories_Cases-Apparel_Gifts' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Shirts</a></li>
									<li class='link'><a href=''>Hats</a></li>
									<li class='link'><a href=''>All Apparel</a></li>
									<li class='link gapAbove'><a href=''>Giant Sticks</a></li>
									<li class='link'><a href=''>Miniature Drums</a></li>
									<li class='link'><a href=''>All Gifts &amp; Novelties</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Accessories_Cases-Performance_Accessories'>Performance Accessories</span>
								<ul id='flyout-Accessories_Cases-Performance_Accessories' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Stick Tape</a></li>
									<li class='link'><a href=''>Drum Keys</a></li>
									<li class='link'><a href=''>Ear Protection</a></li>
									<li class='link'><a href=''>Stick &amp; Mallet Holders</a></li>
									<li class='link'><a href=''>Drummer Emergency Kits</a></li>
									<li class='link'><a href=''>All Performance Accessories</a></li>
								</ul>
							</div>
							
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Accessories_Cases-Cymbal_Gong_Accessories'>Cymbal &amp; Gong Accessories</span>
								<ul id='flyout-Accessories_Cases-Cymbal_Gong_Accessories' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Straps</a></li>
									<li class='link'><a href=''>Pads</a></li>
									<li class='link'><a href=''>Quick-Release Toppers</a></li>
									<li class='link'><a href=''>Felts</a></li>
									<li class='link'><a href=''>Sleeves</a></li>
									<li class='link'><a href=''>Wingnuts</a></li>
									<li class='link'><a href=''>Washers</a></li>
									<li class='link'><a href=''>Cleaners</a></li>
									<li class='link'><a href=''>All Cymbal &amp; Gong Accessories</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Accessories_Cases-Drum_Set_Accessories'>Drum Set Accessories</span>
								<ul id='flyout-Accessories_Cases-Drum_Set_Accessories' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Rugs &amp; Mats</a></li>
									<li class='link'><a href=''>Polish</a></li>
									<li class='link'><a href=''>Mutes &amp; Muffles</a></li>
									<li class='link'><a href=''>Bass Drum Patches</a></li>
									<li class='link'><a href=''>Bass Drum Decals</a></li>
									<li class='link'><a href=''>All Drum Set Accessories</a></li>									
								</ul>
							</div>
						</li>
						<li class='advertisement'>
						<a href='' class='ad'>
						<div class='content'>
							<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
							<div class='price h3'>
								$79.00 <span class='productGrouping details'>per pair</span>
							</div>
						</div>
						<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
						</a>
						</li>
					</ul>
				</div>
			</li>
			
			<li class='collection'>
				<div class='flyoutTitle reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Sheet_Music_Books'>
					<div class='h3'>
						Sheet Music &amp; Books
					</div>
					<!-- Details -->
				</div>
				<div id='flyout-Sheet_Music_Books' class='flyout reveal-closed-phone reveal-context-phone'>
					<ul class='container'>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Sheet_Music_Books-Solos_and_Duets'>Solos &amp; Duets</span>
								<ul id='flyout-Sheet_Music_Books-Solos_and_Duets' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Marimba Solos</a></li>
									<li class='link'><a href=''>Marimba Solo Collections</a></li>
									<li class='link'><a href=''>Vibraphone Solos</a></li>									
									<li class='link'><a href=''>Snare Drum Solos</a></li>
									<li class='link'><a href=''>Snare Drum Solo Collections</a></li>
									<li class='link'><a href=''>Marching Tenor Solos</a></li>
									<li class='link allCategory'><a href=''>All Solos</a></li>
									<li class='link gapAbove'><a href=''>Keyboard Duets</a></li>
									<li class='link'><a href=''>Multi-Percussion Duets</a></li>
									<li class='link allCategory'><a href=''>All Duets</a></li>
								</ul>
							</div>	
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Sheet_Music_Books-Method_Books'>Method Books</span>
								<ul id='flyout-Sheet_Music_Books-Method_Books' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Drum Set</a></li>
									<li class='link'><a href=''>Snare Drum</a></li>
									<li class='link'><a href=''>Marimba</a></li>
									<li class='link'><a href=''>Latin &amp; World</a></li>
									<li class='link'><a href=''>Sight-Reading</a></li>
									<li class='link allCategory'><a href=''>All Method Books</a></li>
								</ul>
							</div>										
						</li>
						<li class='column'>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Sheet_Music_Books-Percussion_Ensembles'>Percussion Ensembles</span>
								<ul id='flyout-Sheet_Music_Books-Percussion_Ensembles' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Original Compositions</a></li>
									<li class='link'><a href=''>Non-Melodic</a></li>
									<li class='link'><a href=''>Mallet Ensembles</a></li>
									<li class='link'><a href=''>Classical Arrangements</a></li>
									<li class='link'><a href=''>Ensembles with Rhythm Section</a></li>
									<li class='link'><a href=''>Steel Band</a></li>
									<li class='link'><a href=''>Novelty</a></li>
									<li class='link allCategory'><a href=''>All Percussion Ensembles</a></li>
								</ul>
							</div>	
							
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Sheet_Music_Books-'>Specialty Books</span>
								<ul id='flyout-Sheet_Music_Books-Books' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Orchestral Excerpts</a></li>
									<li class='link'><a href=''>Pedagogy</a></li>
									<li class='link'><a href=''>Reference</a></li>
									<li class='link'><a href=''>History</a></li>
								</ul>
							</div>
							<div class='list'>
								<span class='h3 reveal-context-phone reveal-closed-phone' data-reveal-children='flyout-Sheet_Music_Books-Marching_Percussion'>Marching Percussion</span>
								<ul id='flyout-Sheet_Music_Books-Marching_Percussion' class='links reveal-closed-phone reveal-open'>
									<li class='link'><a href=''>Cadences</a></li>
									<li class='link'><a href=''>Features</a></li>
									<li class='link'><a href=''>Exercises &amp; Warm Ups</a></li>
								</ul>
							</div>
						</li>
						<li class='advertisement'>
							<a href='' class='ad'>
							<div class='content'>
								<span class='h3 name'>Innovative IP240 Marimba Mallets</span>
								<div class='price h3'>
									$79.00 <span class='productGrouping details'>per pair</span>
								</div>
							</div>
							<img class='productImage' src='http://th08.deviantart.net/fs71/PRE/f/2010/006/8/e/Jester_Transparent_PNG_by_AbsurdWordPreferred.png'>
							</a>
						</li>
					</ul>
				</div>
			</li>
			
		</ul>
	</div>
</div>


