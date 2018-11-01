<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>500 - Internal Server Error</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/wordsearch-resize.js"></script>
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="/path/to/favicon.gif">
	
	<?php $letters_array = range("a","z"); ?>
	
	<script type="text/javascript">
	$(function() {
		/* 5 */ $(this).delay(1500).queue(function(){ $( ".one" ).addClass("selected"); $(this).dequeue(); });
		/* 0 */ $(this).delay(500).queue(function(){ $( ".two" ).addClass("selected"); $(this).dequeue(); });
		/* 0 */ $(this).delay(500).queue(function(){ $( ".three" ).addClass("selected"); $(this).dequeue(); });
		
		/* S */ $(this).delay(500).queue(function(){ $( ".four" ).addClass("selected"); $(this).dequeue(); });
		/* E */ $(this).delay(500).queue(function(){ $( ".five" ).addClass("selected"); $(this).dequeue(); });
		/* R */ $(this).delay(500).queue(function(){ $( ".six" ).addClass("selected"); $(this).dequeue(); });
		/* V */ $(this).delay(500).queue(function(){ $( ".seven" ).addClass("selected"); $(this).dequeue(); });
		/* E */ $(this).delay(500).queue(function(){ $( ".eight" ).addClass("selected"); $(this).dequeue(); });
		/* R */ $(this).delay(500).queue(function(){ $( ".nine" ).addClass("selected"); $(this).dequeue(); });
		
		/* E */ $(this).delay(500).queue(function(){ $( ".ten" ).addClass("selected"); $(this).dequeue(); });
		/* R */ $(this).delay(500).queue(function(){ $( ".eleven" ).addClass("selected"); $(this).dequeue(); });
		/* R */ $(this).delay(500).queue(function(){ $( ".twelve" ).addClass("selected"); $(this).dequeue(); });
		/* O */ $(this).delay(500).queue(function(){ $( ".thirteen" ).addClass("selected"); $(this).dequeue(); });
		/* R */ $(this).delay(500).queue(function(){ $( ".fourteen" ).addClass("selected"); $(this).dequeue(); });
		
		
		
	});
	</script>
</head>

<body>

<noscript>
	<div id="noscript-warning">
	This site works best with Javascript enabled, as you can plainly see.
	</div>
</noscript>

<div id="wrap">

	<!-- === WORDSEARCH === -->
	<div id="wordsearch">
	<ul>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li class="one">5</li>
		<li class="two">0</li>
		<li class="three">0</li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li class="four">s</li>
		<li class="five">e</li>
		<li class="six">r</li>
		<li class="seven">v</li>
		<li class="eight">e</li>
		<li class="nine">r</li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li class="ten">e</li>
		<li class="eleven">r</li>
		<li class="twelve">r</li>
		<li class="thirteen">o</li>
		<li class="fourteen">r</li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
	</ul>
	</div>
	
	<!-- === MAIN TEXT CONTENT === -->
	<div id="main-content">
		<h1>Something went wrong at our end. Sorry about that.</h1>
		<p>Unfortunately our servers are having trouble loading this page. Don't worry, it's not you - it's us. An unexpected condition was encountered and we're not exactly sure what the problem is.</p>
		<p>Try reloading this page and check the URL you entered for any mistakes. Alternatively, search for whatever is missing or take a look around the rest of our site.</p>
		
		<!-- === SEARCH FORM === -->
		<div id="search">
			<form>
				<input type="text" placeholder="Search" />
				<button type="submit" class="input-search">
                	<i class="fa fa-search"></i>
            	</button>
			</form>
		</div>
		
		<!-- === NAVIGATION BUTTONS === -->
		<div id="navigation">
			<a class="navigation" href="">Home</a>
			<a class="navigation" href="">About Us</a>
			<a class="navigation" href="">Site Map</a>
			<a class="navigation" href="">Contact</a>
			<a class="navigation" href="http://twitter.com/SeptimusFossett"><i class="fa fa-twitter"></i></a>
			<a class="navigation" href=""><i class="fa fa-google-plus"></i></a>
		</div>
		

	</div>

</div>

</body>

</html>