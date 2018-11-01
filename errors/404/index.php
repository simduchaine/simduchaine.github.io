<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>404 - Page Not Found</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/wordsearch-resize.js"></script>
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="/path/to/favicon.gif">
	
	<?php $letters_array = range("a","z"); ?>
	
	<script type="text/javascript">
	$(function() {
		/* 4 */ $(this).delay(1500).queue(function(){ $( ".one" ).addClass("selected"); $(this).dequeue(); })
		/* 0 */ .delay(500).queue(function(){ $( ".two" ).addClass("selected"); $(this).dequeue(); })
		/* 4 */ .delay(500).queue(function(){ $( ".three" ).addClass("selected"); $(this).dequeue(); })
		
		/* P */ .delay(500).queue(function(){ $( ".four" ).addClass("selected"); $(this).dequeue(); })
		/* A */ .delay(500).queue(function(){ $( ".five" ).addClass("selected"); $(this).dequeue(); })
		/* G */ .delay(500).queue(function(){ $( ".six" ).addClass("selected"); $(this).dequeue(); })
		/* E */ .delay(500).queue(function(){ $( ".seven" ).addClass("selected"); $(this).dequeue(); })
		
		/* N */ .delay(500).queue(function(){ $( ".eight" ).addClass("selected"); $(this).dequeue(); })
		/* O */ .delay(500).queue(function(){ $( ".nine" ).addClass("selected"); $(this).dequeue(); })
		/* T */ .delay(500).queue(function(){ $( ".ten" ).addClass("selected"); $(this).dequeue(); })
		
		/* F */ .delay(500).queue(function(){ $( ".eleven" ).addClass("selected"); $(this).dequeue(); })
		/* O */ .delay(500).queue(function(){ $( ".twelve" ).addClass("selected"); $(this).dequeue(); })
		/* U */ .delay(500).queue(function(){ $( ".thirteen" ).addClass("selected"); $(this).dequeue(); })
		/* N */ .delay(500).queue(function(){ $( ".fourteen" ).addClass("selected"); $(this).dequeue(); })
		/* D */ .delay(500).queue(function(){ $( ".fifteen" ).addClass("selected"); $(this).dequeue(); });
		
		
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
		<li class="one">4</li>
		<li class="two">0</li>
		<li class="three">4</li>
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
		<li class="four">p</li>
		<li class="five">a</li>
		<li class="six">g</li>
		<li class="seven">e</li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li><?php echo $letters_array[array_rand($letters_array)]; ?></li>
		<li class="eight">n</li>
		<li class="nine">o</li>
		<li class="ten">t</li>
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
		<li class="eleven">f</li>
		<li class="twelve">o</li>
		<li class="thirteen">u</li>
		<li class="fourteen">n</li>
		<li class="fifteen">d</li>
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
		<h1>We couldn't find what you were looking for.</h1>
		<p>Unfortunately the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exist.</p>
		<p>Check the URL you entered for any mistakes and try again. Alternatively, search for whatever is missing or take a look around the rest of our site.</p>
		
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