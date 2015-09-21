	<div id="screen_preloader" style="position: absolute;width: 100%;height: 1000px;z-index: 9999;text-align: center;background: #fff;padding-top: 200px;"><h3>WordPress Survey and Polls</h3><img src="<?php print(plugins_url( '/assets/img/screen_preloader.gif' , __FILE__ ));?>"><h5><?php _e( 'LOADING', 'pantherius-wordpress-survey-polls' );?><br><br><?php _e( 'Please wait...', 'pantherius-wordpress-survey-polls' );?></h5></div>
	<div class="wrap" style="visibility:hidden">
	<br /><br />
	<h3>WordPress Survey & Poll<hr /></h3>
	<?php if (!isset($_REQUEST['settings-updated'])) require_once(sprintf("%s/acustom.php", dirname(__FILE__)));?>
	<?php
	/*
	if (isset($this->action_result)) {?>
	<div class="updated settings-error" id="setting-error-settings_updated"> 
		<p><strong><?php print($this->action_result);?></strong></p>
	</div>
	<?php }*/?>
	<div class="help_link">
		<div class="ms-wizard heartbeat" data-step="1" data-tutorial="survey-form">Tutorial</div>
	</div>
	<div id="wp_sap_tabs">
		<ul>
			<li><a href="#wp_sap_settings">Surveys</a></li>
			<li><a href="#proversion">Pro Version</a></li>
			<li><a href="#plugin_directory">Plugin Directory</a></li>
			<li><a href="#manual" class="manual">Help</a></li>
		</ul>
	<div id="gradX" ></div>
	<div id="wp_sap_settings">
	<input type="text" id="survey_name" value="" size="50" placeholder="Type the survey name here" /><a id="add_new_survey" class="button button-small button-primary">New Survey</a><span id="error_log"></span>
	<div style="display:none;" id="new_survey_content">
	  <h3 class="accordion_survey_header">Section 1</h3>
	  <div>
			<fieldset>
			<legend>Survey Options</legend>
			<div class="text">Start time: <input type="text" name="start_time" class="datepicker inputtext start_time wp_sap_tooltip" title="Leave it blank to activate the survey immediately" value="" /></div>
			<div class="text">Expiry time: <input type="text" name="expiry_time" class="datepicker inputtext expiry_time wp_sap_tooltip" title="Never expire the survey when you leave this blank" value="" /></div>
			<div class="text">Display style:
			<select name="display_style" class="display_style">
				<option value="bottom">Bottom</option>
				<option value="top">Top</option>
				<option value="center">Center</option>
			</select>
			</div> 
			<div class="text">Animation Easing:
			<select name="animation_easing" class="animation_easing">
							<option value="linear">linear</option>
							<option value="swing">swing</option>
							<option value="easeInQuad">easeInQuad</option>
							<option value="easeOutQuad">easeOutQuad</option>
							<option value="easeInOutQuad">easeInOutQuad</option>
							<option value="easeInCubic">easeInCubic</option>
							<option value="easeOutCubic">easeOutCubic</option>
							<option value="easeInOutCubic">easeInOutCubic</option>
							<option value="easeInQuart">easeInQuart</option>
							<option value="easeOutQuart">easeOutQuart</option>
							<option value="easeInOutQuart">easeInOutQuart</option>
							<option value="easeInQuint">easeInQuint</option>
							<option value="easeOutQuint">easeOutQuint</option>
							<option value="easeInOutQuint">easeInOutQuint</option>
							<option value="easeInExpo">easeInExpo</option>
							<option value="easeOutExpo">easeOutExpo</option>
							<option value="easeInOutExpo">easeInOutExpo</option>
							<option value="easeInSine">easeInSine</option>
							<option value="easeOutSine">easeOutSine</option>
							<option value="easeInOutSine">easeInOutSine</option>
							<option value="easeInCirc">easeInCirc</option>
							<option value="easeOutCirc">easeOutCirc</option>
							<option value="easeInOutCirc">easeInOutCirc</option>
							<option value="easeInElastic">easeInElastic</option>
							<option value="easeOutElastic">easeOutElastic</option>
							<option value="easeInOutElastic">easeInOutElastic</option>
							<option value="easeInBack">easeInBack</option>
							<option value="easeOutBack">easeOutBack</option>
							<option selected value="easeInOutBack">easeInOutBack</option>
							<option value="easeInBounce">easeInBounce</option>
							<option value="easeOutBounce">easeOutBounce</option>
							<option value="easeInOutBounce">easeInOutBounce</option>
			</select>
			</div> 
			<div class="text">Font Family: <select name="font_family" class="font_family">
							<option value="">Default</option>
							<option value="ABeeZee">ABeeZee</option>
							<option value="Abel">Abel</option>
							<option value="Abril Fatface">Abril Fatface</option>
							<option value="Aclonica">Aclonica</option>
							<option value="Acme">Acme</option>
							<option value="Actor">Actor</option>
							<option value="Adamina">Adamina</option>
							<option value="Advent Pro">Advent Pro</option>
							<option value="Aguafina Script">Aguafina Script</option>
							<option value="Akronim">Akronim</option>
							<option value="Aladin">Aladin</option>
							<option value="Aldrich">Aldrich</option>
							<option value="Alef">Alef</option>
							<option value="Alegreya">Alegreya</option>
							<option value="Alegreya SC">Alegreya SC</option>
							<option value="Alex Brush">Alex Brush</option>
							<option value="Alfa Slab One">Alfa Slab One</option>
							<option value="Alice">Alice</option>
							<option value="Alike">Alike</option>
							<option value="Alike Angular">Alike Angular</option>
							<option value="Allan">Allan</option>
							<option value="Allerta">Allerta</option>
							<option value="Allerta Stencil">Allerta Stencil</option>
							<option value="Allura">Allura</option>
							<option value="Almendra">Almendra</option>
							<option value="Almendra Display">Almendra Display</option>
							<option value="Almendra SC">Almendra SC</option>
							<option value="Amarante">Amarante</option>
							<option value="Amaranth">Amaranth</option>
							<option value="Amatic SC">Amatic SC</option>
							<option value="Amethysta">Amethysta</option>
							<option value="Anaheim">Anaheim</option>
							<option value="Andada">Andada</option>
							<option value="Andika">Andika</option>
							<option value="Angkor">Angkor</option>
							<option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
							<option value="Anonymous Pro">Anonymous Pro</option>
							<option value="Antic">Antic</option>
							<option value="Antic Didone">Antic Didone</option>
							<option value="Antic Slab">Antic Slab</option>
							<option value="Anton">Anton</option>
							<option value="Arapey">Arapey</option>
							<option value="Arbutus">Arbutus</option>
							<option value="Arbutus Slab">Arbutus Slab</option>
							<option value="Architects Daughter">Architects Daughter</option>
							<option value="Archivo Black">Archivo Black</option>
							<option value="Archivo Narrow">Archivo Narrow</option>
							<option value="Arimo">Arimo</option>
							<option value="Arizonia">Arizonia</option>
							<option value="Armata">Armata</option>
							<option value="Artifika">Artifika</option>
							<option value="Arvo">Arvo</option>
							<option value="Asap">Asap</option>
							<option value="Asset">Asset</option>
							<option value="Astloch">Astloch</option>
							<option value="Asul">Asul</option>
							<option value="Atomic Age">Atomic Age</option>
							<option value="Aubrey">Aubrey</option>
							<option value="Audiowide">Audiowide</option>
							<option value="Autour One">Autour One</option>
							<option value="Average">Average</option>
							<option value="Average Sans">Average Sans</option>
							<option value="Averia Gruesa Libre">Averia Gruesa Libre</option>
							<option value="Averia Libre">Averia Libre</option>
							<option value="Averia Sans Libre">Averia Sans Libre</option>
							<option value="Averia Serif Libre">Averia Serif Libre</option>
							<option value="Bad Script">Bad Script</option>
							<option value="Balthazar">Balthazar</option>
							<option value="Bangers">Bangers</option>
							<option value="Basic">Basic</option>
							<option value="Battambang">Battambang</option>
							<option value="Baumans">Baumans</option>
							<option value="Bayon">Bayon</option>
							<option value="Belgrano">Belgrano</option>
							<option value="Belleza">Belleza</option>
							<option value="BenchNine">BenchNine</option>
							<option value="Bentham">Bentham</option>
							<option value="Berkshire Swash">Berkshire Swash</option>
							<option value="Bevan">Bevan</option>
							<option value="Bigelow Rules">Bigelow Rules</option>
							<option value="Bigshot One">Bigshot One</option>
							<option value="Bilbo">Bilbo</option>
							<option value="Bilbo Swash Caps">Bilbo Swash Caps</option>
							<option value="Bitter">Bitter</option>
							<option value="Black Ops One">Black Ops One</option>
							<option value="Bokor">Bokor</option>
							<option value="Bonbon">Bonbon</option>
							<option value="Boogaloo">Boogaloo</option>
							<option value="Bowlby One">Bowlby One</option>
							<option value="Bowlby One SC">Bowlby One SC</option>
							<option value="Brawler">Brawler</option>
							<option value="Bree Serif">Bree Serif</option>
							<option value="Bubblegum Sans">Bubblegum Sans</option>
							<option value="Bubbler One">Bubbler One</option>
							<option value="Buenard">Buenard</option>
							<option value="Butcherman">Butcherman</option>
							<option value="Butterfly Kids">Butterfly Kids</option>
							<option value="Cabin">Cabin</option>
							<option value="Cabin Condensed">Cabin Condensed</option>
							<option value="Cabin Sketch">Cabin Sketch</option>
							<option value="Caesar Dressing">Caesar Dressing</option>
							<option value="Cagliostro">Cagliostro</option>
							<option value="Calligraffitti">Calligraffitti</option>
							<option value="Cambo">Cambo</option>
							<option value="Candal">Candal</option>
							<option value="Cantarell">Cantarell</option>
							<option value="Cantata One">Cantata One</option>
							<option value="Cantora One">Cantora One</option>
							<option value="Capriola">Capriola</option>
							<option value="Cardo">Cardo</option>
							<option value="Carme">Carme</option>
							<option value="Carrois Gothic">Carrois Gothic</option>
							<option value="Carrois Gothic SC">Carrois Gothic SC</option>
							<option value="Carter One">Carter One</option>
							<option value="Caudex">Caudex</option>
							<option value="Cedarville Cursive">Cedarville Cursive</option>
							<option value="Ceviche One">Ceviche One</option>
							<option value="Changa One">Changa One</option>
							<option value="Chango">Chango</option>
							<option value="Chau Philomene One">Chau Philomene One</option>
							<option value="Chela One">Chela One</option>
							<option value="Chelsea Market">Chelsea Market</option>
							<option value="Chenla">Chenla</option>
							<option value="Cherry Cream Soda">Cherry Cream Soda</option>
							<option value="Cherry Swash">Cherry Swash</option>
							<option value="Chewy">Chewy</option>
							<option value="Chicle">Chicle</option>
							<option value="Chivo">Chivo</option>
							<option value="Cinzel">Cinzel</option>
							<option value="Cinzel Decorative">Cinzel Decorative</option>
							<option value="Clicker Script">Clicker Script</option>
							<option value="Coda">Coda</option>
							<option value="Coda Caption:800">Coda Caption</option>
							<option value="Codystar">Codystar</option>
							<option value="Combo">Combo</option>
							<option value="Comfortaa">Comfortaa</option>
							<option value="Coming Soon">Coming Soon</option>
							<option value="Concert One">Concert One</option>
							<option value="Condiment">Condiment</option>
							<option value="Content">Content</option>
							<option value="Contrail One">Contrail One</option>
							<option value="Convergence">Convergence</option>
							<option value="Cookie">Cookie</option>
							<option value="Copse">Copse</option>
							<option value="Corben">Corben</option>
							<option value="Courgette">Courgette</option>
							<option value="Cousine">Cousine</option>
							<option value="Coustard">Coustard</option>
							<option value="Covered By Your Grace">Covered By Your Grace</option>
							<option value="Crafty Girls">Crafty Girls</option>
							<option value="Creepster">Creepster</option>
							<option value="Crete Round">Crete Round</option>
							<option value="Crimson Text">Crimson Text</option>
							<option value="Croissant One">Croissant One</option>
							<option value="Crushed">Crushed</option>
							<option value="Cuprum">Cuprum</option>
							<option value="Cutive">Cutive</option>
							<option value="Cutive Mono">Cutive Mono</option>
							<option value="Damion">Damion</option>
							<option value="Dancing Script">Dancing Script</option>
							<option value="Dangrek">Dangrek</option>
							<option value="Dawning of a New Day">Dawning of a New Day</option>
							<option value="Days One">Days One</option>
							<option value="Delius">Delius</option>
							<option value="Delius Swash Caps">Delius Swash Caps</option>
							<option value="Delius Unicase">Delius Unicase</option>
							<option value="Della Respira">Della Respira</option>
							<option value="Denk One">Denk One</option>
							<option value="Devonshire">Devonshire</option>
							<option value="Didact Gothic">Didact Gothic</option>
							<option value="Diplomata">Diplomata</option>
							<option value="Diplomata SC">Diplomata SC</option>
							<option value="Domine">Domine</option>
							<option value="Donegal One">Donegal One</option>
							<option value="Doppio One">Doppio One</option>
							<option value="Dorsa">Dorsa</option>
							<option value="Dosis">Dosis</option>
							<option value="Dr Sugiyama">Dr Sugiyama</option>
							<option value="Droid Sans">Droid Sans</option>
							<option value="Droid Sans Mono">Droid Sans Mono</option>
							<option value="Droid Serif">Droid Serif</option>
							<option value="Duru Sans">Duru Sans</option>
							<option value="Dynalight">Dynalight</option>
							<option value="Eagle Lake">Eagle Lake</option>
							<option value="Eater">Eater</option>
							<option value="EB Garamond">EB Garamond</option>
							<option value="Economica">Economica</option>
							<option value="Electrolize">Electrolize</option>
							<option value="Elsie">Elsie</option>
							<option value="Elsie Swash Caps">Elsie Swash Caps</option>
							<option value="Emblema One">Emblema One</option>
							<option value="Emilys Candy">Emilys Candy</option>
							<option value="Engagement">Engagement</option>
							<option value="Englebert">Englebert</option>
							<option value="Enriqueta">Enriqueta</option>
							<option value="Erica One">Erica One</option>
							<option value="Esteban">Esteban</option>
							<option value="Euphoria Script">Euphoria Script</option>
							<option value="Ewert">Ewert</option>
							<option value="Exo">Exo</option>
							<option value="Expletus Sans">Expletus Sans</option>
							<option value="Fanwood Text">Fanwood Text</option>
							<option value="Fascinate">Fascinate</option>
							<option value="Fascinate Inline">Fascinate Inline</option>
							<option value="Faster One">Faster One</option>
							<option value="Fasthand">Fasthand</option>
							<option value="Fauna One">Fauna One</option>
							<option value="Federant">Federant</option>
							<option value="Federo">Federo</option>
							<option value="Felipa">Felipa</option>
							<option value="Fenix">Fenix</option>
							<option value="Finger Paint">Finger Paint</option>
							<option value="Fjalla One">Fjalla One</option>
							<option value="Fjord One">Fjord One</option>
							<option value="Flamenco">Flamenco</option>
							<option value="Flavors">Flavors</option>
							<option value="Fondamento">Fondamento</option>
							<option value="Fontdiner Swanky">Fontdiner Swanky</option>
							<option value="Forum">Forum</option>
							<option value="Francois One">Francois One</option>
							<option value="Freckle Face">Freckle Face</option>
							<option value="Fredericka the Great">Fredericka the Great</option>
							<option value="Fredoka One">Fredoka One</option>
							<option value="Freehand">Freehand</option>
							<option value="Fresca">Fresca</option>
							<option value="Frijole">Frijole</option>
							<option value="Fruktur">Fruktur</option>
							<option value="Fugaz One">Fugaz One</option>
							<option value="Gabriela">Gabriela</option>
							<option value="Gafata">Gafata</option>
							<option value="Galdeano">Galdeano</option>
							<option value="Galindo">Galindo</option>
							<option value="Gentium Basic">Gentium Basic</option>
							<option value="Gentium Book Basic">Gentium Book Basic</option>
							<option value="Geo">Geo</option>
							<option value="Geostar">Geostar</option>
							<option value="Geostar Fill">Geostar Fill</option>
							<option value="Germania One">Germania One</option>
							<option value="GFS Didot">GFS Didot</option>
							<option value="GFS Neohellenic">GFS Neohellenic</option>
							<option value="Gilda Display">Gilda Display</option>
							<option value="Give You Glory">Give You Glory</option>
							<option value="Glass Antiqua">Glass Antiqua</option>
							<option value="Glegoo">Glegoo</option>
							<option value="Gloria Hallelujah">Gloria Hallelujah</option>
							<option value="Goblin One">Goblin One</option>
							<option value="Gochi Hand">Gochi Hand</option>
							<option value="Gorditas">Gorditas</option>
							<option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
							<option value="Graduate">Graduate</option>
							<option value="Grand Hotel">Grand Hotel</option>
							<option value="Gravitas One">Gravitas One</option>
							<option value="Great Vibes">Great Vibes</option>
							<option value="Griffy">Griffy</option>
							<option value="Gruppo">Gruppo</option>
							<option value="Gudea">Gudea</option>
							<option value="Habibi">Habibi</option>
							<option value="Hammersmith One">Hammersmith One</option>
							<option value="Hanalei">Hanalei</option>
							<option value="Hanalei Fill">Hanalei Fill</option>
							<option value="Handlee">Handlee</option>
							<option value="Hanuman">Hanuman</option>
							<option value="Happy Monkey">Happy Monkey</option>
							<option value="Headland One">Headland One</option>
							<option value="Henny Penny">Henny Penny</option>
							<option value="Herr Von Muellerhoff">Herr Von Muellerhoff</option>
							<option value="Holtwood One SC">Holtwood One SC</option>
							<option value="Homemade Apple">Homemade Apple</option>
							<option value="Homenaje">Homenaje</option>
							<option value="Iceberg">Iceberg</option>
							<option value="Iceland">Iceland</option>
							<option value="IM Fell Double Pica">IM Fell Double Pica</option>
							<option value="IM Fell Double Pica SC">IM Fell Double Pica SC</option>
							<option value="IM Fell DW Pica">IM Fell DW Pica</option>
							<option value="IM Fell DW Pica SC">IM Fell DW Pica SC</option>
							<option value="IM Fell English">IM Fell English</option>
							<option value="IM Fell English SC">IM Fell English SC</option>
							<option value="IM Fell French Canon">IM Fell French Canon</option>
							<option value="IM Fell French Canon SC">IM Fell French Canon SC</option>
							<option value="IM Fell Great Primer">IM Fell Great Primer</option>
							<option value="IM Fell Great Primer SC">IM Fell Great Primer SC</option>
							<option value="Imprima">Imprima</option>
							<option value="Inconsolata">Inconsolata</option>
							<option value="Inder">Inder</option>
							<option value="Indie Flower">Indie Flower</option>
							<option value="Inika">Inika</option>
							<option value="Irish Grover">Irish Grover</option>
							<option value="Istok Web">Istok Web</option>
							<option value="Italiana">Italiana</option>
							<option value="Italianno">Italianno</option>
							<option value="Jacques Francois">Jacques Francois</option>
							<option value="Jacques Francois Shadow">Jacques Francois Shadow</option>
							<option value="Jim Nightshade">Jim Nightshade</option>
							<option value="Jockey One">Jockey One</option>
							<option value="Jolly Lodger">Jolly Lodger</option>
							<option value="Josefin Sans">Josefin Sans</option>
							<option value="Josefin Slab">Josefin Slab</option>
							<option value="Joti One">Joti One</option>
							<option value="Judson">Judson</option>
							<option value="Julee">Julee</option>
							<option value="Julius Sans One">Julius Sans One</option>
							<option value="Junge">Junge</option>
							<option value="Jura">Jura</option>
							<option value="Just Another Hand">Just Another Hand</option>
							<option value="Just Me Again Down Here">Just Me Again Down Here</option>
							<option value="Kameron">Kameron</option>
							<option value="Karla">Karla</option>
							<option value="Kaushan Script">Kaushan Script</option>
							<option value="Kavoon">Kavoon</option>
							<option value="Keania One">Keania One</option>
							<option value="Kelly Slab">Kelly Slab</option>
							<option value="Kenia">Kenia</option>
							<option value="Khmer">Khmer</option>
							<option value="Kite One">Kite One</option>
							<option value="Knewave">Knewave</option>
							<option value="Kotta One">Kotta One</option>
							<option value="Koulen">Koulen</option>
							<option value="Kranky">Kranky</option>
							<option value="Kreon">Kreon</option>
							<option value="Kristi">Kristi</option>
							<option value="Krona One">Krona One</option>
							<option value="La Belle Aurore">La Belle Aurore</option>
							<option value="Lancelot">Lancelot</option>
							<option value="Lato">Lato</option>
							<option value="League Script">League Script</option>
							<option value="Leckerli One">Leckerli One</option>
							<option value="Ledger">Ledger</option>
							<option value="Lekton">Lekton</option>
							<option value="Lemon">Lemon</option>
							<option value="Libre Baskerville">Libre Baskerville</option>
							<option value="Life Savers">Life Savers</option>
							<option value="Lilita One">Lilita One</option>
							<option value="Lily Script One">Lily Script One</option>
							<option value="Limelight">Limelight</option>
							<option value="Linden Hill">Linden Hill</option>
							<option value="Lobster">Lobster</option>
							<option value="Lobster Two">Lobster Two</option>
							<option value="Londrina Outline">Londrina Outline</option>
							<option value="Londrina Shadow">Londrina Shadow</option>
							<option value="Londrina Sketch">Londrina Sketch</option>
							<option value="Londrina Solid">Londrina Solid</option>
							<option value="Lora">Lora</option>
							<option value="Love Ya Like A Sister">Love Ya Like A Sister</option>
							<option value="Loved by the King">Loved by the King</option>
							<option value="Lovers Quarrel">Lovers Quarrel</option>
							<option value="Luckiest Guy">Luckiest Guy</option>
							<option value="Lusitana">Lusitana</option>
							<option value="Lustria">Lustria</option>
							<option value="Macondo">Macondo</option>
							<option value="Macondo Swash Caps">Macondo Swash Caps</option>
							<option value="Magra">Magra</option>
							<option value="Maiden Orange">Maiden Orange</option>
							<option value="Mako">Mako</option>
							<option value="Marcellus">Marcellus</option>
							<option value="Marcellus SC">Marcellus SC</option>
							<option value="Marck Script">Marck Script</option>
							<option value="Margarine">Margarine</option>
							<option value="Marko One">Marko One</option>
							<option value="Marmelad">Marmelad</option>
							<option value="Marvel">Marvel</option>
							<option value="Mate">Mate</option>
							<option value="Mate SC">Mate SC</option>
							<option value="Maven Pro">Maven Pro</option>
							<option value="McLaren">McLaren</option>
							<option value="Meddon">Meddon</option>
							<option value="MedievalSharp">MedievalSharp</option>
							<option value="Medula One">Medula One</option>
							<option value="Megrim">Megrim</option>
							<option value="Meie Script">Meie Script</option>
							<option value="Merienda">Merienda</option>
							<option value="Merienda One">Merienda One</option>
							<option value="Merriweather">Merriweather</option>
							<option value="Merriweather Sans">Merriweather Sans</option>
							<option value="Metal">Metal</option>
							<option value="Metal Mania">Metal Mania</option>
							<option value="Metamorphous">Metamorphous</option>
							<option value="Metrophobic">Metrophobic</option>
							<option value="Michroma">Michroma</option>
							<option value="Milonga">Milonga</option>
							<option value="Miltonian">Miltonian</option>
							<option value="Miltonian Tattoo">Miltonian Tattoo</option>
							<option value="Miniver">Miniver</option>
							<option value="Miss Fajardose">Miss Fajardose</option>
							<option value="Modern Antiqua">Modern Antiqua</option>
							<option value="Molengo">Molengo</option>
							<option value="Molle:400italic">Molle</option>
							<option value="Monda">Monda</option>
							<option value="Monofett">Monofett</option>
							<option value="Monoton">Monoton</option>
							<option value="Monsieur La Doulaise">Monsieur La Doulaise</option>
							<option value="Montaga">Montaga</option>
							<option value="Montez">Montez</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Montserrat Alternates">Montserrat Alternates</option>
							<option value="Montserrat Subrayada">Montserrat Subrayada</option>
							<option value="Moul">Moul</option>
							<option value="Moulpali">Moulpali</option>
							<option value="Mountains of Christmas">Mountains of Christmas</option>
							<option value="Mouse Memoirs">Mouse Memoirs</option>
							<option value="Mr Bedfort">Mr Bedfort</option>
							<option value="Mr Dafoe">Mr Dafoe</option>
							<option value="Mr De Haviland">Mr De Haviland</option>
							<option value="Mrs Saint Delafield">Mrs Saint Delafield</option>
							<option value="Mrs Sheppards">Mrs Sheppards</option>
							<option value="Muli">Muli</option>
							<option value="Mystery Quest">Mystery Quest</option>
							<option value="Neucha">Neucha</option>
							<option value="Neuton">Neuton</option>
							<option value="New Rocker">New Rocker</option>
							<option value="News Cycle">News Cycle</option>
							<option value="Niconne">Niconne</option>
							<option value="Nixie One">Nixie One</option>
							<option value="Nobile">Nobile</option>
							<option value="Nokora">Nokora</option>
							<option value="Norican">Norican</option>
							<option value="Nosifer">Nosifer</option>
							<option value="Nothing You Could Do">Nothing You Could Do</option>
							<option value="Noticia Text">Noticia Text</option>
							<option value="Noto Sans">Noto Sans</option>
							<option value="Noto Serif">Noto Serif</option>
							<option value="Nova Cut">Nova Cut</option>
							<option value="Nova Flat">Nova Flat</option>
							<option value="Nova Mono">Nova Mono</option>
							<option value="Nova Oval">Nova Oval</option>
							<option value="Nova Round">Nova Round</option>
							<option value="Nova Script">Nova Script</option>
							<option value="Nova Slim">Nova Slim</option>
							<option value="Nova Square">Nova Square</option>
							<option value="Numans">Numans</option>
							<option value="Nunito">Nunito</option>
							<option value="Odor Mean Chey">Odor Mean Chey</option>
							<option value="Offside">Offside</option>
							<option value="Old Standard TT">Old Standard TT</option>
							<option value="Oldenburg">Oldenburg</option>
							<option value="Oleo Script">Oleo Script</option>
							<option value="Oleo Script Swash Caps">Oleo Script Swash Caps</option>
							<option value="Open Sans">Open Sans</option>
							<option value="Open Sans Condensed:300">Open Sans Condensed</option>
							<option value="Oranienbaum">Oranienbaum</option>
							<option value="Orbitron">Orbitron</option>
							<option value="Oregano">Oregano</option>
							<option value="Orienta">Orienta</option>
							<option value="Original Surfer">Original Surfer</option>
							<option value="Oswald">Oswald</option>
							<option value="Over the Rainbow">Over the Rainbow</option>
							<option value="Overlock">Overlock</option>
							<option value="Overlock SC">Overlock SC</option>
							<option value="Ovo">Ovo</option>
							<option value="Oxygen">Oxygen</option>
							<option value="Oxygen Mono">Oxygen Mono</option>
							<option value="Pacifico">Pacifico</option>
							<option value="Paprika">Paprika</option>
							<option value="Parisienne">Parisienne</option>
							<option value="Passero One">Passero One</option>
							<option value="Passion One">Passion One</option>
							<option value="Pathway Gothic One">Pathway Gothic One</option>
							<option value="Patrick Hand">Patrick Hand</option>
							<option value="Patrick Hand SC">Patrick Hand SC</option>
							<option value="Patua One">Patua One</option>
							<option value="Paytone One">Paytone One</option>
							<option value="Peralta">Peralta</option>
							<option value="Permanent Marker">Permanent Marker</option>
							<option value="Petit Formal Script">Petit Formal Script</option>
							<option value="Petrona">Petrona</option>
							<option value="Philosopher">Philosopher</option>
							<option value="Piedra">Piedra</option>
							<option value="Pinyon Script">Pinyon Script</option>
							<option value="Pirata One">Pirata One</option>
							<option value="Plaster">Plaster</option>
							<option value="Play">Play</option>
							<option value="Playball">Playball</option>
							<option value="Playfair Display">Playfair Display</option>
							<option value="Playfair Display SC">Playfair Display SC</option>
							<option value="Podkova">Podkova</option>
							<option value="Poiret One">Poiret One</option>
							<option value="Poller One">Poller One</option>
							<option value="Poly">Poly</option>
							<option value="Pompiere">Pompiere</option>
							<option value="Pontano Sans">Pontano Sans</option>
							<option value="Port Lligat Sans">Port Lligat Sans</option>
							<option value="Port Lligat Slab">Port Lligat Slab</option>
							<option value="Prata">Prata</option>
							<option value="Preahvihear">Preahvihear</option>
							<option value="Press Start 2P">Press Start 2P</option>
							<option value="Princess Sofia">Princess Sofia</option>
							<option value="Prociono">Prociono</option>
							<option value="Prosto One">Prosto One</option>
							<option value="PT Mono">PT Mono</option>
							<option value="PT Sans">PT Sans</option>
							<option value="PT Sans Caption">PT Sans Caption</option>
							<option value="PT Sans Narrow">PT Sans Narrow</option>
							<option value="PT Serif">PT Serif</option>
							<option value="PT Serif Caption">PT Serif Caption</option>
							<option value="Puritan">Puritan</option>
							<option value="Purple Purse">Purple Purse</option>
							<option value="Quando">Quando</option>
							<option value="Quantico">Quantico</option>
							<option value="Quattrocento">Quattrocento</option>
							<option value="Quattrocento Sans">Quattrocento Sans</option>
							<option value="Questrial">Questrial</option>
							<option value="Quicksand">Quicksand</option>
							<option value="Quintessential">Quintessential</option>
							<option value="Qwigley">Qwigley</option>
							<option value="Racing Sans One">Racing Sans One</option>
							<option value="Radley">Radley</option>
							<option value="Raleway">Raleway</option>
							<option value="Raleway Dots">Raleway Dots</option>
							<option value="Rambla">Rambla</option>
							<option value="Rammetto One">Rammetto One</option>
							<option value="Ranchers">Ranchers</option>
							<option value="Rancho">Rancho</option>
							<option value="Rationale">Rationale</option>
							<option value="Redressed">Redressed</option>
							<option value="Reenie Beanie">Reenie Beanie</option>
							<option value="Revalia">Revalia</option>
							<option value="Ribeye">Ribeye</option>
							<option value="Ribeye Marrow">Ribeye Marrow</option>
							<option value="Righteous">Righteous</option>
							<option value="Risque">Risque</option>
							<option value="Roboto">Roboto</option>
							<option value="Roboto Condensed">Roboto Condensed</option>
							<option value="Roboto Slab">Roboto Slab</option>
							<option value="Rochester">Rochester</option>
							<option value="Rock Salt">Rock Salt</option>
							<option value="Rokkitt">Rokkitt</option>
							<option value="Romanesco">Romanesco</option>
							<option value="Ropa Sans">Ropa Sans</option>
							<option value="Rosario">Rosario</option>
							<option value="Rosarivo">Rosarivo</option>
							<option value="Rouge Script">Rouge Script</option>
							<option value="Ruda">Ruda</option>
							<option value="Rufina">Rufina</option>
							<option value="Ruge Boogie">Ruge Boogie</option>
							<option value="Ruluko">Ruluko</option>
							<option value="Rum Raisin">Rum Raisin</option>
							<option value="Ruslan Display">Ruslan Display</option>
							<option value="Russo One">Russo One</option>
							<option value="Ruthie">Ruthie</option>
							<option value="Rye">Rye</option>
							<option value="Sacramento">Sacramento</option>
							<option value="Sail">Sail</option>
							<option value="Salsa">Salsa</option>
							<option value="Sanchez">Sanchez</option>
							<option value="Sancreek">Sancreek</option>
							<option value="Sansita One">Sansita One</option>
							<option value="Sarina">Sarina</option>
							<option value="Satisfy">Satisfy</option>
							<option value="Scada">Scada</option>
							<option value="Schoolbell">Schoolbell</option>
							<option value="Seaweed Script">Seaweed Script</option>
							<option value="Sevillana">Sevillana</option>
							<option value="Seymour One">Seymour One</option>
							<option value="Shadows Into Light">Shadows Into Light</option>
							<option value="Shadows Into Light Two">Shadows Into Light Two</option>
							<option value="Shanti">Shanti</option>
							<option value="Share">Share</option>
							<option value="Share Tech">Share Tech</option>
							<option value="Share Tech Mono">Share Tech Mono</option>
							<option value="Shojumaru">Shojumaru</option>
							<option value="Short Stack">Short Stack</option>
							<option value="Siemreap">Siemreap</option>
							<option value="Sigmar One">Sigmar One</option>
							<option value="Signika">Signika</option>
							<option value="Signika Negative">Signika Negative</option>
							<option value="Simonetta">Simonetta</option>
							<option value="Sintony">Sintony</option>
							<option value="Sirin Stencil">Sirin Stencil</option>
							<option value="Six Caps">Six Caps</option>
							<option value="Skranji">Skranji</option>
							<option value="Slackey">Slackey</option>
							<option value="Smokum">Smokum</option>
							<option value="Smythe">Smythe</option>
							<option value="Sniglet:800">Sniglet</option>
							<option value="Snippet">Snippet</option>
							<option value="Snowburst One">Snowburst One</option>
							<option value="Sofadi One">Sofadi One</option>
							<option value="Sofia">Sofia</option>
							<option value="Sonsie One">Sonsie One</option>
							<option value="Sorts Mill Goudy">Sorts Mill Goudy</option>
							<option value="Source Code Pro">Source Code Pro</option>
							<option value="Source Sans Pro">Source Sans Pro</option>
							<option value="Special Elite">Special Elite</option>
							<option value="Spicy Rice">Spicy Rice</option>
							<option value="Spinnaker">Spinnaker</option>
							<option value="Spirax">Spirax</option>
							<option value="Squada One">Squada One</option>
							<option value="Stalemate">Stalemate</option>
							<option value="Stalinist One">Stalinist One</option>
							<option value="Stardos Stencil">Stardos Stencil</option>
							<option value="Stint Ultra Condensed">Stint Ultra Condensed</option>
							<option value="Stint Ultra Expanded">Stint Ultra Expanded</option>
							<option value="Stoke">Stoke</option>
							<option value="Strait">Strait</option>
							<option value="Sue Ellen Francisco">Sue Ellen Francisco</option>
							<option value="Sunshiney">Sunshiney</option>
							<option value="Supermercado One">Supermercado One</option>
							<option value="Suwannaphum">Suwannaphum</option>
							<option value="Swanky and Moo Moo">Swanky and Moo Moo</option>
							<option value="Syncopate">Syncopate</option>
							<option value="Tangerine">Tangerine</option>
							<option value="Taprom">Taprom</option>
							<option value="Tauri">Tauri</option>
							<option value="Telex">Telex</option>
							<option value="Tenor Sans">Tenor Sans</option>
							<option value="Text Me One">Text Me One</option>
							<option value="The Girl Next Door">The Girl Next Door</option>
							<option value="Tienne">Tienne</option>
							<option value="Tinos">Tinos</option>
							<option value="Titan One">Titan One</option>
							<option value="Titillium Web">Titillium Web</option>
							<option value="Trade Winds">Trade Winds</option>
							<option value="Trocchi">Trocchi</option>
							<option value="Trochut">Trochut</option>
							<option value="Trykker">Trykker</option>
							<option value="Tulpen One">Tulpen One</option>
							<option value="Ubuntu">Ubuntu</option>
							<option value="Ubuntu Condensed">Ubuntu Condensed</option>
							<option value="Ubuntu Mono">Ubuntu Mono</option>
							<option value="Ultra">Ultra</option>
							<option value="Uncial Antiqua">Uncial Antiqua</option>
							<option value="Underdog">Underdog</option>
							<option value="Unica One">Unica One</option>
							<option value="UnifrakturCook:700">UnifrakturCook</option>
							<option value="UnifrakturMaguntia">UnifrakturMaguntia</option>
							<option value="Unkempt">Unkempt</option>
							<option value="Unlock">Unlock</option>
							<option value="Unna">Unna</option>
							<option value="Vampiro One">Vampiro One</option>
							<option value="Varela">Varela</option>
							<option value="Varela Round">Varela Round</option>
							<option value="Vast Shadow">Vast Shadow</option>
							<option value="Vibur">Vibur</option>
							<option value="Vidaloka">Vidaloka</option>
							<option value="Viga">Viga</option>
							<option value="Voces">Voces</option>
							<option value="Volkhov">Volkhov</option>
							<option value="Vollkorn">Vollkorn</option>
							<option value="Voltaire">Voltaire</option>
							<option value="VT323">VT323</option>
							<option value="Waiting for the Sunrise">Waiting for the Sunrise</option>
							<option value="Wallpoet">Wallpoet</option>
							<option value="Walter Turncoat">Walter Turncoat</option>
							<option value="Warnes">Warnes</option>
							<option value="Wellfleet">Wellfleet</option>
							<option value="Wendy One">Wendy One</option>
							<option value="Wire One">Wire One</option>
							<option value="Yanone Kaffeesatz">Yanone Kaffeesatz</option>
							<option value="Yellowtail">Yellowtail</option>
							<option value="Yeseva One">Yeseva One</option>
							<option value="Yesteryear">Yesteryear</option>
							<option value="Zeyada">Zeyada</option>
						</select>
			</div>
			<div title="Background Color" class="wp_sap_preview1001 wp_sap_preview wp_sap_tooltip"><div class="inner"><input type="hidden" class="bgcolor" value="linear-gradient(top , rgb(255, 255, 255) 35% , rgb(204, 204, 204) 70%); -o-linear-gradient(top , rgb(255, 255, 255) 35% , rgb(204, 204, 204) 70%); -ms-linear-gradient(top , rgb(255, 255, 255) 35% , rgb(204, 204, 204) 70%); -moz-linear-gradient(top , rgb(255, 255, 255) 35% , rgb(204, 204, 204) 70%); -webkit-linear-gradient(top , rgb(255, 255, 255) 35% , rgb(204, 204, 204) 70%);"></div></div>
			<div title="Font Color" class="wp_sap_preview1002 wp_sap_preview wp_sap_tooltip"></div>
			<div title="Border Color" class="wp_sap_preview1003 wp_sap_preview wp_sap_tooltip"></div>
			<div class="play_button"><img class="wp_sap_tooltip" title="Play Survey" src="<?php print(plugins_url( '/assets/img/play.png' , __FILE__ ));?>"></div>
			<div class="wp_sap_sliders"><input value="Border Width: 1px" type="text" class="wp_sap_border_width_value" /><div class="wp_sap_border_width"></div></div>
			<div class="wp_sap_sliders"><input value="Border Radius: 5px" type="text" class="wp_sap_border_radius_value" /><div class="wp_sap_border_radius"></div></div>
			<div class="wp_sap_sliders"><input value="Font Size: 12px" type="text" class="wp_sap_font_size_value" /><div class="wp_sap_font_size"></div></div>
			<div class="wp_sap_sliders"><input value="Padding: 10px" type="text" class="wp_sap_padding_value" /><div class="wp_sap_padding"></div></div>
			<div class="wp_sap_sliders"><input value="Line Height: 12px" type="text" class="wp_sap_line_height_value" /><div class="wp_sap_line_height"></div></div>
			<div class="wp_sap_sliders"><input value="Animation Speed: 0.5sec" type="text" style="width:150px;" class="wp_sap_animation_speed_value" /><div class="wp_sap_animation_speed"></div></div>
			<div class="text thankyou">Thank you message: <input type="text" name="thankyou" class="inputtext thankyou" value="Thank you for your feedback!" /></div>
			<div class="wp_sap_checkbox"><label class="text wp_sap_tooltip" style="width: 200px;" title="Enable if you want to display the survey on the entire website"><input type="checkbox" name="global_survey" class="inputtext global_survey" checked="true" value="1" /> Global Survey</label></div>
			<div class="wp_sap_checkbox"><label class="text wp_sap_tooltip" title="Lock the screen with a transparent background" style="width: 200px;"><input type="checkbox" name="lock_bg" class="inputtext lock_bg" value="0" /> Lock Screen</label></div>
			<div class="wp_sap_checkbox"><label class="text wp_sap_tooltip" title="Users can close the survey" style="width: 200px;"><input type="checkbox" name="closeable" class="inputtext closeable" value="0" /> Closeable</label></div>
			<div class="wp_sap_checkbox"><label class="text wp_sap_tooltip" title="The survey will appear when the user scrolled down at the bottom of the page" style="width: 200px;"><input type="checkbox" name="atbottom" class="inputtext atbottom" value="0" /> Display at bottom</label></div>
			</fieldset>
			<div style="clear:both;"></div>
			<div class="form-area"><a class="add_question button button-primary button-small">Add New Question</a></div>
			<div style="clear:both;"></div>
			<input type="hidden" name="survey_id" value="" />
		<div id="new_questions">
		<div class="group">
		<h3>1. question</h3>
		<div class="one_question" id="question_section1">
		<div class="left_half">
		<div id="question_1">
			<p>Question:&nbsp; <input type="text" name="question[]" id="question1" style="width: 75%;" class="question_text" onclick="if (this.value=='Was this information helpful?') this.value=''" value="Was this information helpful?" placeholder="Type your question here" /></p>
			<span>
			<p>1. answer: <input type="text" name="answer[]" class="answer" id="answer1" style="width: 50%;" value="Yes" placeholder="yes" /><span id="answer_count1" class="answer_count">0 - 0%</span></p>
			<p>2. answer: <input type="text" name="answer[]" class="answer" id="answer2" style="width: 50%;" value="No" placeholder="no" /><span id="answer_count2" class="answer_count">0 - 0%</span><a class="add_answer"><img class="wp_sap_tooltip" title="Add New Answer" src="<?php print(plugins_url( '/assets/img/add.png' , __FILE__ ));?>"></a></p>
			</span>
		</div>
		</div>
		<div class="right_half">
		</div>
		</div>
		</div>
		</div>
		<div style="clear:both;"></div>
		<div>
			<br><span><input type="submit" name="delete_survey" class="delete_survey button" value="DELETE"></span><span><input type="submit" name="save_survey" class="save_survey button" value="SAVE"></span><span><input type="submit" name="reset_survey" class="reset_survey button" value="RESET"></span><span class="survey_error_span"></span>
		</div>
	</div>
	</div>
			<p>    
			<a id="add_new_survey"></a>
			<div id="wp_sap_accordion">
				<?php
				$surveys = $this->wpdb->get_results("SELECT * FROM ".$this->wpdb->prefix."wp_sap_surveys ORDER BY autoid DESC");
				foreach($surveys as $sv)
				{
					$options = json_decode(stripslashes($sv->options));
					if ($sv->global==1) $global_opt = "checked";
					else $global_opt = "";
					if ($options[13]==1) $opt_13 = "checked";
					else $opt_13 = "";
					if ($options[14]==1) $opt_14 = "checked";
					else $opt_14 = "";
					if ($options[15]==1) $opt_15 = "checked";
					else $opt_15 = "";
					if ($sv->start_time!='0000-00-00 00:00:00') $thisstart_time = $this->get_date_datetime($sv->start_time);
					else $thisstart_time = $sv->start_time;
					if ($sv->expiry_time!='0000-00-00 00:00:00') $thisexpiry_time = $this->get_date_datetime($sv->expiry_time);
					else $thisexpiry_time = $sv->expiry_time;
				print('<h3 class="header_'.$sv->id.'">'.$sv->name.'</h3>
	  <div id="'.$sv->id.'"><div class="shortcode_section" style="float:right;font-size: 12px;">Shortcode: [survey id='.$sv->id.']</div>
			<fieldset>
			<legend>Survey Options</legend>
			<div class="text">Start time: <input type="text" name="start_time" class="datepicker inputtext start_time wp_sap_tooltip" title="Leave it blank to activate the survey immediately" value="'.str_replace("0000-00-00 00:00:00","",$thisstart_time).'" /></div>
			<div class="text">Expiry time: <input type="text" name="expiry_time" class="datepicker inputtext expiry_time wp_sap_tooltip" title="Never expire the survey when you leave this blank" value="'.str_replace("0000-00-00 00:00:00","",$thisexpiry_time).'" /></div>
			<div class="text">Display style:
			<select name="display_style" class="display_style">
				<option '.selected( $options[0], "bottom", false ).' value="bottom">Bottom</option>
				<option '.selected( $options[0], "top", false ).' value="top">Top</option>
				<option '.selected( $options[0], "center", false ).' value="center">Center</option>
			</select>
			</div> 
			<div class="text">Animation Easing:
			<select name="animation_easing" class="animation_easing">
							<option '.selected( $options[1], 'linear', false ).' value="linear">linear</option>
							<option '.selected( $options[1], 'swing', false ).' value="swing">swing</option>
							<option '.selected( $options[1], 'easeInQuad', false ).' value="easeInQuad">easeInQuad</option>
							<option '.selected( $options[1], 'easeOutQuad', false ).' value="easeOutQuad">easeOutQuad</option>
							<option '.selected( $options[1], 'easeInOutQuad', false ).' value="easeInOutQuad">easeInOutQuad</option>
							<option '.selected( $options[1], 'easeInCubic', false ).' value="easeInCubic">easeInCubic</option>
							<option '.selected( $options[1], 'easeOutCubic', false ).' value="easeOutCubic">easeOutCubic</option>
							<option '.selected( $options[1], 'easeInOutCubic', false ).' value="easeInOutCubic">easeInOutCubic</option>
							<option '.selected( $options[1], 'easeInQuart', false ).' value="easeInQuart">easeInQuart</option>
							<option '.selected( $options[1], 'easeOutQuart', false ).' value="easeOutQuart">easeOutQuart</option>
							<option '.selected( $options[1], 'easeInOutQuart', false ).' value="easeInOutQuart">easeInOutQuart</option>
							<option '.selected( $options[1], 'easeInQuint', false ).' value="easeInQuint">easeInQuint</option>
							<option '.selected( $options[1], 'easeOutQuint', false ).' value="easeOutQuint">easeOutQuint</option>
							<option '.selected( $options[1], 'boteaseInOutQuinttom' ).' value="easeInOutQuint">easeInOutQuint</option>
							<option '.selected( $options[1], 'easeInExpo', false ).' value="easeInExpo">easeInExpo</option>
							<option '.selected( $options[1], 'easeOutExpo', false ).' value="easeOutExpo">easeOutExpo</option>
							<option '.selected( $options[1], 'easeInOutExpo', false ).' value="easeInOutExpo">easeInOutExpo</option>
							<option '.selected( $options[1], 'easeInSine', false ).' value="easeInSine">easeInSine</option>
							<option '.selected( $options[1], 'easeOutSine', false ).' value="easeOutSine">easeOutSine</option>
							<option '.selected( $options[1], 'easeInOutSine', false ).' value="easeInOutSine">easeInOutSine</option>
							<option '.selected( $options[1], 'easeInCirc', false ).' value="easeInCirc">easeInCirc</option>
							<option '.selected( $options[1], 'easeOutCirc', false ).' value="easeOutCirc">easeOutCirc</option>
							<option '.selected( $options[1], 'easeInOutCirc', false ).' value="easeInOutCirc">easeInOutCirc</option>
							<option '.selected( $options[1], 'easeInElastic', false ).' value="easeInElastic">easeInElastic</option>
							<option '.selected( $options[1], 'easeOutElastic', false ).' value="easeOutElastic">easeOutElastic</option>
							<option '.selected( $options[1], 'easeInOutElastic', false ).' value="easeInOutElastic">easeInOutElastic</option>
							<option '.selected( $options[1], 'easeInBack', false ).' value="easeInBack">easeInBack</option>
							<option '.selected( $options[1], 'easeOutBack', false ).' value="easeOutBack">easeOutBack</option>
							<option '.selected( $options[1], 'easeInOutBack', false ).' value="easeInOutBack">easeInOutBack</option>
							<option '.selected( $options[1], 'easeInBounce', false ).' value="easeInBounce">easeInBounce</option>
							<option '.selected( $options[1], 'easeOutBounce', false ).' value="easeOutBounce">easeOutBounce</option>
							<option '.selected( $options[1], 'easeInOutBounce', false ).' value="easeInOutBounce">easeInOutBounce</option>
			</select>
			</div> 
			<div class="text">Font Family: <select name="font_family" class="font_family">
							<option '.selected( $options[2], '', false ).' value="">Default</option>
							<option '.selected( $options[2], 'ABeeZee', false ).' value="ABeeZee">ABeeZee</option>
							<option '.selected( $options[2], 'Abel', false ).' value="Abel">Abel</option>
							<option '.selected( $options[2], 'Abril Fatface', false ).' value="Abril Fatface">Abril Fatface</option>
							<option '.selected( $options[2], 'Aclonica', false ).' value="Aclonica">Aclonica</option>
							<option '.selected( $options[2], 'Acme', false ).' value="Acme">Acme</option>
							<option '.selected( $options[2], 'Actor', false ).' value="Actor">Actor</option>
							<option '.selected( $options[2], 'Adamina', false ).' value="Adamina">Adamina</option>
							<option '.selected( $options[2], 'Advent Pro', false ).' value="Advent Pro">Advent Pro</option>
							<option '.selected( $options[2], 'Aguafina Script', false ).' value="Aguafina Script">Aguafina Script</option>
							<option '.selected( $options[2], 'Akronim', false ).' value="Akronim">Akronim</option>
							<option '.selected( $options[2], 'Aladin', false ).' value="Aladin">Aladin</option>
							<option '.selected( $options[2], 'Aldrich', false ).' value="Aldrich">Aldrich</option>
							<option '.selected( $options[2], 'Alef', false ).' value="Alef">Alef</option>
							<option '.selected( $options[2], 'Alegreya', false ).' value="Alegreya">Alegreya</option>
							<option '.selected( $options[2], 'Alegreya SC', false ).' value="Alegreya SC">Alegreya SC</option>
							<option '.selected( $options[2], 'Alex Brush', false ).' value="Alex Brush">Alex Brush</option>
							<option '.selected( $options[2], 'Alfa Slab One', false ).' value="Alfa Slab One">Alfa Slab One</option>
							<option '.selected( $options[2], 'Alice', false ).' value="Alice">Alice</option>
							<option '.selected( $options[2], 'Alike', false ).' value="Alike">Alike</option>
							<option '.selected( $options[2], 'Alike Angular', false ).' value="Alike Angular">Alike Angular</option>
							<option '.selected( $options[2], 'Allan', false ).' value="Allan">Allan</option>
							<option '.selected( $options[2], 'Allerta', false ).' value="Allerta">Allerta</option>
							<option '.selected( $options[2], 'Allerta Stencil', false ).' value="Allerta Stencil">Allerta Stencil</option>
							<option '.selected( $options[2], 'Allura', false ).' value="Allura">Allura</option>
							<option '.selected( $options[2], 'Almendra', false ).' value="Almendra">Almendra</option>
							<option '.selected( $options[2], 'Almendra Display', false ).' value="Almendra Display">Almendra Display</option>
							<option '.selected( $options[2], 'Almendra SC', false ).' value="Almendra SC">Almendra SC</option>
							<option '.selected( $options[2], 'Amarante', false ).' value="Amarante">Amarante</option>
							<option '.selected( $options[2], 'Amaranth', false ).' value="Amaranth">Amaranth</option>
							<option '.selected( $options[2], 'Amatic SC', false ).' value="Amatic SC">Amatic SC</option>
							<option '.selected( $options[2], 'Amethysta', false ).' value="Amethysta">Amethysta</option>
							<option '.selected( $options[2], 'Anaheim', false ).' value="Anaheim">Anaheim</option>
							<option '.selected( $options[2], 'Andada', false ).' value="Andada">Andada</option>
							<option '.selected( $options[2], 'Andika', false ).' value="Andika">Andika</option>
							<option '.selected( $options[2], 'Angkor', false ).' value="Angkor">Angkor</option>
							<option '.selected( $options[2], 'Annie Use Your Telescope', false ).' value="Annie Use Your Telescope">Annie Use Your Telescope</option>
							<option '.selected( $options[2], 'Anonymous Pro', false ).' value="Anonymous Pro">Anonymous Pro</option>
							<option '.selected( $options[2], 'Antic', false ).' value="Antic">Antic</option>
							<option '.selected( $options[2], 'Antic Didone', false ).' value="Antic Didone">Antic Didone</option>
							<option '.selected( $options[2], 'Antic Slab', false ).' value="Antic Slab">Antic Slab</option>
							<option '.selected( $options[2], 'Anton', false ).' value="Anton">Anton</option>
							<option '.selected( $options[2], 'Arapey', false ).' value="Arapey">Arapey</option>
							<option '.selected( $options[2], 'Arbutus', false ).' value="Arbutus">Arbutus</option>
							<option '.selected( $options[2], 'Arbutus Slab', false ).' value="Arbutus Slab">Arbutus Slab</option>
							<option '.selected( $options[2], 'Architects Daughter', false ).' value="Architects Daughter">Architects Daughter</option>
							<option '.selected( $options[2], 'Archivo Black', false ).' value="Archivo Black">Archivo Black</option>
							<option '.selected( $options[2], 'Archivo Narrow', false ).' value="Archivo Narrow">Archivo Narrow</option>
							<option '.selected( $options[2], 'Arimo', false ).' value="Arimo">Arimo</option>
							<option '.selected( $options[2], 'Arizonia', false ).' value="Arizonia">Arizonia</option>
							<option '.selected( $options[2], 'Armata', false ).' value="Armata">Armata</option>
							<option '.selected( $options[2], 'Artifika', false ).' value="Artifika">Artifika</option>
							<option '.selected( $options[2], 'Arvo', false ).' value="Arvo">Arvo</option>
							<option '.selected( $options[2], 'Asap', false ).' value="Asap">Asap</option>
							<option '.selected( $options[2], 'Asset', false ).' value="Asset">Asset</option>
							<option '.selected( $options[2], 'Astloch', false ).' value="Astloch">Astloch</option>
							<option '.selected( $options[2], 'Asul', false ).' value="Asul">Asul</option>
							<option '.selected( $options[2], 'Atomic Age', false ).' value="Atomic Age">Atomic Age</option>
							<option '.selected( $options[2], 'Aubrey', false ).' value="Aubrey">Aubrey</option>
							<option '.selected( $options[2], 'Audiowide', false ).' value="Audiowide">Audiowide</option>
							<option '.selected( $options[2], 'Autour One', false ).' value="Autour One">Autour One</option>
							<option '.selected( $options[2], 'Average', false ).' value="Average">Average</option>
							<option '.selected( $options[2], 'Average Sans', false ).' value="Average Sans">Average Sans</option>
							<option '.selected( $options[2], 'Averia Gruesa Libre', false ).' value="Averia Gruesa Libre">Averia Gruesa Libre</option>
							<option '.selected( $options[2], 'Averia Libre', false ).' value="Averia Libre">Averia Libre</option>
							<option '.selected( $options[2], 'Averia Sans Libre', false ).' value="Averia Sans Libre">Averia Sans Libre</option>
							<option '.selected( $options[2], 'Averia Serif Libre', false ).' value="Averia Serif Libre">Averia Serif Libre</option>
							<option '.selected( $options[2], 'Bad Script', false ).' value="Bad Script">Bad Script</option>
							<option '.selected( $options[2], 'Balthazar', false ).' value="Balthazar">Balthazar</option>
							<option '.selected( $options[2], 'Bangers', false ).' value="Bangers">Bangers</option>
							<option '.selected( $options[2], 'Basic', false ).' value="Basic">Basic</option>
							<option '.selected( $options[2], 'Battambang', false ).' value="Battambang">Battambang</option>
							<option '.selected( $options[2], 'Baumans', false ).' value="Baumans">Baumans</option>
							<option '.selected( $options[2], 'Bayon', false ).' value="Bayon">Bayon</option>
							<option '.selected( $options[2], 'Belgrano', false ).' value="Belgrano">Belgrano</option>
							<option '.selected( $options[2], 'Belleza', false ).' value="Belleza">Belleza</option>
							<option '.selected( $options[2], 'BenchNine', false ).' value="BenchNine">BenchNine</option>
							<option '.selected( $options[2], 'Bentham', false ).' value="Bentham">Bentham</option>
							<option '.selected( $options[2], 'Berkshire Swash', false ).' value="Berkshire Swash">Berkshire Swash</option>
							<option '.selected( $options[2], 'Bevan', false ).' value="Bevan">Bevan</option>
							<option '.selected( $options[2], 'Bigelow Rules', false ).' value="Bigelow Rules">Bigelow Rules</option>
							<option '.selected( $options[2], 'Bigshot One', false ).' value="Bigshot One">Bigshot One</option>
							<option '.selected( $options[2], 'Bilbo', false ).' value="Bilbo">Bilbo</option>
							<option '.selected( $options[2], 'Bilbo Swash Caps', false ).' value="Bilbo Swash Caps">Bilbo Swash Caps</option>
							<option '.selected( $options[2], 'Bitter', false ).' value="Bitter">Bitter</option>
							<option '.selected( $options[2], 'Black Ops One', false ).' value="Black Ops One">Black Ops One</option>
							<option '.selected( $options[2], 'Bokor', false ).' value="Bokor">Bokor</option>
							<option '.selected( $options[2], 'Bonbon', false ).' value="Bonbon">Bonbon</option>
							<option '.selected( $options[2], 'Boogaloo', false ).' value="Boogaloo">Boogaloo</option>
							<option '.selected( $options[2], 'Bowlby One', false ).' value="Bowlby One">Bowlby One</option>
							<option '.selected( $options[2], 'Bowlby One SC', false ).' value="Bowlby One SC">Bowlby One SC</option>
							<option '.selected( $options[2], 'Brawler', false ).' value="Brawler">Brawler</option>
							<option '.selected( $options[2], 'Bree Serif', false ).' value="Bree Serif">Bree Serif</option>
							<option '.selected( $options[2], 'Bubblegum Sans', false ).' value="Bubblegum Sans">Bubblegum Sans</option>
							<option '.selected( $options[2], 'Bubbler One', false ).' value="Bubbler One">Bubbler One</option>
							<option '.selected( $options[2], 'Buenard', false ).' value="Buenard">Buenard</option>
							<option '.selected( $options[2], 'Butcherman', false ).' value="Butcherman">Butcherman</option>
							<option '.selected( $options[2], 'Butterfly Kids', false ).' value="Butterfly Kids">Butterfly Kids</option>
							<option '.selected( $options[2], 'Cabin', false ).' value="Cabin">Cabin</option>
							<option '.selected( $options[2], 'Cabin Condensed', false ).' value="Cabin Condensed">Cabin Condensed</option>
							<option '.selected( $options[2], 'Cabin Sketch', false ).' value="Cabin Sketch">Cabin Sketch</option>
							<option '.selected( $options[2], 'Caesar Dressing', false ).' value="Caesar Dressing">Caesar Dressing</option>
							<option '.selected( $options[2], 'Cagliostro', false ).' value="Cagliostro">Cagliostro</option>
							<option '.selected( $options[2], 'Calligraffitti', false ).' value="Calligraffitti">Calligraffitti</option>
							<option '.selected( $options[2], 'ABeeCamboZee', false ).' value="Cambo">Cambo</option>
							<option '.selected( $options[2], 'Candal', false ).' value="Candal">Candal</option>
							<option '.selected( $options[2], 'Cantarell', false ).' value="Cantarell">Cantarell</option>
							<option '.selected( $options[2], 'Cantata One', false ).' value="Cantata One">Cantata One</option>
							<option '.selected( $options[2], 'Cantora One', false ).' value="Cantora One">Cantora One</option>
							<option '.selected( $options[2], 'Capriola', false ).' value="Capriola">Capriola</option>
							<option '.selected( $options[2], 'Cardo', false ).' value="Cardo">Cardo</option>
							<option '.selected( $options[2], 'Carme', false ).' value="Carme">Carme</option>
							<option '.selected( $options[2], 'Carrois Gothic', false ).' value="Carrois Gothic">Carrois Gothic</option>
							<option '.selected( $options[2], 'Carrois Gothic SC', false ).' value="Carrois Gothic SC">Carrois Gothic SC</option>
							<option '.selected( $options[2], 'Carter One', false ).' value="Carter One">Carter One</option>
							<option '.selected( $options[2], 'Caudex', false ).' value="Caudex">Caudex</option>
							<option '.selected( $options[2], 'Cedarville Cursive', false ).' value="Cedarville Cursive">Cedarville Cursive</option>
							<option '.selected( $options[2], 'Ceviche One', false ).' value="Ceviche One">Ceviche One</option>
							<option '.selected( $options[2], 'Changa One', false ).' value="Changa One">Changa One</option>
							<option '.selected( $options[2], 'Chango', false ).' value="Chango">Chango</option>
							<option '.selected( $options[2], 'Chau Philomene One', false ).' value="Chau Philomene One">Chau Philomene One</option>
							<option '.selected( $options[2], 'Chela One', false ).' value="Chela One">Chela One</option>
							<option '.selected( $options[2], 'Chelsea Market', false ).' value="Chelsea Market">Chelsea Market</option>
							<option '.selected( $options[2], 'Chenla', false ).' value="Chenla">Chenla</option>
							<option '.selected( $options[2], 'Cherry Cream Soda', false ).' value="Cherry Cream Soda">Cherry Cream Soda</option>
							<option '.selected( $options[2], 'Cherry Swash', false ).' value="Cherry Swash">Cherry Swash</option>
							<option '.selected( $options[2], 'Chewy', false ).' value="Chewy">Chewy</option>
							<option '.selected( $options[2], 'Chicle', false ).' value="Chicle">Chicle</option>
							<option '.selected( $options[2], 'Chivo', false ).' value="Chivo">Chivo</option>
							<option '.selected( $options[2], 'Cinzel', false ).' value="Cinzel">Cinzel</option>
							<option '.selected( $options[2], 'Cinzel Decorative', false ).' value="Cinzel Decorative">Cinzel Decorative</option>
							<option '.selected( $options[2], 'Clicker Script', false ).' value="Clicker Script">Clicker Script</option>
							<option '.selected( $options[2], 'Coda', false ).' value="Coda">Coda</option>
							<option '.selected( $options[2], 'Coda Caption:800', false ).' value="Coda Caption:800">Coda Caption</option>
							<option '.selected( $options[2], 'Codystar', false ).' value="Codystar">Codystar</option>
							<option '.selected( $options[2], 'Combo', false ).' value="Combo">Combo</option>
							<option '.selected( $options[2], 'Comfortaa', false ).' value="Comfortaa">Comfortaa</option>
							<option '.selected( $options[2], 'Coming Soon', false ).' value="Coming Soon">Coming Soon</option>
							<option '.selected( $options[2], 'Concert One', false ).' value="Concert One">Concert One</option>
							<option '.selected( $options[2], 'Condiment', false ).' value="Condiment">Condiment</option>
							<option '.selected( $options[2], 'Content', false ).' value="Content">Content</option>
							<option '.selected( $options[2], 'Contrail One', false ).' value="Contrail One">Contrail One</option>
							<option '.selected( $options[2], 'Convergence', false ).' value="Convergence">Convergence</option>
							<option '.selected( $options[2], 'Cookie', false ).' value="Cookie">Cookie</option>
							<option '.selected( $options[2], 'Copse', false ).' value="Copse">Copse</option>
							<option '.selected( $options[2], 'Corben', false ).' value="Corben">Corben</option>
							<option '.selected( $options[2], 'Courgette', false ).' value="Courgette">Courgette</option>
							<option '.selected( $options[2], 'Cousine', false ).' value="Cousine">Cousine</option>
							<option '.selected( $options[2], 'Coustard', false ).' value="Coustard">Coustard</option>
							<option '.selected( $options[2], 'Covered By Your Grace', false ).' value="Covered By Your Grace">Covered By Your Grace</option>
							<option '.selected( $options[2], 'Crafty Girls', false ).' value="Crafty Girls">Crafty Girls</option>
							<option '.selected( $options[2], 'Creepster', false ).' value="Creepster">Creepster</option>
							<option '.selected( $options[2], 'Crete Round', false ).' value="Crete Round">Crete Round</option>
							<option '.selected( $options[2], 'Crimson Text', false ).' value="Crimson Text">Crimson Text</option>
							<option '.selected( $options[2], 'Croissant One', false ).' value="Croissant One">Croissant One</option>
							<option '.selected( $options[2], 'Crushed', false ).' value="Crushed">Crushed</option>
							<option '.selected( $options[2], 'Cuprum', false ).' value="Cuprum">Cuprum</option>
							<option '.selected( $options[2], 'Cutive', false ).' value="Cutive">Cutive</option>
							<option '.selected( $options[2], 'Cutive Mono', false ).' value="Cutive Mono">Cutive Mono</option>
							<option '.selected( $options[2], 'Damion', false ).' value="Damion">Damion</option>
							<option '.selected( $options[2], 'Dancing Script', false ).' value="Dancing Script">Dancing Script</option>
							<option '.selected( $options[2], 'Dangrek', false ).' value="Dangrek">Dangrek</option>
							<option '.selected( $options[2], 'Dawning of a New Day', false ).' value="Dawning of a New Day">Dawning of a New Day</option>
							<option '.selected( $options[2], 'Days One', false ).' value="Days One">Days One</option>
							<option '.selected( $options[2], 'Delius', false ).' value="Delius">Delius</option>
							<option '.selected( $options[2], 'Delius Swash Caps', false ).' value="Delius Swash Caps">Delius Swash Caps</option>
							<option '.selected( $options[2], 'Delius Unicase', false ).' value="Delius Unicase">Delius Unicase</option>
							<option '.selected( $options[2], 'Della Respira', false ).' value="Della Respira">Della Respira</option>
							<option '.selected( $options[2], 'Denk One', false ).' value="Denk One">Denk One</option>
							<option '.selected( $options[2], 'Devonshire', false ).' value="Devonshire">Devonshire</option>
							<option '.selected( $options[2], 'Didact Gothic', false ).' value="Didact Gothic">Didact Gothic</option>
							<option '.selected( $options[2], 'Diplomata', false ).' value="Diplomata">Diplomata</option>
							<option '.selected( $options[2], 'Diplomata SC', false ).' value="Diplomata SC">Diplomata SC</option>
							<option '.selected( $options[2], 'Domine', false ).' value="Domine">Domine</option>
							<option '.selected( $options[2], 'Donegal One', false ).' value="Donegal One">Donegal One</option>
							<option '.selected( $options[2], 'Doppio One', false ).' value="Doppio One">Doppio One</option>
							<option '.selected( $options[2], 'Dorsa', false ).' value="Dorsa">Dorsa</option>
							<option '.selected( $options[2], 'Dosis', false ).' value="Dosis">Dosis</option>
							<option '.selected( $options[2], 'Dr Sugiyama', false ).' value="Dr Sugiyama">Dr Sugiyama</option>
							<option '.selected( $options[2], 'Droid Sans', false ).' value="Droid Sans">Droid Sans</option>
							<option '.selected( $options[2], 'Droid Sans Mono', false ).' value="Droid Sans Mono">Droid Sans Mono</option>
							<option '.selected( $options[2], 'Droid Serif', false ).' value="Droid Serif">Droid Serif</option>
							<option '.selected( $options[2], 'Duru Sans', false ).' value="Duru Sans">Duru Sans</option>
							<option '.selected( $options[2], 'Dynalight', false ).' value="Dynalight">Dynalight</option>
							<option '.selected( $options[2], 'Eagle Lake', false ).' value="Eagle Lake">Eagle Lake</option>
							<option '.selected( $options[2], 'Eater', false ).' value="Eater">Eater</option>
							<option '.selected( $options[2], 'EB Garamond', false ).' value="EB Garamond">EB Garamond</option>
							<option '.selected( $options[2], 'Economica', false ).' value="Economica">Economica</option>
							<option '.selected( $options[2], 'Electrolize', false ).' value="Electrolize">Electrolize</option>
							<option '.selected( $options[2], 'Elsie', false ).' value="Elsie">Elsie</option>
							<option '.selected( $options[2], 'Elsie Swash Caps', false ).' value="Elsie Swash Caps">Elsie Swash Caps</option>
							<option '.selected( $options[2], 'Emblema One', false ).' value="Emblema One">Emblema One</option>
							<option '.selected( $options[2], 'Emilys Candy', false ).' value="Emilys Candy">Emilys Candy</option>
							<option '.selected( $options[2], 'Engagement', false ).' value="Engagement">Engagement</option>
							<option '.selected( $options[2], 'Englebert', false ).' value="Englebert">Englebert</option>
							<option '.selected( $options[2], 'Enriqueta', false ).' value="Enriqueta">Enriqueta</option>
							<option '.selected( $options[2], 'Erica One', false ).' value="Erica One">Erica One</option>
							<option '.selected( $options[2], 'Esteban', false ).' value="Esteban">Esteban</option>
							<option '.selected( $options[2], 'Euphoria Script', false ).' value="Euphoria Script">Euphoria Script</option>
							<option '.selected( $options[2], 'Ewert', false ).' value="Ewert">Ewert</option>
							<option '.selected( $options[2], 'Exo', false ).' value="Exo">Exo</option>
							<option '.selected( $options[2], 'Expletus Sans', false ).' value="Expletus Sans">Expletus Sans</option>
							<option '.selected( $options[2], 'Fanwood Text', false ).' value="Fanwood Text">Fanwood Text</option>
							<option '.selected( $options[2], 'Fascinate', false ).' value="Fascinate">Fascinate</option>
							<option '.selected( $options[2], 'Fascinate Inline', false ).' value="Fascinate Inline">Fascinate Inline</option>
							<option '.selected( $options[2], 'Faster One', false ).' value="Faster One">Faster One</option>
							<option '.selected( $options[2], 'Fasthand', false ).' value="Fasthand">Fasthand</option>
							<option '.selected( $options[2], 'Fauna One', false ).' value="Fauna One">Fauna One</option>
							<option '.selected( $options[2], 'Federant', false ).' value="Federant">Federant</option>
							<option '.selected( $options[2], 'Federo', false ).' value="Federo">Federo</option>
							<option '.selected( $options[2], 'Felipa', false ).' value="Felipa">Felipa</option>
							<option '.selected( $options[2], 'Fenix', false ).' value="Fenix">Fenix</option>
							<option '.selected( $options[2], 'Finger Paint', false ).' value="Finger Paint">Finger Paint</option>
							<option '.selected( $options[2], 'Fjalla One', false ).' value="Fjalla One">Fjalla One</option>
							<option '.selected( $options[2], 'Fjord One', false ).' value="Fjord One">Fjord One</option>
							<option '.selected( $options[2], 'Flamenco', false ).' value="Flamenco">Flamenco</option>
							<option '.selected( $options[2], 'Flavors', false ).' value="Flavors">Flavors</option>
							<option '.selected( $options[2], 'Fondamento', false ).' value="Fondamento">Fondamento</option>
							<option '.selected( $options[2], 'Fontdiner Swanky', false ).' value="Fontdiner Swanky">Fontdiner Swanky</option>
							<option '.selected( $options[2], 'Forum', false ).' value="Forum">Forum</option>
							<option '.selected( $options[2], 'Francois One', false ).' value="Francois One">Francois One</option>
							<option '.selected( $options[2], 'Freckle Face', false ).' value="Freckle Face">Freckle Face</option>
							<option '.selected( $options[2], 'Fredericka the Great', false ).' value="Fredericka the Great">Fredericka the Great</option>
							<option '.selected( $options[2], 'Fredoka One', false ).' value="Fredoka One">Fredoka One</option>
							<option '.selected( $options[2], 'Freehand', false ).' value="Freehand">Freehand</option>
							<option '.selected( $options[2], 'Fresca', false ).' value="Fresca">Fresca</option>
							<option '.selected( $options[2], 'Frijole', false ).' value="Frijole">Frijole</option>
							<option '.selected( $options[2], 'Fruktur', false ).' value="Fruktur">Fruktur</option>
							<option '.selected( $options[2], 'Fugaz One', false ).' value="Fugaz One">Fugaz One</option>
							<option '.selected( $options[2], 'Gabriela', false ).' value="Gabriela">Gabriela</option>
							<option '.selected( $options[2], 'Gafata', false ).' value="Gafata">Gafata</option>
							<option '.selected( $options[2], 'Galdeano', false ).' value="Galdeano">Galdeano</option>
							<option '.selected( $options[2], 'Galindo', false ).' value="Galindo">Galindo</option>
							<option '.selected( $options[2], 'Gentium Basic', false ).' value="Gentium Basic">Gentium Basic</option>
							<option '.selected( $options[2], 'Gentium Book Basic', false ).' value="Gentium Book Basic">Gentium Book Basic</option>
							<option '.selected( $options[2], 'Geo', false ).' value="Geo">Geo</option>
							<option '.selected( $options[2], 'Geostar', false ).' value="Geostar">Geostar</option>
							<option '.selected( $options[2], 'Geostar Fill', false ).' value="Geostar Fill">Geostar Fill</option>
							<option '.selected( $options[2], 'Germania One', false ).' value="Germania One">Germania One</option>
							<option '.selected( $options[2], 'GFS Didot', false ).' value="GFS Didot">GFS Didot</option>
							<option '.selected( $options[2], 'GFS Neohellenic', false ).' value="GFS Neohellenic">GFS Neohellenic</option>
							<option '.selected( $options[2], 'GFS Neohellenic', false ).' value="c">Gilda Display</option>
							<option '.selected( $options[2], 'Give You Glory', false ).' value="Give You Glory">Give You Glory</option>
							<option '.selected( $options[2], 'Glass Antiqua', false ).' value="Glass Antiqua">Glass Antiqua</option>
							<option '.selected( $options[2], 'Glegoo', false ).' value="Glegoo">Glegoo</option>
							<option '.selected( $options[2], 'Gloria Hallelujah', false ).' value="Gloria Hallelujah">Gloria Hallelujah</option>
							<option '.selected( $options[2], 'Goblin One', false ).' value="Goblin One">Goblin One</option>
							<option '.selected( $options[2], 'Gochi Hand', false ).' value="Gochi Hand">Gochi Hand</option>
							<option '.selected( $options[2], 'Gorditas', false ).' value="Gorditas">Gorditas</option>
							<option '.selected( $options[2], 'Goudy Bookletter 1911', false ).' value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
							<option '.selected( $options[2], 'Graduate', false ).' value="Graduate">Graduate</option>
							<option '.selected( $options[2], 'Grand Hotel', false ).' value="Grand Hotel">Grand Hotel</option>
							<option '.selected( $options[2], 'Gravitas One', false ).' value="Gravitas One">Gravitas One</option>
							<option '.selected( $options[2], 'Great Vibes', false ).' value="Great Vibes">Great Vibes</option>
							<option '.selected( $options[2], 'Griffy', false ).' value="Griffy">Griffy</option>
							<option '.selected( $options[2], 'Gruppo', false ).' value="Gruppo">Gruppo</option>
							<option '.selected( $options[2], 'Gudea', false ).' value="Gudea">Gudea</option>
							<option '.selected( $options[2], 'Habibi', false ).' value="Habibi">Habibi</option>
							<option '.selected( $options[2], 'Hammersmith One', false ).' value="Hammersmith One">Hammersmith One</option>
							<option '.selected( $options[2], 'Hanalei', false ).' value="Hanalei">Hanalei</option>
							<option '.selected( $options[2], 'Hanalei Fill', false ).' value="Hanalei Fill">Hanalei Fill</option>
							<option '.selected( $options[2], 'Handlee', false ).' value="Handlee">Handlee</option>
							<option '.selected( $options[2], 'Hanuman', false ).' value="Hanuman">Hanuman</option>
							<option '.selected( $options[2], 'Happy Monkey', false ).' value="Happy Monkey">Happy Monkey</option>
							<option '.selected( $options[2], 'Headland One', false ).' value="Headland One">Headland One</option>
							<option '.selected( $options[2], 'Henny Penny', false ).' value="Henny Penny">Henny Penny</option>
							<option '.selected( $options[2], 'Herr Von Muellerhoff', false ).' value="Herr Von Muellerhoff">Herr Von Muellerhoff</option>
							<option '.selected( $options[2], 'Holtwood One SC', false ).' value="Holtwood One SC">Holtwood One SC</option>
							<option '.selected( $options[2], 'Homemade Apple', false ).' value="Homemade Apple">Homemade Apple</option>
							<option '.selected( $options[2], 'Homenaje', false ).' value="Homenaje">Homenaje</option>
							<option '.selected( $options[2], 'Iceberg', false ).' value="Iceberg">Iceberg</option>
							<option '.selected( $options[2], 'Iceland', false ).' value="Iceland">Iceland</option>
							<option '.selected( $options[2], 'IM Fell Double Pica', false ).' value="IM Fell Double Pica">IM Fell Double Pica</option>
							<option '.selected( $options[2], 'IM Fell Double Pica SC', false ).' value="IM Fell Double Pica SC">IM Fell Double Pica SC</option>
							<option '.selected( $options[2], 'IM Fell DW Pica', false ).' value="IM Fell DW Pica">IM Fell DW Pica</option>
							<option '.selected( $options[2], 'IM Fell DW Pica SC', false ).' value="IM Fell DW Pica SC">IM Fell DW Pica SC</option>
							<option '.selected( $options[2], 'IM Fell English', false ).' value="IM Fell English">IM Fell English</option>
							<option '.selected( $options[2], 'IM Fell English SC', false ).' value="IM Fell English SC">IM Fell English SC</option>
							<option '.selected( $options[2], 'IM Fell French Canon', false ).' value="IM Fell French Canon">IM Fell French Canon</option>
							<option '.selected( $options[2], 'IM Fell French Canon SC', false ).' value="IM Fell French Canon SC">IM Fell French Canon SC</option>
							<option '.selected( $options[2], 'IM Fell Great Primer', false ).' value="IM Fell Great Primer">IM Fell Great Primer</option>
							<option '.selected( $options[2], 'IM Fell Great Primer SC', false ).' value="IM Fell Great Primer SC">IM Fell Great Primer SC</option>
							<option '.selected( $options[2], 'Imprima', false ).' value="Imprima">Imprima</option>
							<option '.selected( $options[2], 'Inconsolata', false ).' value="Inconsolata">Inconsolata</option>
							<option '.selected( $options[2], 'Inder', false ).' value="Inder">Inder</option>
							<option '.selected( $options[2], 'Indie Flower', false ).' value="Indie Flower">Indie Flower</option>
							<option '.selected( $options[2], 'Inika', false ).' value="Inika">Inika</option>
							<option '.selected( $options[2], 'Irish Grover', false ).' value="Irish Grover">Irish Grover</option>
							<option '.selected( $options[2], 'Istok Web', false ).' value="Istok Web">Istok Web</option>
							<option '.selected( $options[2], 'Italiana', false ).' value="Italiana">Italiana</option>
							<option '.selected( $options[2], 'Italianno', false ).' value="Italianno">Italianno</option>
							<option '.selected( $options[2], 'Jacques Francois', false ).' value="Jacques Francois">Jacques Francois</option>
							<option '.selected( $options[2], 'Jacques Francois Shadow', false ).' value="Jacques Francois Shadow">Jacques Francois Shadow</option>
							<option '.selected( $options[2], 'Jim Nightshade', false ).' value="Jim Nightshade">Jim Nightshade</option>
							<option '.selected( $options[2], 'Jockey One', false ).' value="Jockey One">Jockey One</option>
							<option '.selected( $options[2], 'Jolly Lodger', false ).' value="Jolly Lodger">Jolly Lodger</option>
							<option '.selected( $options[2], 'Josefin Sans', false ).' value="Josefin Sans">Josefin Sans</option>
							<option '.selected( $options[2], 'Josefin Slab', false ).' value="Josefin Slab">Josefin Slab</option>
							<option '.selected( $options[2], 'Joti One', false ).' value="Joti One">Joti One</option>
							<option '.selected( $options[2], 'Judson', false ).' value="Judson">Judson</option>
							<option '.selected( $options[2], 'Julee', false ).' value="Julee">Julee</option>
							<option '.selected( $options[2], 'Julius Sans One', false ).' value="Julius Sans One">Julius Sans One</option>
							<option '.selected( $options[2], 'Junge', false ).' value="Junge">Junge</option>
							<option '.selected( $options[2], 'Jura', false ).' value="Jura">Jura</option>
							<option '.selected( $options[2], 'Just Another Hand', false ).' value="Just Another Hand">Just Another Hand</option>
							<option '.selected( $options[2], 'Just Me Again Down Here', false ).' value="Just Me Again Down Here">Just Me Again Down Here</option>
							<option '.selected( $options[2], 'Kameron', false ).' value="Kameron">Kameron</option>
							<option '.selected( $options[2], 'Karla', false ).' value="Karla">Karla</option>
							<option '.selected( $options[2], 'Kaushan Script', false ).' value="Kaushan Script">Kaushan Script</option>
							<option '.selected( $options[2], 'Kavoon', false ).' value="Kavoon">Kavoon</option>
							<option '.selected( $options[2], 'Keania One', false ).' value="Keania One">Keania One</option>
							<option '.selected( $options[2], 'Kelly Slab', false ).' value="Kelly Slab">Kelly Slab</option>
							<option '.selected( $options[2], 'Kenia', false ).' value="Kenia">Kenia</option>
							<option '.selected( $options[2], 'Khmer', false ).' value="Khmer">Khmer</option>
							<option '.selected( $options[2], 'Khmer', false ).' value="c">Kite One</option>
							<option '.selected( $options[2], 'Knewave', false ).' value="Knewave">Knewave</option>
							<option '.selected( $options[2], 'Kotta One', false ).' value="Kotta One">Kotta One</option>
							<option '.selected( $options[2], 'Koulen', false ).' value="Koulen">Koulen</option>
							<option '.selected( $options[2], 'Kranky', false ).' value="Kranky">Kranky</option>
							<option '.selected( $options[2], 'Kreon', false ).' value="Kreon">Kreon</option>
							<option '.selected( $options[2], 'Kristi', false ).' value="Kristi">Kristi</option>
							<option '.selected( $options[2], 'Krona One', false ).' value="Krona One">Krona One</option>
							<option '.selected( $options[2], 'La Belle Aurore', false ).' value="La Belle Aurore">La Belle Aurore</option>
							<option '.selected( $options[2], 'Lancelot', false ).' value="Lancelot">Lancelot</option>
							<option '.selected( $options[2], 'Lato', false ).' value="Lato">Lato</option>
							<option '.selected( $options[2], 'League Script', false ).' value="League Script">League Script</option>
							<option '.selected( $options[2], 'Leckerli One', false ).' value="Leckerli One">Leckerli One</option>
							<option '.selected( $options[2], 'Ledger', false ).' value="Ledger">Ledger</option>
							<option '.selected( $options[2], 'Lekton', false ).' value="Lekton">Lekton</option>
							<option '.selected( $options[2], 'Lemon', false ).' value="Lemon">Lemon</option>
							<option '.selected( $options[2], 'Libre Baskerville', false ).' value="Libre Baskerville">Libre Baskerville</option>
							<option '.selected( $options[2], 'Life Savers', false ).' value="Life Savers">Life Savers</option>
							<option '.selected( $options[2], 'Lilita One', false ).' value="Lilita One">Lilita One</option>
							<option '.selected( $options[2], 'Lily Script One', false ).' value="Lily Script One">Lily Script One</option>
							<option '.selected( $options[2], 'Limelight', false ).' value="Limelight">Limelight</option>
							<option '.selected( $options[2], 'Linden Hill', false ).' value="Linden Hill">Linden Hill</option>
							<option '.selected( $options[2], 'Lobster', false ).' value="Lobster">Lobster</option>
							<option '.selected( $options[2], 'Lobster Two', false ).' value="Lobster Two">Lobster Two</option>
							<option '.selected( $options[2], 'Londrina Outline', false ).' value="Londrina Outline">Londrina Outline</option>
							<option '.selected( $options[2], 'Londrina Shadow', false ).' value="Londrina Shadow">Londrina Shadow</option>
							<option '.selected( $options[2], 'Londrina Sketch', false ).' value="Londrina Sketch">Londrina Sketch</option>
							<option '.selected( $options[2], 'Londrina Solid', false ).' value="Londrina Solid">Londrina Solid</option>
							<option '.selected( $options[2], 'Lora', false ).' value="Lora">Lora</option>
							<option '.selected( $options[2], 'Love Ya Like A Sister', false ).' value="Love Ya Like A Sister">Love Ya Like A Sister</option>
							<option '.selected( $options[2], 'Loved by the King', false ).' value="Loved by the King">Loved by the King</option>
							<option '.selected( $options[2], 'Lovers Quarrel', false ).' value="Lovers Quarrel">Lovers Quarrel</option>
							<option '.selected( $options[2], 'Luckiest Guy', false ).' value="Luckiest Guy">Luckiest Guy</option>
							<option '.selected( $options[2], 'Lusitana', false ).' value="Lusitana">Lusitana</option>
							<option '.selected( $options[2], 'Lustria', false ).' value="Lustria">Lustria</option>
							<option '.selected( $options[2], 'Macondo', false ).' value="Macondo">Macondo</option>
							<option '.selected( $options[2], 'Macondo Swash Caps', false ).' value="Macondo Swash Caps">Macondo Swash Caps</option>
							<option '.selected( $options[2], 'ABeeMagraZee', false ).' value="Magra">Magra</option>
							<option '.selected( $options[2], 'Maiden Orange', false ).' value="Maiden Orange">Maiden Orange</option>
							<option '.selected( $options[2], 'Mako', false ).' value="Mako">Mako</option>
							<option '.selected( $options[2], 'Marcellus', false ).' value="Marcellus">Marcellus</option>
							<option '.selected( $options[2], 'Marcellus SC', false ).' value="Marcellus SC">Marcellus SC</option>
							<option '.selected( $options[2], 'Marck Script', false ).' value="Marck Script">Marck Script</option>
							<option '.selected( $options[2], 'Margarine', false ).' value="Margarine">Margarine</option>
							<option '.selected( $options[2], 'Marko One', false ).' value="Marko One">Marko One</option>
							<option '.selected( $options[2], 'Marmelad', false ).' value="Marmelad">Marmelad</option>
							<option '.selected( $options[2], 'Marvel', false ).' value="Marvel">Marvel</option>
							<option '.selected( $options[2], 'Mate', false ).' value="Mate">Mate</option>
							<option '.selected( $options[2], 'Mate SC', false ).' value="Mate SC">Mate SC</option>
							<option '.selected( $options[2], 'Maven Pro', false ).' value="Maven Pro">Maven Pro</option>
							<option '.selected( $options[2], 'McLaren', false ).' value="McLaren">McLaren</option>
							<option '.selected( $options[2], 'Meddon', false ).' value="Meddon">Meddon</option>
							<option '.selected( $options[2], 'MedievalSharp', false ).' value="MedievalSharp">MedievalSharp</option>
							<option '.selected( $options[2], 'Medula One', false ).' value="Medula One">Medula One</option>
							<option '.selected( $options[2], 'Megrim', false ).' value="Megrim">Megrim</option>
							<option '.selected( $options[2], 'Meie Script', false ).' value="Meie Script">Meie Script</option>
							<option '.selected( $options[2], 'Merienda', false ).' value="Merienda">Merienda</option>
							<option '.selected( $options[2], 'Merienda One', false ).' value="Merienda One">Merienda One</option>
							<option '.selected( $options[2], 'Merriweather', false ).' value="Merriweather">Merriweather</option>
							<option '.selected( $options[2], 'Merriweather Sans', false ).' value="Merriweather Sans">Merriweather Sans</option>
							<option '.selected( $options[2], 'Metal', false ).' value="Metal">Metal</option>
							<option '.selected( $options[2], 'Metal Mania', false ).' value="Metal Mania">Metal Mania</option>
							<option '.selected( $options[2], 'Metamorphous', false ).' value="Metamorphous">Metamorphous</option>
							<option '.selected( $options[2], 'Metrophobic', false ).' value="Metrophobic">Metrophobic</option>
							<option '.selected( $options[2], 'Michroma', false ).' value="Michroma">Michroma</option>
							<option '.selected( $options[2], 'Milonga', false ).' value="Milonga">Milonga</option>
							<option '.selected( $options[2], 'Miltonian', false ).' value="Miltonian">Miltonian</option>
							<option '.selected( $options[2], 'Miltonian Tattoo', false ).' value="Miltonian Tattoo">Miltonian Tattoo</option>
							<option '.selected( $options[2], 'Miniver', false ).' value="Miniver">Miniver</option>
							<option '.selected( $options[2], 'Miss Fajardose', false ).' value="Miss Fajardose">Miss Fajardose</option>
							<option '.selected( $options[2], 'Modern Antiqua', false ).' value="Modern Antiqua">Modern Antiqua</option>
							<option '.selected( $options[2], 'Molengo', false ).' value="Molengo">Molengo</option>
							<option '.selected( $options[2], 'Molle:400italic', false ).' value="Molle:400italic">Molle</option>
							<option '.selected( $options[2], 'Monda', false ).' value="Monda">Monda</option>
							<option '.selected( $options[2], 'Monofett', false ).' value="Monofett">Monofett</option>
							<option '.selected( $options[2], 'Monoton', false ).' value="Monoton">Monoton</option>
							<option '.selected( $options[2], 'Monsieur La Doulaise', false ).' value="Monsieur La Doulaise">Monsieur La Doulaise</option>
							<option '.selected( $options[2], 'Montaga', false ).' value="Montaga">Montaga</option>
							<option '.selected( $options[2], 'Montez', false ).' value="Montez">Montez</option>
							<option '.selected( $options[2], 'Montserrat', false ).' value="Montserrat">Montserrat</option>
							<option '.selected( $options[2], 'Montserrat Alternates', false ).' value="Montserrat Alternates">Montserrat Alternates</option>
							<option '.selected( $options[2], 'Montserrat Subrayada', false ).' value="Montserrat Subrayada">Montserrat Subrayada</option>
							<option '.selected( $options[2], 'Moul', false ).' value="Moul">Moul</option>
							<option '.selected( $options[2], 'Moulpali', false ).' value="Moulpali">Moulpali</option>
							<option '.selected( $options[2], 'Mountains of Christmas', false ).' value="Mountains of Christmas">Mountains of Christmas</option>
							<option '.selected( $options[2], 'Mouse Memoirs', false ).' value="Mouse Memoirs">Mouse Memoirs</option>
							<option '.selected( $options[2], 'Mr Bedfort', false ).' value="Mr Bedfort">Mr Bedfort</option>
							<option '.selected( $options[2], 'Mr Dafoe', false ).' value="Mr Dafoe">Mr Dafoe</option>
							<option '.selected( $options[2], 'Mr De Haviland', false ).' value="Mr De Haviland">Mr De Haviland</option>
							<option '.selected( $options[2], 'Mrs Saint Delafield', false ).' value="Mrs Saint Delafield">Mrs Saint Delafield</option>
							<option '.selected( $options[2], 'Mrs Sheppards', false ).' value="Mrs Sheppards">Mrs Sheppards</option>
							<option '.selected( $options[2], 'Muli', false ).' value="Muli">Muli</option>
							<option '.selected( $options[2], 'Mystery Quest', false ).' value="Mystery Quest">Mystery Quest</option>
							<option '.selected( $options[2], 'Neucha', false ).' value="Neucha">Neucha</option>
							<option '.selected( $options[2], 'Neuton', false ).' value="Neuton">Neuton</option>
							<option '.selected( $options[2], 'New Rocker', false ).' value="New Rocker">New Rocker</option>
							<option '.selected( $options[2], 'News Cycle', false ).' value="News Cycle">News Cycle</option>
							<option '.selected( $options[2], 'Niconne', false ).' value="Niconne">Niconne</option>
							<option '.selected( $options[2], 'Nixie One', false ).' value="Nixie One">Nixie One</option>
							<option '.selected( $options[2], 'Nobile', false ).' value="Nobile">Nobile</option>
							<option '.selected( $options[2], 'Nokora', false ).' value="Nokora">Nokora</option>
							<option '.selected( $options[2], 'Norican', false ).' value="Norican">Norican</option>
							<option '.selected( $options[2], 'Nosifer', false ).' value="Nosifer">Nosifer</option>
							<option '.selected( $options[2], 'Nothing You Could Do', false ).' value="Nothing You Could Do">Nothing You Could Do</option>
							<option '.selected( $options[2], 'Noticia Text', false ).' value="Noticia Text">Noticia Text</option>
							<option '.selected( $options[2], 'Noto Sans', false ).' value="Noto Sans">Noto Sans</option>
							<option '.selected( $options[2], 'Noto Serif', false ).' value="Noto Serif">Noto Serif</option>
							<option '.selected( $options[2], 'Nova Cut', false ).' value="Nova Cut">Nova Cut</option>
							<option '.selected( $options[2], 'Nova Flat', false ).' value="Nova Flat">Nova Flat</option>
							<option '.selected( $options[2], 'Nova Mono', false ).' value="Nova Mono">Nova Mono</option>
							<option '.selected( $options[2], 'Nova Oval', false ).' value="Nova Oval">Nova Oval</option>
							<option '.selected( $options[2], 'Nova Round', false ).' value="Nova Round">Nova Round</option>
							<option '.selected( $options[2], 'Nova Script', false ).' value="Nova Script">Nova Script</option>
							<option '.selected( $options[2], 'Nova Slim', false ).' value="Nova Slim">Nova Slim</option>
							<option '.selected( $options[2], 'Nova Square', false ).' value="Nova Square">Nova Square</option>
							<option '.selected( $options[2], 'Numans', false ).' value="Numans">Numans</option>
							<option '.selected( $options[2], 'Nunito', false ).' value="Nunito">Nunito</option>
							<option '.selected( $options[2], 'Odor Mean Chey', false ).' value="Odor Mean Chey">Odor Mean Chey</option>
							<option '.selected( $options[2], 'Offside', false ).' value="Offside">Offside</option>
							<option '.selected( $options[2], 'Old Standard TT', false ).' value="Old Standard TT">Old Standard TT</option>
							<option '.selected( $options[2], 'Oldenburg', false ).' value="Oldenburg">Oldenburg</option>
							<option '.selected( $options[2], 'Oleo Script', false ).' value="Oleo Script">Oleo Script</option>
							<option '.selected( $options[2], 'Oleo Script Swash Caps', false ).' value="Oleo Script Swash Caps">Oleo Script Swash Caps</option>
							<option '.selected( $options[2], 'Open Sans', false ).' value="Open Sans">Open Sans</option>
							<option '.selected( $options[2], 'Open Sans Condensed:300', false ).' value="Open Sans Condensed:300">Open Sans Condensed</option>
							<option '.selected( $options[2], 'Oranienbaum', false ).' value="Oranienbaum">Oranienbaum</option>
							<option '.selected( $options[2], 'Orbitron', false ).' value="Orbitron">Orbitron</option>
							<option '.selected( $options[2], 'Oregano', false ).' value="Oregano">Oregano</option>
							<option '.selected( $options[2], 'Orienta', false ).' value="Orienta">Orienta</option>
							<option '.selected( $options[2], 'Original Surfer', false ).' value="Original Surfer">Original Surfer</option>
							<option '.selected( $options[2], 'Oswald', false ).' value="Oswald">Oswald</option>
							<option '.selected( $options[2], 'Over the Rainbow', false ).' value="Over the Rainbow">Over the Rainbow</option>
							<option '.selected( $options[2], 'Overlock', false ).' value="Overlock">Overlock</option>
							<option '.selected( $options[2], 'Overlock SC', false ).' value="Overlock SC">Overlock SC</option>
							<option '.selected( $options[2], 'Ovo', false ).' value="Ovo">Ovo</option>
							<option '.selected( $options[2], 'Oxygen', false ).' value="Oxygen">Oxygen</option>
							<option '.selected( $options[2], 'Oxygen Mono', false ).' value="Oxygen Mono">Oxygen Mono</option>
							<option '.selected( $options[2], 'Pacifico', false ).' value="Pacifico">Pacifico</option>
							<option '.selected( $options[2], 'Paprika', false ).' value="Paprika">Paprika</option>
							<option '.selected( $options[2], 'Parisienne', false ).' value="Parisienne">Parisienne</option>
							<option '.selected( $options[2], 'Passero One', false ).' value="Passero One">Passero One</option>
							<option '.selected( $options[2], 'Passion One', false ).' value="Passion One">Passion One</option>
							<option '.selected( $options[2], 'Pathway Gothic One', false ).' value="Pathway Gothic One">Pathway Gothic One</option>
							<option '.selected( $options[2], 'Patrick Hand', false ).' value="Patrick Hand">Patrick Hand</option>
							<option '.selected( $options[2], 'Patrick Hand SC', false ).' value="Patrick Hand SC">Patrick Hand SC</option>
							<option '.selected( $options[2], 'Patua One', false ).' value="Patua One">Patua One</option>
							<option '.selected( $options[2], 'Paytone One', false ).' value="Paytone One">Paytone One</option>
							<option '.selected( $options[2], 'Peralta', false ).' value="Peralta">Peralta</option>
							<option '.selected( $options[2], 'Permanent Marker', false ).' value="Permanent Marker">Permanent Marker</option>
							<option '.selected( $options[2], 'Petit Formal Script', false ).' value="Petit Formal Script">Petit Formal Script</option>
							<option '.selected( $options[2], 'Petrona', false ).' value="Petrona">Petrona</option>
							<option '.selected( $options[2], 'Philosopher', false ).' value="Philosopher">Philosopher</option>
							<option '.selected( $options[2], 'Piedra', false ).' value="Piedra">Piedra</option>
							<option '.selected( $options[2], 'Pinyon Script', false ).' value="Pinyon Script">Pinyon Script</option>
							<option '.selected( $options[2], 'Pirata One', false ).' value="Pirata One">Pirata One</option>
							<option '.selected( $options[2], 'Plaster', false ).' value="Plaster">Plaster</option>
							<option '.selected( $options[2], 'Play', false ).' value="Play">Play</option>
							<option '.selected( $options[2], 'Playball', false ).' value="Playball">Playball</option>
							<option '.selected( $options[2], 'Playfair Display', false ).' value="Playfair Display">Playfair Display</option>
							<option '.selected( $options[2], 'Playfair Display SC', false ).' value="Playfair Display SC">Playfair Display SC</option>
							<option '.selected( $options[2], 'Podkova', false ).' value="Podkova">Podkova</option>
							<option '.selected( $options[2], 'Poiret One', false ).' value="Poiret One">Poiret One</option>
							<option '.selected( $options[2], 'Poller One', false ).' value="Poller One">Poller One</option>
							<option '.selected( $options[2], 'Poly', false ).' value="Poly">Poly</option>
							<option '.selected( $options[2], 'Pompiere', false ).' value="Pompiere">Pompiere</option>
							<option '.selected( $options[2], 'Pontano Sans', false ).' value="Pontano Sans">Pontano Sans</option>
							<option '.selected( $options[2], 'Port Lligat Sans', false ).' value="Port Lligat Sans">Port Lligat Sans</option>
							<option '.selected( $options[2], 'Port Lligat Slab', false ).' value="Port Lligat Slab">Port Lligat Slab</option>
							<option '.selected( $options[2], 'Prata', false ).' value="Prata">Prata</option>
							<option '.selected( $options[2], 'Preahvihear', false ).' value="Preahvihear">Preahvihear</option>
							<option '.selected( $options[2], 'Press Start 2P', false ).' value="Press Start 2P">Press Start 2P</option>
							<option '.selected( $options[2], 'Princess Sofia', false ).' value="Princess Sofia">Princess Sofia</option>
							<option '.selected( $options[2], 'Prociono', false ).' value="Prociono">Prociono</option>
							<option '.selected( $options[2], 'Prosto One', false ).' value="Prosto One">Prosto One</option>
							<option '.selected( $options[2], 'PT Mono', false ).' value="PT Mono">PT Mono</option>
							<option '.selected( $options[2], 'PT Sans', false ).' value="PT Sans">PT Sans</option>
							<option '.selected( $options[2], 'PT Sans Caption', false ).' value="PT Sans Caption">PT Sans Caption</option>
							<option '.selected( $options[2], 'PT Sans Narrow', false ).' value="PT Sans Narrow">PT Sans Narrow</option>
							<option '.selected( $options[2], 'PT Serif', false ).' value="PT Serif">PT Serif</option>
							<option '.selected( $options[2], 'PT Serif Caption', false ).' value="PT Serif Caption">PT Serif Caption</option>
							<option '.selected( $options[2], 'Puritan', false ).' value="Puritan">Puritan</option>
							<option '.selected( $options[2], 'Purple Purse', false ).' value="Purple Purse">Purple Purse</option>
							<option '.selected( $options[2], 'Quando', false ).' value="Quando">Quando</option>
							<option '.selected( $options[2], 'Quantico', false ).' value="Quantico">Quantico</option>
							<option '.selected( $options[2], 'Quattrocento', false ).' value="Quattrocento">Quattrocento</option>
							<option '.selected( $options[2], 'Quattrocento Sans', false ).' value="Quattrocento Sans">Quattrocento Sans</option>
							<option '.selected( $options[2], 'Questrial', false ).' value="Questrial">Questrial</option>
							<option '.selected( $options[2], 'Quicksand', false ).' value="Quicksand">Quicksand</option>
							<option '.selected( $options[2], 'Quintessential', false ).' value="Quintessential">Quintessential</option>
							<option '.selected( $options[2], 'Qwigley', false ).' value="Qwigley">Qwigley</option>
							<option '.selected( $options[2], 'Racing Sans One', false ).' value="Racing Sans One">Racing Sans One</option>
							<option '.selected( $options[2], 'Radley', false ).' value="Radley">Radley</option>
							<option '.selected( $options[2], 'Raleway', false ).' value="Raleway">Raleway</option>
							<option '.selected( $options[2], 'Raleway Dots', false ).' value="Raleway Dots">Raleway Dots</option>
							<option '.selected( $options[2], 'Rambla', false ).' value="Rambla">Rambla</option>
							<option '.selected( $options[2], 'Rammetto One', false ).' value="Rammetto One">Rammetto One</option>
							<option '.selected( $options[2], 'Ranchers', false ).' value="Ranchers">Ranchers</option>
							<option '.selected( $options[2], 'Rancho', false ).' value="Rancho">Rancho</option>
							<option '.selected( $options[2], 'Rationale', false ).' value="Rationale">Rationale</option>
							<option '.selected( $options[2], 'Redressed', false ).' value="Redressed">Redressed</option>
							<option '.selected( $options[2], 'Reenie Beanie', false ).' value="Reenie Beanie">Reenie Beanie</option>
							<option '.selected( $options[2], 'Revalia', false ).' value="Revalia">Revalia</option>
							<option '.selected( $options[2], 'Ribeye', false ).' value="Ribeye">Ribeye</option>
							<option '.selected( $options[2], 'Ribeye Marrow', false ).' value="Ribeye Marrow">Ribeye Marrow</option>
							<option '.selected( $options[2], 'Righteous', false ).' value="Righteous">Righteous</option>
							<option '.selected( $options[2], 'Risque', false ).' value="Risque">Risque</option>
							<option '.selected( $options[2], 'Roboto', false ).' value="Roboto">Roboto</option>
							<option '.selected( $options[2], 'Roboto Condensed', false ).' value="Roboto Condensed">Roboto Condensed</option>
							<option '.selected( $options[2], 'Roboto Slab', false ).' value="Roboto Slab">Roboto Slab</option>
							<option '.selected( $options[2], 'Rochester', false ).' value="Rochester">Rochester</option>
							<option '.selected( $options[2], 'Rock Salt', false ).' value="Rock Salt">Rock Salt</option>
							<option '.selected( $options[2], 'Rokkitt', false ).' value="Rokkitt">Rokkitt</option>
							<option '.selected( $options[2], 'Romanesco', false ).' value="Romanesco">Romanesco</option>
							<option '.selected( $options[2], 'Ropa Sans', false ).' value="Ropa Sans">Ropa Sans</option>
							<option '.selected( $options[2], 'Rosario', false ).' value="Rosario">Rosario</option>
							<option '.selected( $options[2], 'Rosarivo', false ).' value="Rosarivo">Rosarivo</option>
							<option '.selected( $options[2], 'Rouge Script', false ).' value="Rouge Script">Rouge Script</option>
							<option '.selected( $options[2], 'Ruda', false ).' value="Ruda">Ruda</option>
							<option '.selected( $options[2], 'Rufina', false ).' value="Rufina">Rufina</option>
							<option '.selected( $options[2], 'Ruge Boogie', false ).' value="Ruge Boogie">Ruge Boogie</option>
							<option '.selected( $options[2], 'Ruluko', false ).' value="Ruluko">Ruluko</option>
							<option '.selected( $options[2], 'Rum Raisin', false ).' value="Rum Raisin">Rum Raisin</option>
							<option '.selected( $options[2], 'Ruslan Display', false ).' value="Ruslan Display">Ruslan Display</option>
							<option '.selected( $options[2], 'Russo One', false ).' value="Russo One">Russo One</option>
							<option '.selected( $options[2], 'Ruthie', false ).' value="Ruthie">Ruthie</option>
							<option '.selected( $options[2], 'Rye', false ).' value="Rye">Rye</option>
							<option '.selected( $options[2], 'Sacramento', false ).' value="Sacramento">Sacramento</option>
							<option '.selected( $options[2], 'Sail', false ).' value="Sail">Sail</option>
							<option '.selected( $options[2], 'Salsa', false ).' value="Salsa">Salsa</option>
							<option '.selected( $options[2], 'Sanchez', false ).' value="Sanchez">Sanchez</option>
							<option '.selected( $options[2], 'Sancreek', false ).' value="Sancreek">Sancreek</option>
							<option '.selected( $options[2], 'Sansita One', false ).' value="Sansita One">Sansita One</option>
							<option '.selected( $options[2], 'Sarina', false ).' value="Sarina">Sarina</option>
							<option '.selected( $options[2], 'Satisfy', false ).' value="Satisfy">Satisfy</option>
							<option '.selected( $options[2], 'Scada', false ).' value="Scada">Scada</option>
							<option '.selected( $options[2], 'Schoolbell', false ).' value="Schoolbell">Schoolbell</option>
							<option '.selected( $options[2], 'Seaweed Script', false ).' value="Seaweed Script">Seaweed Script</option>
							<option '.selected( $options[2], 'Sevillana', false ).' value="Sevillana">Sevillana</option>
							<option '.selected( $options[2], 'Seymour One', false ).' value="Seymour One">Seymour One</option>
							<option '.selected( $options[2], 'Shadows Into Light', false ).' value="Shadows Into Light">Shadows Into Light</option>
							<option '.selected( $options[2], 'Shadows Into Light Two', false ).' value="Shadows Into Light Two">Shadows Into Light Two</option>
							<option '.selected( $options[2], 'Shanti', false ).' value="Shanti">Shanti</option>
							<option '.selected( $options[2], 'Share', false ).' value="Share">Share</option>
							<option '.selected( $options[2], 'Share Tech', false ).' value="Share Tech">Share Tech</option>
							<option '.selected( $options[2], 'Share Tech Mono', false ).' value="Share Tech Mono">Share Tech Mono</option>
							<option '.selected( $options[2], 'Shojumaru', false ).' value="Shojumaru">Shojumaru</option>
							<option '.selected( $options[2], 'Short Stack', false ).' value="Short Stack">Short Stack</option>
							<option '.selected( $options[2], 'Siemreap', false ).' value="Siemreap">Siemreap</option>
							<option '.selected( $options[2], 'Sigmar One', false ).' value="Sigmar One">Sigmar One</option>
							<option '.selected( $options[2], 'Signika', false ).' value="Signika">Signika</option>
							<option '.selected( $options[2], 'Signika Negative', false ).' value="Signika Negative">Signika Negative</option>
							<option '.selected( $options[2], 'Simonetta', false ).' value="Simonetta">Simonetta</option>
							<option '.selected( $options[2], 'Sintony', false ).' value="Sintony">Sintony</option>
							<option '.selected( $options[2], 'Sirin Stencil', false ).' value="Sirin Stencil">Sirin Stencil</option>
							<option '.selected( $options[2], 'Six Caps', false ).' value="Six Caps">Six Caps</option>
							<option '.selected( $options[2], 'Skranji', false ).' value="Skranji">Skranji</option>
							<option '.selected( $options[2], 'Slackey', false ).' value="Slackey">Slackey</option>
							<option '.selected( $options[2], 'Smokum', false ).' value="Smokum">Smokum</option>
							<option '.selected( $options[2], 'Smythe', false ).' value="Smythe">Smythe</option>
							<option '.selected( $options[2], 'Sniglet:800', false ).' value="Sniglet:800">Sniglet</option>
							<option '.selected( $options[2], 'Snippet', false ).' value="Snippet">Snippet</option>
							<option '.selected( $options[2], 'Snowburst One', false ).' value="Snowburst One">Snowburst One</option>
							<option '.selected( $options[2], 'Sofadi One', false ).' value="Sofadi One">Sofadi One</option>
							<option '.selected( $options[2], 'Sofia', false ).' value="Sofia">Sofia</option>
							<option '.selected( $options[2], 'Sonsie One', false ).' value="Sonsie One">Sonsie One</option>
							<option '.selected( $options[2], 'Sorts Mill Goudy', false ).' value="Sorts Mill Goudy">Sorts Mill Goudy</option>
							<option '.selected( $options[2], 'Source Code Pro', false ).' value="Source Code Pro">Source Code Pro</option>
							<option '.selected( $options[2], 'Source Sans Pro', false ).' value="Source Sans Pro">Source Sans Pro</option>
							<option '.selected( $options[2], 'Special Elite', false ).' value="Special Elite">Special Elite</option>
							<option '.selected( $options[2], 'Spicy Rice', false ).' value="Spicy Rice">Spicy Rice</option>
							<option '.selected( $options[2], 'Spinnaker', false ).' value="Spinnaker">Spinnaker</option>
							<option '.selected( $options[2], 'Spirax', false ).' value="Spirax">Spirax</option>
							<option '.selected( $options[2], 'Squada One', false ).' value="Squada One">Squada One</option>
							<option '.selected( $options[2], 'Stalemate', false ).' value="Stalemate">Stalemate</option>
							<option '.selected( $options[2], 'Stalinist One', false ).' value="Stalinist One">Stalinist One</option>
							<option '.selected( $options[2], 'Stardos Stencil', false ).' value="Stardos Stencil">Stardos Stencil</option>
							<option '.selected( $options[2], 'Stint Ultra Condensed', false ).' value="Stint Ultra Condensed">Stint Ultra Condensed</option>
							<option '.selected( $options[2], 'Stint Ultra Expanded', false ).' value="Stint Ultra Expanded">Stint Ultra Expanded</option>
							<option '.selected( $options[2], 'Stoke', false ).' value="Stoke">Stoke</option>
							<option '.selected( $options[2], 'Strait', false ).' value="Strait">Strait</option>
							<option '.selected( $options[2], 'Sue Ellen Francisco', false ).' value="Sue Ellen Francisco">Sue Ellen Francisco</option>
							<option '.selected( $options[2], 'Sunshiney', false ).' value="Sunshiney">Sunshiney</option>
							<option '.selected( $options[2], 'Supermercado One', false ).' value="Supermercado One">Supermercado One</option>
							<option '.selected( $options[2], 'Suwannaphum', false ).' value="Suwannaphum">Suwannaphum</option>
							<option '.selected( $options[2], 'Swanky and Moo Moo', false ).' value="Swanky and Moo Moo">Swanky and Moo Moo</option>
							<option '.selected( $options[2], 'Syncopate', false ).' value="Syncopate">Syncopate</option>
							<option '.selected( $options[2], 'Tangerine', false ).' value="Tangerine">Tangerine</option>
							<option '.selected( $options[2], 'Taprom', false ).' value="Taprom">Taprom</option>
							<option '.selected( $options[2], 'Tauri', false ).' value="Tauri">Tauri</option>
							<option '.selected( $options[2], 'Telex', false ).' value="Telex">Telex</option>
							<option '.selected( $options[2], 'Tenor Sans', false ).' value="Tenor Sans">Tenor Sans</option>
							<option '.selected( $options[2], 'Text Me One', false ).' value="Text Me One">Text Me One</option>
							<option '.selected( $options[2], 'The Girl Next Door', false ).' value="The Girl Next Door">The Girl Next Door</option>
							<option '.selected( $options[2], 'Tienne', false ).' value="Tienne">Tienne</option>
							<option '.selected( $options[2], 'Tinos', false ).' value="Tinos">Tinos</option>
							<option '.selected( $options[2], 'Titan One', false ).' value="Titan One">Titan One</option>
							<option '.selected( $options[2], 'Titillium Web', false ).' value="Titillium Web">Titillium Web</option>
							<option '.selected( $options[2], 'Trade Winds', false ).' value="Trade Winds">Trade Winds</option>
							<option '.selected( $options[2], 'Trocchi', false ).' value="Trocchi">Trocchi</option>
							<option '.selected( $options[2], 'Trochut', false ).' value="Trochut">Trochut</option>
							<option '.selected( $options[2], 'Trykker', false ).' value="Trykker">Trykker</option>
							<option '.selected( $options[2], 'Tulpen One', false ).' value="Tulpen One">Tulpen One</option>
							<option '.selected( $options[2], 'Ubuntu', false ).' value="Ubuntu">Ubuntu</option>
							<option '.selected( $options[2], 'Ubuntu Condensed', false ).' value="Ubuntu Condensed">Ubuntu Condensed</option>
							<option '.selected( $options[2], 'Ubuntu Mono', false ).' value="Ubuntu Mono">Ubuntu Mono</option>
							<option '.selected( $options[2], 'Ultra', false ).' value="Ultra">Ultra</option>
							<option '.selected( $options[2], 'Uncial Antiqua', false ).' value="Uncial Antiqua">Uncial Antiqua</option>
							<option '.selected( $options[2], 'Underdog', false ).' value="Underdog">Underdog</option>
							<option '.selected( $options[2], 'Unica One', false ).' value="Unica One">Unica One</option>
							<option '.selected( $options[2], 'UnifrakturCook:700', false ).' value="UnifrakturCook:700">UnifrakturCook</option>
							<option '.selected( $options[2], 'UnifrakturMaguntia', false ).' value="UnifrakturMaguntia">UnifrakturMaguntia</option>
							<option '.selected( $options[2], 'Unkempt', false ).' value="Unkempt">Unkempt</option>
							<option '.selected( $options[2], 'Unlock', false ).' value="Unlock">Unlock</option>
							<option '.selected( $options[2], 'Unna', false ).' value="Unna">Unna</option>
							<option '.selected( $options[2], 'Vampiro One', false ).' value="Vampiro One">Vampiro One</option>
							<option '.selected( $options[2], 'Varela', false ).' value="Varela">Varela</option>
							<option '.selected( $options[2], 'Varela Round', false ).' value="Varela Round">Varela Round</option>
							<option '.selected( $options[2], 'Vast Shadow', false ).' value="Vast Shadow">Vast Shadow</option>
							<option '.selected( $options[2], 'Vibur', false ).' value="Vibur">Vibur</option>
							<option '.selected( $options[2], 'Vidaloka', false ).' value="Vidaloka">Vidaloka</option>
							<option '.selected( $options[2], 'Viga', false ).' value="Viga">Viga</option>
							<option '.selected( $options[2], 'Voces', false ).' value="Voces">Voces</option>
							<option '.selected( $options[2], 'Volkhov', false ).' value="Volkhov">Volkhov</option>
							<option '.selected( $options[2], 'Vollkorn', false ).' value="Vollkorn">Vollkorn</option>
							<option '.selected( $options[2], 'Voltaire', false ).' value="Voltaire">Voltaire</option>
							<option '.selected( $options[2], 'VT323', false ).' value="VT323">VT323</option>
							<option '.selected( $options[2], 'Waiting for the Sunrise', false ).' value="Waiting for the Sunrise">Waiting for the Sunrise</option>
							<option '.selected( $options[2], 'Wallpoet', false ).' value="Wallpoet">Wallpoet</option>
							<option '.selected( $options[2], 'Walter Turncoat', false ).' value="Walter Turncoat">Walter Turncoat</option>
							<option '.selected( $options[2], 'Warnes', false ).' value="Warnes">Warnes</option>
							<option '.selected( $options[2], 'Wellfleet', false ).' value="Wellfleet">Wellfleet</option>
							<option '.selected( $options[2], 'Wendy One', false ).' value="Wendy One">Wendy One</option>
							<option '.selected( $options[2], 'Wire One', false ).' value="Wire One">Wire One</option>
							<option '.selected( $options[2], 'Yanone Kaffeesatz', false ).' value="Yanone Kaffeesatz">Yanone Kaffeesatz</option>
							<option '.selected( $options[2], 'Yellowtail', false ).' value="Yellowtail">Yellowtail</option>
							<option '.selected( $options[2], 'Yeseva One', false ).' value="Yeseva One">Yeseva One</option>
							<option '.selected( $options[2], 'Yesteryear', false ).' value="Yesteryear">Yesteryear</option>
							<option '.selected( $options[2], 'Zeyada', false ).' value="Zeyada">Zeyada</option>
						</select>
			</div>
			<div title="Background Color" id="ms_preview_inner'.$sv->id.'" class="wp_sap_preview1001 wp_sap_preview wp_sap_tooltip"><div class="inner" style="background:'.str_replace(";",";background:",substr($options[3],0,-1)).'"><input type="hidden" class="bgcolor" value="'.$options[3].'"></div></div>
			<div title="Font Color" style="background-color:'.$options[4].'" class="wp_sap_preview1002 wp_sap_preview wp_sap_tooltip"></div>
			<div title="Border Color" style="background-color:'.$options[5].'" class="wp_sap_preview1003 wp_sap_preview wp_sap_tooltip"></div>
			<div class="play_button"><img class="wp_sap_tooltip" title="Play Survey" src="'.plugins_url( '/assets/img/play.png' , __FILE__ ).'"></div>
			<div class="wp_sap_sliders"><input value="Border Width: '.$options[6].'px" type="text" class="wp_sap_border_width_value" /><div class="wp_sap_border_width"></div></div>
			<div class="wp_sap_sliders"><input value="Border Radius: '.$options[7].'px" type="text" class="wp_sap_border_radius_value" /><div class="wp_sap_border_radius"></div></div>
			<div class="wp_sap_sliders"><input value="Font Size: '.$options[8].'px" type="text" class="wp_sap_font_size_value" /><div class="wp_sap_font_size"></div></div>
			<div class="wp_sap_sliders"><input value="Padding: '.$options[9].'px" type="text" class="wp_sap_padding_value" /><div class="wp_sap_padding"></div></div>
			<div class="wp_sap_sliders"><input value="Line Height: '.$options[10].'px" type="text" class="wp_sap_line_height_value" /><div class="wp_sap_line_height"></div></div>
			<div class="wp_sap_sliders"><input value="Animation Speed: '.($options[11]/1000).'sec" type="text" style="width:150px;" class="wp_sap_animation_speed_value" /><div class="wp_sap_animation_speed"></div></div>
			<div class="text thankyou">Thank you message: <input type="text" name="thankyou" class="inputtext thankyou" value="'.str_replace('"','\'',$options[12]).'" /></div>
			<div class="wp_sap_checkbox"><label class="text wp_sap_tooltip" title="Enable if you want to display the survey on the entire website" style="width: 200px;"><input type="checkbox" name="global_survey" class="inputtext global_survey" '.$global_opt.' value="'.$sv->global.'" /> Global Survey</label></div>
			<div class="wp_sap_checkbox"><label class="text wp_sap_tooltip" title="Lock the screen with a transparent background" style="width: 200px;"><input type="checkbox" name="lock_bg" '.$opt_13.' class="inputtext lock_bg" value="'.$options[13].'" /> Lock Screen</label></div>
			<div class="wp_sap_checkbox"><label class="text wp_sap_tooltip" title="Users can close the survey" style="width: 200px;"><input type="checkbox" name="closeable" '.$opt_14.' class="inputtext closeable" value="'.$options[14].'" /> Closeable</label></div>
			<div class="wp_sap_checkbox"><label class="text wp_sap_tooltip" title="The survey will appear when the user scrolled down at the bottom of the page" style="width: 200px;"><input type="checkbox" name="atbottom" '.$opt_15.' class="inputtext atbottom" value="'.$options[15].'" /> Display at bottom</label></div>
			</fieldset>
			<div style="clear:both;"></div>
			<div class="form-area"><a class="add_question button button-primary button-small">Add New Question</a></div>
			<div style="clear:both;"></div>
			<input type="hidden" name="survey_id" value="" />
		<div id="new_questions">');
						$questions = $this->wpdb->get_results("SELECT * FROM ".$this->wpdb->prefix."wp_sap_questions WHERE `survey_id`='".$sv->id."' ORDER BY id ASC");
				foreach($questions as $key=>$qv)
				{
				if ($key>0) $rem_q = '<a class="add_question"><img class="remove_question wp_sap_tooltip" title="Remove Question" id="remove_question_'.$sv->id.'_'.($key+1).'" src="'.plugins_url( '/assets/img/delete.png' , __FILE__ ).'"></a>';
				else $rem_q = "";
						$allcount = $this->wpdb->get_var("SELECT SUM(count) as SUMMACOUNT FROM ".$this->wpdb->prefix."wp_sap_answers WHERE `survey_id`='".$sv->id."' AND `question_id`='".$qv->id."'");
		print('<div class="group">
		<h3>'.($key+1).'. question</h3>
		<div class="one_question" id="question_section'.($key+1).'">
		<div class="left_half">
		<div id="question_'.($key+1).'">
			<p>Question:&nbsp; <input type="text" name="question[]" id="question'.($key+1).'" style="width: 75%;" class="question_text" onclick="if (this.value==\'Was this information helpful?\') this.value=\'\'" value="'.$qv->question.'" placeholder="Type your question here" />'.$rem_q.'</p>
			<span id="answers_'.$sv->id.'">');
		$answers = $this->wpdb->get_results("SELECT * FROM ".$this->wpdb->prefix."wp_sap_answers WHERE `survey_id`='".$sv->id."' AND `question_id`='".$qv->id."' ORDER BY autoid ASC");
			foreach($answers as $key2=>$av)
			{
			if ($allcount>0) $percentage = round(($av->count/$allcount)*100,2);
			else $percentage = 0;
			if ($key2==0) print('<p>'.($key2+1).'. answer: <input type="text" name="answer[]" class="answer" id="answer1" style="width: 50%;" value="'.$av->answer.'" placeholder="yes" /><span id="answer_count1" class="answer_count">'.$av->count.' - '.$percentage.'%</span></p>');
			elseif ($key2==1) print('<p>'.($key2+1).'. answer: <input type="text" name="answer[]" class="answer" id="answer2" style="width: 50%;" value="'.$av->answer.'" placeholder="no" /><span id="answer_count2" class="answer_count">'.$av->count.' - '.$percentage.'%</span><a class="add_answer"><img class="wp_sap_tooltip" title="Add New Answer" src="'.plugins_url( "/assets/img/add.png" , __FILE__ ).'"></a></p>');
			else print('</span><p class="added_answers" id="answer_element_'.$sv->id.'_'.($key2+1).'"><span>'.($key2+1).'.</span> answer: <input type="text" name="answer[]" class="answer" id="answer'.($key2+1).'" style="width: 50%;" value="'.$av->answer.'" placeholder="no" /><span id="answer_count'.($key2+1).'" class="answer_count">'.$av->count.' - '.$percentage.'%</span><a class="remove_answer" id="remove_answers_'.$sv->id.'_'.($key2+1).'"><img class="wp_sap_tooltip" title="Remove Answer" src="'.plugins_url( "/assets/img/delete.png" , __FILE__ ).'"></a></p>');
			}
			print('
		</div>
		</div>
		<div class="right_half" id="chart'.($key+1).'">
		<canvas id="wp_sap_pro_graph_'.$sv->id.'_'.($key+1).'" class="canvas_graph" height="250" width="250"></canvas>
		</div>
		</div>
		</div>');
		}
		print('</div>
		<div style="clear:both;"></div>
		<div>
			<br><span><input type="submit" name="delete_survey" class="delete_survey button" value="DELETE"></span><span><input type="submit" name="save_survey" class="save_survey button" value="UPDATE"></span><span><input type="submit" name="reset_survey" class="reset_survey button" value="RESET"></span><span class="survey_error_span"></span>
		</div>
	</div>');
				}
//				print_r($surveys);
				?>
			</div>
			</p>
	</div>
	<div id="proversion">
			<h3 style="text-align: center;">Modal Survey - WordPress Feedbacks & Polls Plugin<br /><hr /></h3>
			<div style="width: 590px;display: inline-block;vertical-align: top;">
			<p style="text-align: center; display: inline-block;">
			<a target="_blank" href="http://codecanyon.net/item/modal-survey-wordpress-feedbacks-polls-plugin/6533863?ref=pantherius"><img src="http://static.pantherius.com/modal-survey/preview.jpg"></a>
			</p>
			<div style="display: inline-block">
			<h3 style="text-align: center;">Key Features</h3>
			<ul>
				<li>visual builder on admin with live preview</li>
				<li>mobile-friendly, responsive</li>
				<li>parallax effect on the surveys during scroll the page</li>
				<li>start time and expiry time for each survey</li>
				<li>different styles (modal, flat, open with click on a link)</li>
				<li>gradient RGB color picker</li>
				<li>ability to display link at the end of the survey (force users to fill out to get the link)</li>
				<li>unlimited questions and answers, reset counters with one-click</li>
				<li>ability to lock the screen when the survey appear</li>
				<li>different positions</li>
				<li>you can specify your own notice</li>
				<li>custom animations with full range of jQuery easing effects</li>
				<li>fully localizable, you can define all messages, texts in admin</li>
				<li>automatically display the same survey once per user</li>
				<li>animated charts for the results</li>
				<li>more than 10 available shortcode to display the Survey’s result (progressbar style, plain text style, etc.)</li>
				<li>ability to set the survey on the entire website or include it to the specified page</li>
				<li>you can set each survey can be closeable by the users or force to fill out</li>
				<li>display the surveys only when the users scrolled down to the bottom of the page</li>
				<li>full detailed documentation</li>
			</ul>
			<a target="_blank" class="button button-primary" href="http://codecanyon.net/item/modal-survey-wordpress-feedbacks-polls-plugin/6533863?ref=pantherius">PURCHASE PRO VERSION</a>
			</div>
			</div>
			<div style="display:inline-block;width: 400px;">
				<a target="_blank" href="http://codecanyon.net/item/modal-survey-wordpress-feedbacks-polls-plugin/6533863?ref=pantherius"><img style="width:100%;" src="http://static.pantherius.com/modal-survey/cc_promo_image.png"></a>
			</div>
	</div>
	<div id="plugin_directory">
		<p>
			<p>    
			<?php print(file_get_contents("http://pantherius.com/static/plugin_directory.html")); ?>
			</p>
		</p>

	</div>
	<div id="manual">
<p>If you have any questions or issues beyond the scope of this manual, <a target="_blank" href="https://wordpress.org/support/plugin/wp-survey-and-poll">please visit our Support Forum.</a></p>
<section id="settings">
	<div class="page-header"><h3>SETTINGS</h3><hr class="notop"></div>
<p>
	The pugin has a simple, but very powerful options.</p>
<p>
	You can reach the settings by clicking on the Settings on the left side and choose the WP Survey and Poll. Or you can also visit the settings page if you choose the Plugins, Installed Plugins and select the WordPress Survey and Poll under the Settings in the Plugin list page.<br>
	<br>
</p>
<p>
	<img alt="" src="data:image/png;base64,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datYvh23efPmTZs2ieVGtTfffPOtt94Syz8qbNiw4Y033pCX/63w+uuvv/baa2L5Xwr/qbZeYd26da+++qpYFiq88sorJpNJXr6ssHbt2pdeekks1yisXr161apV8nKlwvLly1esWCGWL6ZYtmyZWL6gsHTp0iVLlixdunSxwvPPP79o0SJ5uVDhD3/4w3PPPSeWzyosWLDgmWeekZdPKzz55JNPPfWUvJT9/ve/nz9/vrx8QmHevHlz584VyzkKs2fPnjVrlrx8XKGgoGDmzJliOUNt+vTp06ZNE8tp06ZNnTpVLB9Te/TRR+XlFIVHHnlk8uTJYvlw3KRJk373u9+J5UNqDzzwwIMPPiiWv1W477777r//frG8V+03v/nNPffcI5ZKd99991133SUvf62gXJ90lLI05Vnks993333KC5OvViyV70V+j5MmTXpYQXlPHnnkEeXtSrqTgnzPxQehVFBQMGPGDLGcqTBr1qzHH39cXs5WmDNnjqgYopLInnjiCVGRxHK+grLiPaXwzDPPPP300/JygcKzzz4rKrmo8LKFCxeK/yjEcpHCkiVLFi9eLJZL1V544QXxn574z1Bp+fLlYrkibtWqVStXrpSXqxXWrFkj/kEQ/zjIXn75ZfEPiFiaFNatW1dYWCiWryqIf6PkpdJ//dd/iX/cxD90sv/+7/8W/xiK5RsKb7755h//+EexfEtt48aN4h9e8Y+w7O23396yZYtYblVT/pP+joL4QyD+KMjef/998YdDLD9QKCoq2rlzp1juUvjoo48+/PBDefmxwieffCL+qIk/cErij6BY7lH49NNP9+7dK5afqX3++efiD6744yvbt2+f+AMt/lgrib/pYnlYQXwBkJdKf/3rX8XXhpKSkmMKx48f/9vf/nb8+PETCqdOnTp58qS8/ELh9OnT4suM2Ww+o/Dll1+KLz9i+ZWC8ovTObXS0lLxRausrEz+DnbhwgXl17Okb27KL3XyN72qqirll8Ck74fKr45WBeX3TOX3z/r6euVXU+W3VvmrrPz91u12J337lb8VNzU1Kb8wJ32XTvqmLX8DV34tT/rGrvwyL3/DF08+lyXlAmVkkHNEJBJRRoyk9DH8ODPUVt/Y9M6aK2EUw68fAAAAAJAHhjbWN/WJvjT5GpHetQsAAAAADCFXDzeCEelduwAAAADAEIi++Uzv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XDRn1pzJD0++/977f33nr++4/Y7bf377L277xZBef7GK6Pv/fvaL2/5SH5/yqnzCj6fvtUZCkdDR5RsmTFC+lv/0F298EYiEquzH/BHPmYMTTOWeSPvRLxpDkbZjyzf84Lr7BzzjG18EIqGId8cPFtz8F6uIuD+47v7b3vjKEz/vbcr1v/jFbb/4xX99FQy12HedaQ0FLC9MMF3zH79If22/2FsXCbV4z/sjIb9V7Jz9bbn957ffcfsdv77z1/ffe//khyfPmTVn0fOL1pnWbdu6jegLABi+kYu+GoN8FauyfKSvRjyUE+YwprlKJW74ZgAAIABJREFUjZyqsFxsGaAbc+Z7Ki5e86TaV6I3w0df9XRPGjNYJWJjfPqpDKNvxtNcJaVYRREa0zQPGH3jDccp7dga70KrUKIvMALk6Lt58+a1L619dsGzBTMKHnrwobt+fdftt99+63/cevNNN990401Den1WJ6LvD6+96cabXjvlj0ffHz4qNrlOHPzxT2+68bUvPZFIqO4zcdSrX7aKkFzxyYZ/+fGm2FH+2hcmvPLjnyaforguEopELn520403xcupKZ8wYdk14ueq8n/58d2vfhlIOW/Jv/z47lghYs9IxHP64IT/7+kb4peteW1iUygScZ8qie2c9evmm26+9T9uvf322+/69V0PPfhQwYyCZxc8u/altZs3byb6AgCGb4Sib3Jzr5x0Jy7cmHXuTdcnWDXhc7qHG6XbFN+s2X9aXhN7pJH2NWS6pzq3K3tuKx+IZLChvmMg+iYNtS1JmW05ZZBsptE36fD0fZ2TxuMm52D55IO2+sbbcbV6QqcM9U2cW7GC6AvknBx9N27cuGbNmmeefmbatGm/vf+3v7zjl7fdettNN970s5/+7IbrbxjS61OLiL7/+u83XH/DDYVn4hH0Xx+5/oYbrt/jTvQotpz65wkbYuvXn/GIPsYTNvzrv9+w2xKJjc795yev0TjL+r/5FT2T/RdXxMsRB4YikcozZzzyeT+1iNL+WbpTLuGkP9bMm1iZ7tpu+LQykrJzdq+f/fRnN91402233vbLO3752/t/O23atGeefmbNmjWbNm0i+gIAhm9Eoq/WrM4jZ4DBskYdRzsWjIXoO54ld8Im+gI5l4i+b21cvXr1U0899dijj917770Tb594y823/PSGn15/3fXXXnPtUF/S0gkTNvxfKfbrj3/48oQJGyb8YJJya+wlr7z22mv+ff4/TdgwYcJS6dprr7n2WukHGyZM2PBPP7wjzVnu+Ld/UvRM/qf5P45vEgdOmLDh//5w/j/Jp5CWppQmSnj53/49+cpTrm1vZSyWq3fO4nX9ddf/7Kc/u+XmWybePvHee+997NHHnnrqqdWrV298ayPRFwAwfCMRfTUe5juSiL4jguhraCltx0RfIOfk6Ltp46Y1q9c8/dTTUx+bet+998nR97prr7vmJ9fwuuYn11zzkz2WWMP1hKU/GmIh1117nRx977vvvqlTpz791NNrVtPqCwDIjRGOvtl2bR4Kou+IIPoamMaU00RfIOfk6Pv25rfXrl27YMGC6dOmP/DbB+785Z233XrbjT+78YYbbrj+uuuvu/a68f76JNaD2r1jwoYJP3h4SIVcf931N9xwg+jwfOcv73zgtw9Mnzb92WefXbt27dub3yb6AgCGbzSe64uxiOgLYJxLzPC8deu6desWLVo0e/bshx9++J577pk4ceJtt912yy233HTTTTfixhtvvOaHogv0smuGWMBNN910yy23/PznP584ceI999zz8MMPz549e9GiRevWrduyZQvRFwAwfERfaCP6AhjnRPQNBoPbt2/fsGHDihUrnn766YKCgkmTJt1333133XXXnXfeeccdd0xELtxxxx133nnn3Xfffd99902aNKmgoODpp59euXLlhg0btm/fHgqF9K4OAIAxj+gLbUaIvlevXr1y5co333xD9AUw+oqKir755pv+/v4LFy5s2bJl/fr1L7744jPPPDN79uxp06ZNnjx50qRJDz300IPIhYceemjSpEmTJ0+eNm3a7NmzFyxY8OKLL65fv37Lli0XLlz4+9//rnd1AACMeURfaDNO9P3222+LAEAP33777ZUrV7q7u8+fP79p06b169evWrVq8eLFCxYsePLJJ5944om5c+fOnTt3DoZH3MYnnnjiySefXLBgweLFi1evXr1+/fpNmzadP3++p6dn+H9NAAAg+kKbQaLv999/f/ny5UuXLvX19fXGRQFgJPX29vb19V26dOny5cvff//91atX//73vweDQS9GVzAYpL0XAJArRF9oM0j0vXr16pUrVy5fvvztt99+E/cPABhJ33zzzbfffnv58uUrV67k5N8xAACgO6IvtBkn+l69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"></p>
<p>
	Type Demo Survey to create our first survey and press Enter or click on the New Survey button.
</p>
<p>
	<img alt="" src="data:image/png;base64,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flMZVZqcnHzssceuvPLKgHhguOyyy3784x//8pe/HBoiWoaSz+czmdGTp06cPHViLMPgIkRMeg0d72bsZOlldLyb3CNINYrU3iSEmCAhoGL333//Jz7xifPPP79kNnC55JJLDhw4IHvzgUTjq05JCDFofOGpnSK1NwkhJkgIqEzwLyiX9M53vjOTych+EkBy8VWnJIQYNL7w1E6R2puEEBMkBFTg8ccfb2xsrCYhNDQ03HrrrbKfB5BcfNUpCSEGjS88tVOk9iYhxAQJARW49NJLq4wHDQ0N8+fPl/08gOTiq05JCDFofOGpnSK1NwkhJoyEIHsroJPJyckrr7yyqalp4cKF8+fPv+iiiy644IK5c+eed955c+bMmT179uzZs88tmj179pvf/OY5c+acd955c+fOvfDCCy+++OL58+cvWrTo8ssvHxkZyeVysp8QkEQkBBJCDBoJwU6R2puEEBO9QJlSqdTu3bu3bdu2cePG9evX33777bfddtstt9yyatWqG2644brrrrv++uuvu+66L33pS9dee+2KFStuvPHGm2++uaWl5Yc//OHdd9/94IMPPvHEEzt37jxw4EB/f//EBPeZARKQEEgIMWgkBDtFam8SApBok5OTmUzmxIkTR48e7enpeeGFF3bt2vX0009v27atvb29ra1t8+bNmzdvbm9v37p169NPP/3ss8/u27fv4MGDR48eHR4ezmQyk5OTsp8EkFxHTo5Lr6FLtueOnfy/rv2qfXTiFZ/93K5Xh6RvWIwTwoOP/6ShoeHuX35f+paEaa+P9Mg9jpSiSO1NQgAQhJtbAJWp/4PKD2zb4XcX050PbZa+ebFMCE/ueegd73y7RgmBn1W2U6T2JiEAAKArxRPCE3tfWvTOd7suGuzuO/G+D3+koaHhkgULf3eoX/pGxiwhmPGAhKApRWpvEgIAALpSPCF8/74HhGOKzJDw7R/8WPpGxikh/PAux0/ckBB0pEjtTUIAAEBXKicE8/YDYQz4xnf+taGhoXnlKunbGY+EYNx4YPj2mlWf//JfkhA0pUjtTUIAAEBXKieE4GZcXiAhRJsQ3rbgot0vte878msSgr4Uqb1JCAAA6GrfgPwauoIWfHlBqWbsZ+k1dMm2ces9u19qN/6tXULoPrpD7nGkFEVqbxICAAC6kl5AV9aMCwhzL7iw9bfPS9+YeCQEe9MuIex/rUPucaQURWpvEgIAALqSXkBX0MzvP1X/AgIJgYRQf4rU3iQEAAB0Jb2ArjgeqH8HAgmBhCCFIrU3CQEAAF1JL6DLasbgIo3iAQmBhFB/itTeJAQAAHSl0Z3Kxteb6jK4iIRQz8adynaK1N4kBAAAdKXFt52a31zU0NBw50ObpW8PCUG1xred2ilSe5MQAADQlfoJwfz5ZC2+uYiEQEKQTpHam4QAAICuFE8I5tWDSxYs/N2hfunbQ0JQs5EQ7BSpvUkIAADoSvGEoNHvHpAQSAiKUKT2JiEAAKArlROCOb4ogPpfamTsZ+k1NAkhORSpvUkIAADo6sjJcek1tF97Yu9Li975bhICCaFke32kR+5xpBRFam8SAgAAuuofOyu9ho53M/az9Bo63u34qcNyjyOlKFJ7kxAAANAVCYGEEINGQrBTpPYmIQAAoCsSAgkhBo2EYKdI7U1CAABAV4OZrPQaOt7N2M/Sa+h4t6HRPrnHkVIUqb1JCAAA6GosOyW9ho53M/az9Bo63i1z9qTc40gpitTeJAQAAHSVncpLr6Hj3Yz9LL2GjnfLTU3IPY6UokjtTUIAAEBj0mvoeDdjJ0uvoePd5B5BqlGk9iYhAACgsQPpMelldIybsZOl19Axbgf798g9glSjSO1NQgAAQGMq/6xyDJqxk6WX0TFu/KCyiyK1NwkBAACN8YWnJAStG1916qJI7U1CAABAY3zhKQlB68ZXnbooUnuTEAAA0BhfeEpC0LrxVacuitTeJAQAADQ2PjktvYyOcTN2svQyOsaNrzp1UaT2JiEAAKA36WV0jJuxh6WX0TFuco8dBSlSe5MQAADQW9fgqPRKOq7N2MPSy+i4Nr7q1EuR2puEAACA3o6cHJdeSce1GXtYeiUd19Y3nJJ77ChIkdqbhAAAgN6Gx3PSK+m4NmMPS6+k49pGMgNyjx0FKVJ7kxAAANAbNyuTEDRt3KbspUjtTUIAAEB7+wbkF9OxbMbulV5Jx7J1H90h96hRkyK1NwkBAADtHRo5I72YjmUzdq/0YjqW7Ui6S+5RoyZFam8SAgAA2uOXlUkI2jV+TVlIkdqbhAAAgPa4FYGEoF2byI3JPWrUpEjtTUIAACAOuBWBhKBR4yYEP4rU3iQEAADigFsRSAgaNW5C8KNI7U1CAAAgDrgVgYSgUeMmBD+K1N4kBAAA4oBbEUgIGjVuQvCjSO1NQgAAICa6Bkell9Qxa8aOlV5Px6y9dGyn3CNFZYrU3iQEAABiou/0hPSSOmbN2LHSS+qYtddHeuQeKSpTpPYmIQAAEBMMNCIhaNEYYhRAkdqbhAAAQHww0IiEoHhjiFEwRWpvEgIAAPHBNxqREBRvfItRMEVqbxICAADxkZ3KS6+q49SMvSq9qo5Ty01NyD1GFKdI7U1CAAAgVg6kx6QX1rFpxi6VXlXHph3s3yP36FCfIrU3CQEAgFhhoBEJQdk2khmQe3SoT5Ham4QAAECsTOUL0gvr2DRjl0ovrGPTpvOTco8O9SlSe5MQAACIm0MjZ6TX1vFoxv6UXljHox1Jd8k9LrSgSO1NQgAAIG6Gx3PSa+t4NGN/Sq+t49EYYhSGIrU3CQEAgBjihxFICEo1fgYhJEVqbxICAAAxxGUEEoJSjQsIISlSe5MQAACIoal8Yd+A/Apb92bsTOnlte6t++gOuYeDRhSpvUkIAADEU//YWekVtu7N2JPSK2zd2/FTh+UeCxpRpPYmIQAAEE9cRiAhqNC6j+7gS07DU6T2JiEAABBbXEYgIUhvXEAoiyK1NwkBAIDY4jICCUFu4wJCuRSpvUkIAADE2ZGT49LrbH2bsQ+l19n6ttdHeuS+/rWjSO1NQgAAIM6yU3npdba+zdiH0utsfVtuakLu6187itTeJAQAAGKOywgkBCmtbzgl95WvI0VqbxICAAAxl53KczcCCaHOrfvoDi4gVECR2puEAABA/PGlRiSEOje+wqgyitTeJAQAABKha3BUesGtXTN2nfRqW7t2sH+P3Fe7vhSpvUkIAAAkwlh2SnrBrV0zdp30glu7ljl7Uu6rXV+K1N4kBAAAkoJblkkIdWjcoFwNRWpvEgIAAEnBD6iREGrd+Im0KilSe5MQAABIkMFMVnrZrVEzdpr0slujNjTaJ/cVrjtFam8SAgAAyXIgPSa98talGXtMetmtS+MG5eopUnuTEAAASBZuWSYh1KhN5MbkvrZjQJHam4QAAEDi9J2ekF58a9GM3SW98taivT7SI/dVHQ+K1N4kBAAAEmdqOs9YIxJChO1g/56paW5QjoAitTcJAQCAJBqfnOZ7jUgIkbTuozsYXxQVRWpvEgIAAAk1PJ6TXoIr3owdJb0EV7yNZPrlvpLjRJHam4QAAEBy8RtqJIQqG7+PFi1Fam8SAgAAycUNCSSEahq3H0ROkdqbhAAAQKJxQwIJobLG7Qe1oEjtTUIAACDpuCGBhFBB4/aDWlCk9iYhAAAAbkggIZTXuP2gRhSpvUkIAACAGxJICGU0bj+oHUVqbxICAAAoFLghgYQQrnH7QU0pUnuTEAAAwAxCAgmBeCCXIrU3CQEAAFjGslPS63J1mrFPpNfl6jTiQa0pUnuTEAAAgANfbURCEDa+vKgOFKm9SQgAAMCNkEBCIB5IoUjtTUIAAAAC/WNnpRfo0puxK6RX59Lb8VOH5b4ak0OR2puEAAAAxPiRBGM/SC/Q5TZ++qCeFKm9SQgAAMBXwkOCsROk1+jEg+RQpPYmIQAAgCAHhzPSK3USgpR26Hin3NdeAilSe5MQAABAkKnpfGJDgrEHpFfqsuIBP5xcf4rU3iQEAABQWjKHGxnPXXqxXv/G4CJZFKm9SQgAACCUBIYE44lLr9eJB8mhSO1NQgAAAGEl7StQjWctvWSvZ+OLTeVSpPYmIQAAgDIk6sfUjKcsvWqvW+Nn0aRTpPYmIQAAgPIkJyQYz1d64U48SA5Fam8SAgAAKNv45PS+AfkVPAkhktZ9dMdEbkzuKwoGRWpvEgIAAKhEEkKC8UylV/DEg+RQpPYmIQAAgAqNT04fSI9Jr+NJCBW3g/17iAdKUaT2JiEAAIDKTU3nY/wtqMZzlF7H16j1Daf4TTTVKFJ7kxAAAEC1hsdzsRxxZDw76aV85K376A7uS1aTIrU3CQEAAEQgliOOjKcmvaCPtjGySGWK1N4kBAAAEI34jTgynpf0mj7CxsgixSlSe5MQAABAlOI04sh4RtLL+kgaI4u0oEjtTUIAAAARi82II+PpSC/uq2+MLNKFIrU3CQEAAERvajrfd3pCeolPQtj/WsfrIz2MLNKFIrU3CQEAANTKWHZK64sJxrOQXuJz6SA5FKm9SQgAAKC2BjNZTe9MMLZfeqFfQes+umNotE9uv6MCitTeJAQAAFBzU/mCjl9zZGy89HK/3NY3nJrOM6xIS4rU3iQEAABQJ2PZqa7BUel1f4wTwsH+PZmzJ+X2MqqhSO1NQgAAAHXVP3ZWl0FHxgZLr/vDtO6jO46fOiy3Z1E9RWpvEgIAAKi37JQev61mbK306r9k6xtO5aYm5PYpIqFI7U1CAAAAchg5QeXrCcZ2Sg8AAdcNyAYxo0jtTUIAAAAyTeXVHXdkbKH0JCDMBsdPHeZ25PhRpPYmIQAAAPnUzAnGtknPA2SD5FCk9iYhAAAAVUzlC8PjOXW+78jYKumpwGgvHds5kumX20GoNUVqbxICAABQzvB47tDIGRKC0Y6k95MNEkKR2puEAAAAFDWVLwxmsgfSY8lMCAf794xk+hlQlCiK1N4kBAAAoLrsVH4wk63/6CNj7fUfTTQ02sc3FCWTIrU3CQEAAGhjfHK67/RE3aKCsdK6BYPXR3omcmNy9zDkUqT2JiEAAAD9jE9OD2ayh0bO1PTrj4x11S4VdB/dcSS9f2i0j2AAgyK1NwkBAADorXZpwVg+qQB1o0jtTUIAAADxkZ3KD4/njpwcj+T+ZmOZ1aeCg/17+oZTI5l+7i5AMEVqbxICAACIrexUfiw7NZjJ9o+dPTicKTc2GAspNwwcOr73+KnDQ6N9mbMniQQoiyK1NwkBAAAkiz02GK3v9MTB4Yy9GQOWjMcbQ4MOHd9rb6+P9Bw/ddhohAFERZHam4QAAAAAKEGR2puEAAAAAChBkdqbhAAAAAAoQZHam4QAAAAAKEGR2puEAAAAAChBkdqbhAAAAAAoQZHam4QAAAAAKEGR2puEAAAAAChBkdqbhAAAAAAoQZHam4QAAAAAKEGR2puEAAAAAChBkdqbhAAAAAAoQZHam4QAAAAAKEGR2puEAAAAAChBkdqbhAAAAAAoQZHam4QAAAAAKEGR2puEAAAAAChBkdqbhAAAAAAoQZHam4QAAAAAKEGR2puEAAAAAChBkdqbhAAAAAAoQZHaW3JC2LJlSy6Xq+kqAAAAAPVlMpktW7bUdBV6JIRUKtXd3V3TVQAAAADq6+7uTqVSNV2FHgkhn89v2bKlp6cnk8nUdEUAAACAmjKZzIEDB7Zs2ZLP52u6Ij0SQqFQyOfzqVRqy5YtDwMAAADJs2XLllQqVet4UNAoIQAAAACoAxICAAAAAAsJAQAAAICFhAAAAADAQkIAAAAAYCEhAAAAALCQEAAAAABYSAgAAAAALCQEAAAAABYSAgAAAAALCQEAAACAhYQAAAAAwEJCAAAAAGAhIQAAAACwkBAAAAAAWEgIAAAAACwkBAAAAAAWEgIAAAAAi04JYWxs7NixY4dQX8eOHTtz5gwdIZ23IwAAAGpBm4Rw/Pjx7he79z6/d/++/V37u/bt3ff875///Z7fP7f7uT279tCias/tfu73e37//O+f39e5r2t/1/59+/c+v7f7xe7h4WE6QqmOAAAAqBE9EsLY2Fj3i93dXd379+1//rnnd+3c9dvf/PY323+z/antHb/ueOrJp2hRtY5fd2x/avtvtv/mdzt+t2vnruefe37/C/u7u7q7X+w+c+YMHaFIR9T0cAMAAAmnR0I4evTont179j6/99lnnt3+1PatT2xtb2t/7NHHHm199JGHH2l9qLX1odaND22kVdOM3fjIw4882vroY48+1t7Wvu1X27Y/tf3ZZ57tfL5zz+49R48epSMU6YiaHm4AACDh9EgIhw4dem73c7/77e+e3Ppk22NtGx/c+Iuf/+JnP/3ZT+/96fp71t9393333nUvrfp23933rb9n/U/v/enPfvqzX/z8Fxsf2tj2WNuTW///9u7tqckzjwP43/De2d1tdV0PHA0IFEIUaThFMAJBkHAQEgKuAZRDgkFJ4oIvlRACzVgEimWraG3XA0Mq2C6OViKrrm21KEsRRxD7XnT6XBVvegF78QYS0BiG8hIz+X7md+E87++J+PzmmckXon4zeGvwztAd9tPwGMTbMAhOrxsAAAB4OY9JCIO3Bq/1X7t08VL3me7Ojs7Wk63mFnNzU3NTY5PRYDQ2oFaiDMamxqaWphZzi7n1ZGtnR2f3me7LFy9f679mHbSyCQGDeBsGwel1AwAAAC/nMQlh4JuBK5eunP3sbPup9hZTS8OHDXQtXauvPaY7ptfq9TWolSit/pjuWN2xOrqWbviwocXU0n6qvftM95VLVwb+PcAmBAzibRgEp9cNAAAAvJzHJISvLF+dP3e+/VS7yWii62hdja76cHVVZZWqXFVZVllxqAL1x6uyrFJVrqpSVVUfrtbV6Og62mQ0dbR1nD93/qrlKpsQMIi3YRCcXjcAAADwch6TEC5fvNx1usvcYqbr6JrqGlWF6lDpoZIDJcr9ygNFB1ArVcr9yhJlyaHSQ6oKVc2Rmvrj9eYWc9fpriuXrrAJAYN4GwbB6XUDAAAAL+cxCeHC5xfaTrUZThi0R7WV5ZXFB4qLFEXyfHn+vvy83Dwuq3+EIcSxHvTbHrXdfbHoEfPibtvclqd3Ty96KSf9/Q8WLc79Lk5fn8PK35dfICsoUhQVHyiuLK/UHtUaThjaTrVd+PwCmxDcN4glzmikf8Gj03efLpyabWXhSbJH/fTuaXec+TIGwel1AwAAAC/nMQmh+0z3SfNJuo7WqDWlxaWF8sK83LwcaU7W3ixphpTLuvqYIcTaQVMUTVH0wT6GIeTeFWmGVPrxnSnHR7byrUy++pghZLSv1yda5vhSTvulB8IomiofHiVktK93/lGt1Vk/d3/erL1ZOdKcvNy8QnlhaXGpRq2h6+iT5pPdZ7vZhOC+QTir9jtPCWGGv6UomuoYZwgZvXFm4Zn/PPaMMPeGwnayi+23pghDmB6d/SR7HhOGMD3l9NFvX6z6mS9jEJxeNwAAAPByHpMQuj7tMjWZdFpd+aHyIkVRbk5uZkbmHskeSYokNTmVy+p9xL5lDI5hV3q/I4R5NnwsJvWjoamFjxZsGe3r3STIclx32s/Wx0PjhIw57HLRz0lJUiTpaemZGZm5OblFiqLyQ+WurhtfAAAIvUlEQVQ6rc7UZOr6tItNCO4bxBsHdKeDpkIUyampyTEaiqLnzvDjm1OEeTjYeo8wE8MH2Qb7wer4SbaZfk8IMzl8kNIdt67+mS9jEJxeNwAAAPByHpMQOj/pNDQYjmiOlChLZHmyzIzMtNS0ZHGyOEm8K3EXl9UzzL5l5O2wrfxrmDBkvHVjqcH6fNEjxy2jfb0bwjMc103O+tkyW8cJ+clhl4t+TkqcJE4WJ6elpmVmZMryZCXKkqPVRxsbGjs/6WQTgvsG8cYBMfeGXnNKZus4IffO0NT5/zGE6akpjZ1bf+K4pWeYIWSsr5d6w0xXu948CE6vGwAAAHg5j0kIbafa6ul6tUq9v3B/dlZ2WmqaOEm8M2FnQlxCfGw8l3X5R/YtY0CkbeWLH9lPpKiPDz5f9Jn1J4PN81tG+3rXh6Q6vpTBWT9bzYNPCPnJYZeLfk4qIS5hZ8JOcZI4LTUtOyt7f+F+tUpdT9e3nWpjE4L7BuG8vnj4+vMxDD5nyIur5XTAicEnhIz2Xd76Afuo+fpzwpDx1sDcubafe8rp9SGp7jjzZQyC0+sGAAAAXs5jEkLryda62rqKsooCWcHe9L27d+0WxYtihbHCaOEHOz7gsi7aEoLv+7aVz20JoUZ/8/mrn1lfFyRmt4z29a4LEju+1IlbTvrZBuMtNiHMr7jo56SE0cJYYawoXrR71+696XsLZAUVZRV1tXWtJ1vZhOC+QbyxQv2GrHPv6f97kV00DjwnzOSDg1QNb5txYJIwz4ar5k5vboiq0AVtbjnzZQyC0+sGAAAAXs5jEoL5I7Nepy8tKd2Xs0+SIhHFi4TRwqhtUdsitwn4Ai7ry4fsW8ZNwbaVcw8JQ8ZbqaM1NyYXPXLcMtrX+16AyHH9+E0n/WyduMkmhPldLvo5qW2R26K2RQmjhaJ4kSRFsi9nX2lJqV6nN39kZhOC+wbhujI2lQ+PEsI8Gz4SbDtP5v4QtbYozDY1pqe6KGzBjC761998QsjY171smzvOfBmD4PS6AQAAgJfzmITQbGquOVKj/LsyKzNLnCSOFcZuF2znh/PDw8LfD32fy7rwgH3L+LdAduXCPUKYieGDVLl2LiHMPVqwZbSv913fWMf1fzjrZ6v+xhghPznsctHPSYWHhfPD+dsF22OFseIkcVZmlvKAUntU29LcwiYE9w1iSVX/9SRhyHjruwr9jclX/w3Z0b6Lm7c6zPHZsOrsjwx5YSmn2WN3x5kvYxCcXjcAAADwch6TEIxGo+awplBRmL4nXZQgitoeFR4eHrI1JIgXxNvC47LO/cC+ZVznw9vC4+muTzKE/KeDpv4sr7k+6fho0ZbRvt4/bdjhuK5z1s9W7XU2IczvctHPSQXxgkK2hoSHh0dtjxIliNL3pBcqCjWHNUajkU0I7huEk/rsB8IQcvec/QyZ+0MUdb5vkrB/u8D2YaG5Hy9Uzh3vZz8Qhoxb7xNm4ruD1JENAe4682UMgtPrBgAAAF7OYxKCwWCoqqoqkBdIJJK42LhIfmRoSChvCy8wINDfz5/L6v5+0feh7/yzmqLo9zb61wxMvPJd6u+7XreFIRP9euf9bOkH2ITwznoBu+Kin5MKDAjkbeGFhoRG8iPjYuMkEkmBvKCqqqqxsZFNCO4bhNPSX51wOKKJuxUUTWmsY4Qwz4YPUtV/9bG19U8QhjA96vzNiyZ7f4h6x7bojjNfxiA4vW4AAADg5TwnITQY1Gq1TCZLSU4RCoUR4RHBQcEB/gF+vn4+m304rvWlC/7/LIr+y3rbow3rqhc9oqjS9a/bQlHVazc672drY94ail6zjj//W7voX/ny8/ULDAgMDgqOCI8QCoUpySkymUytVhsaDLaE4M5BOC3+2jUOR7Qmb8PcYdp+vaCteu3GVyb7bqL7znwZg+D0ugEAAICX85iE0GhorFJXyWXy1JTUGGHM/BtTXx/fzZs2o1aqfH1859+YxsTEpKamymXyKrX9ZwgYxNswCE6vGwAAAHg5j0kITcYmjUajUCjSJGnxcfGCSEFoSOiWwC3+/v5+vn6+Pr6oP15+vn7+/v7sh1sEkYL4uPg0SVphYaFGo2kyNrEJAYN4GwbB6XUDAAAAL+cxCaG5uVmr1SqVSqlUmpSUFB0dHRERERoaGhwczOPxtsBK4PF4wcHBYWFhERER0dHRSUlJUqlUqVRqtVqTyWT7t4wwCO65HASn1w0AAAC8nGckhKmpKbPZTNN0RUWFXC5PT09PTEyMiYmJiooSCAR8Pj8CVgKfzxcIBDt27IiJiUlMTExPT5fL5ZWVlTRNm81mhmEwiNXhchCcXjcAAADwcp6REH777bfbt2+bTCa9Xl9WVlZQUCCVSiUSiVgsTkxMFIlECbASRCJRYmKiWCyWSCRSqVShUJSVlen1epPJdPv27ZcvX2IQq8PlIDi9bgAAAODlPCMhzM7O/vLLL1artbGxUa/Xq1Sq4uJihUKRn5+fm5ubnZ2dnZ2dBX8Me4y5ubn5+fkKhaK4uFitVuv1+sbGRqvV+uuvv2IQq2OJgwAAAADgiMckhNnZ2ZcvX05NTY3D6pqamlr0TWsMwi1eHQQAAAAAFzwpIQAAAAAAANeQEAAAAAAAwA4JAQAAAAAA7JAQAAAAAADADgkBAAAAAADskBAAAAAAAMAOCQEAAAAAAOyQEAAAAAAAwA4JAQAAAAAA7JAQAAAAAADADgkBAAAAAADsViYhWCyW33//fSW+HgAAAAAAcJvp6WmLxbKUThcJYWRk5NGjRyvxJQEAAAAAgNs8evRoZGRkKZ0uEsLMzIzFYhkbG5uenl6JLwwAAAAAAFbV9PT048ePLRbLzMzMUvpdJITZ2dmZmZmRkRGLxfIlAAAAAAB4GovFMjIyssR4sKSEAAAAAAAA3gMJAQAAAAAA7JAQAAAAAADADgkBAAAAAADskBAAAAAAAMAOCQEAAAAAAOyQEAAAAAAAwA4JAQAAAAAA7P4PZQj0KWotq1sAAAAASUVORK5CYII="></p>
	<p><strong>Start Time:</strong>	You can schedule the starting time of the Survey. Leave it blank to start it immediately.</p>
	<p><strong>Expiry Time:</strong> The expiration time of the actual Survey. The Survey never expire if you leave it blank.</p>
	<p><strong>Display Style:</strong> The surveys appears on the bottom part of the website by default, but you can select the top or the center area as well.</p>
	<p><strong>Animation Easing:</strong> This is the full range of available easing effect for jQuery animations, choose the best you like. You can try out all of these with clicking on the Play Button on the right side.</p>
	<p><strong>Font Family:</strong> You can select from more than 650 Google Font Styles, if you would like to use your website default font settings, just leave it on the default value. You can also try out this option if you click on the play button and select different font family.</p>
	<p><strong>Background Color Picker:</strong> The Gradient Background Color Picker provide a huge customization options. You can add color slider as many as you want. Choose the colors by clicking on the sliders.</p>
	<p><strong>Font Color Picker:</strong> The Font Color Picker allows you to choose the best font color you wish.</p>
	<p><strong>Border Color Picker:</strong> To see the results of this color picker, you have to set the Border Width settings to 1px or higher.</p>
	<p><strong>Border Width:</strong> The initial Border Width value is 1px, but you can reduce it to zero or increase. This setting is linked to the Border Color Picker. </p>
	<p><strong>Border Radius:</strong> It is possible to make rectangles or ovals. Check the changes in Play mode.</p>
	<p><strong>Font Size:</strong> The size of the texts on the Survey including the question, answers and the thank you message.</p>
	<p><strong>Padding:</strong> With this setting you can set the distance of the texts from the borders.</p>
	<p><strong>Line Height:</strong> Vertical distance of the texts related to the borders.</p>
	<p><strong>Animation Speed:</strong> The starting animation speed in seconds.</p>
	<p><strong>Thank you message:</strong> After the users answered al questions, this message will appear last. Generally, you can leave it on the default value, but you can translate or reword.</p>
	<p><strong>Global Survey:</strong> This setting is on by default. Choose this if you want to display the Survey on all pages.</p>
	<p><strong>Lock Screen:</strong> A transparent dark background lock the screen. You can combine this option with the Closeable setting.</p>
	<p><strong>Closeable:</strong> The users can close the Survey by clicking on the imageDisplay at bottom(x) or on the transparent background.</p>
	<p><strong>Display at bottom:</strong> The Survey animation is starting when the page is loaded by default. If you set this option to on, the Survey will appear when the user scrolled down to the bottom of the page.</p>
	<h3>Adding a new question</h3>
	Click on the [add new question] link and the new question immediately inserted. You can add as many as you want, but don't forget, too much question can make slower you website. The questions are <strong>sortable</strong>, so you can easily change the order.
	You can delete the questions by clicking on the minus sign at the end of the question line. The first question can't be deleted.
	<h3>Adding a new answer</h3>
	Click on the plus sign at the end of the second answer and the new answer immediately inserted. You can add as many as you want, of course depends on the visibility possibilities.(eg.: 40 answer doesn't look like good on the front side of your website).
	You can delete the answers by clicking on the minus sign at the end of the actual answer line. The first and the second answers can't be deleted.
	
	The plugin using Cookies to display the same Surveys only once for the same user.
	If you create more active Surveys, one user will get always new Surveys on every page reloading (if available).
	
	You can also insert download links to the Thank you message field, in this case, the plugin will detect that and the message won't be disappear until the user click on it.
</section>
<section id="shortcodes">
	<div class="page-header"><h3>SHORTCODES</h3><hr class="notop"></div>
	<h3>Display the Survey on the specified page</h3>
	You can find the simple shortcode on the admin, in the selected accordion, look like: 
	<pre class="html"><strong>[survey id=121234344]</strong></pre>
	If you use this shortcode, this will include the selected Survey only on that page, where you inserted the shortcode.
	<br>With align and width parameters, you make more customized Surveys:
	<br><pre class="html"><strong>[survey id=121234344 align=right width=50%]</strong></pre>	
	
	<h3>Display the Survey on the specified page - Start with click on a link</h3>
	Add style=click to the shortcode, for example: 
	<pre class="html"><strong>[survey id=121234344 style=click]</strong></pre>
	You have to create a link with the survey id class: 
	<pre class="html"><strong>&lt;a class="121234344"&gt;Click here to start the Survey&lt;/a&gt;</strong></pre>
	When someone filled out the survey, the link still be visible for that user, therefore, you can create a message for those users like this: 
	<pre class="html"><strong>[survey id=121234344 style=click message='You already filled out this survey!']</strong></pre>
	If you don't use this parameter, the initial value of the message is the same.
	
	<h3>Display the Survey on the specified page - Flat Style</h3>
	Add style=flat to the shortcode, for example: 
	<pre class="html"><strong>[survey id=121234344 style=flat]</strong></pre>
	The place, where you insert this shortcode is very important, because the Survey will appear on that place when the user scrolled down and reach that point.	
	
	<h3>Result shortcodes - Display the full Survey's results with Progress Bar</h3>
	<p><strong>This feature is available in the <a target="_blank" href="http://codecanyon.net/item/modal-survey-wordpress-feedbacks-polls-plugin/6533863?ref=pantherius">PRO version</a> only.</strong></p>
	To insert the full Survey results to the page, just use the following shortcode:
	<pre class="html"><strong>[survey_answers id=121234344]</strong></pre>
	The place, where you insert this shortcode is very important, because the Survey will appear on that place when the user scrolled down and reach that point.
	You can use a several parameters to customize.

	<h3>Result shortcodes - Display Survey's specified question results with Progress Bar</h3>
	<p><strong>This feature is available in the <a target="_blank" href="http://codecanyon.net/item/modal-survey-wordpress-feedbacks-polls-plugin/6533863?ref=pantherius">PRO version</a> only.</strong></p>
	To insert the Survey's specified question's results to the page, just use the following shortcode:
	<pre class="html"><strong>[survey_answers id=121234344 qid=1 data=question]</strong></pre>
	This is the first question of the Survey with id:121234344
	You have to define the data=question parameter and the number of the question.
	
	<h4>Customization</h4>
	<p><strong>This feature is available in the <a target="_blank" href="http://codecanyon.net/item/modal-survey-wordpress-feedbacks-polls-plugin/6533863?ref=pantherius">PRO version</a> only.</strong></p>
	If you would like to hide the exact number of votes, use the hidecounter=yes parameter, like this:
	<pre class="html"><strong>[survey_answers id=121234344 hidecounter=yes]</strong></pre>
	It is possible to specify the background and the font colors (in text or HEX format):
	<pre class="html"><strong>[survey_answers id=121234344 hidecounter=yes bgcolor=red color=#000000]</strong></pre>
	You can also use the random attribute:
	<pre class="html"><strong>[survey_answers id=121234344 hidecounter=yes bgcolor=random color=random]</strong></pre>

	<h3>Result shortcodes - Get the questions and answers in plain text format</h3>
	<p><strong>This feature is available in the <a target="_blank" href="http://codecanyon.net/item/modal-survey-wordpress-feedbacks-polls-plugin/6533863?ref=pantherius">PRO version</a> only.</strong></p>
	You can use the results in articles with the exact parameters of the questions or answers.
	You can get the question with this shortcode:
	<pre class="html"><strong>[survey_answers id=121234344 qid=1 style=plain data=question]</strong></pre>
	The qid mean the number of the question.
	If you define the answer number, you can also get it like this:
	<pre class="html"><strong>[survey_answers id=121234344 qid=1 aid=1 style=plain data=answer]</strong></pre>
	To get the votes, you can use the answer_count and the answer_percentage instead of the answer attribute in the data parameter:
	<pre class="html"><strong>[survey_answers id=121234344 qid=1 aid=1 style=plain data=answer_count]</strong></pre>
	or:
	<pre class="html"><strong>[survey_answers id=121234344 qid=1 aid=1 style=plain data=answer_percentage]</strong></pre>
	Of course, you can use more shortcodes on the same page, so you can compose articles from these informations.
	
	
</section>
	
	</div>
	</div>
	<div id="dialog-confirm" title="Delete Survey?">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>
</div>
	<div id="dialog-confirm2" title="Reset Survey Answers?">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>The answer counts will be permanently deleted and cannot be recovered. Are you sure to reset?</p>
</div>
	<div id="dialog-confirm3" title="Unlimited Questions?">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Free version limited to two questions per survey. To add unlimited questions, please <a target="_blank" href="http://codecanyon.net/item/modal-survey-wordpress-feedbacks-polls-plugin/6533863?ref=pantherius">purchase the PRO version here.</a> <br><br>Please don't forget to remove the free version before you install the PRO.</p>
</div>
	<div id="dialog-confirm4" title="Unlimited Answers?">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Free version limited to three answers per question. To add unlimited answers, please <a target="_blank" href="http://codecanyon.net/item/modal-survey-wordpress-feedbacks-polls-plugin/6533863?ref=pantherius">purchase the PRO version here.</a> <br><br>Please don't forget to remove the free version before you install the PRO.</p>
</div>
</div>
<div id="survey" style="position: fixed;left:0px;z-index: 999999;width:98%;padding:1%;"></div>