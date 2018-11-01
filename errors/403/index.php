<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>403 - Forbidden</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/wordsearch-resize.js"></script>
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="/path/to/favicon.gif">
	
	<?php $letters_array = range("a","z"); ?>
	
	<script type="text/javascript">
	$(function() {
		/* 4 */ $(this).delay(1500).queue(function(){ $( ".one" ).addClass("selected"); $(this).dequeue(); });
		/* 0 */ $(this).delay(500).queue(function(){ $( ".two" ).addClass("selected"); $(this).dequeue(); });
		/* 3 */ $(this).delay(500).queue(function(){ $( ".three" ).addClass("selected"); $(this).dequeue(); });
		
		/* A */ $(this).delay(500).queue(function(){ $( ".four" ).addClass("selected"); $(this).dequeue(); });
		/* C */ $(this).delay(500).queue(function(){ $( ".five" ).addClass("selected"); $(this).dequeue(); });
		/* C */ $(this).delay(500).queue(function(){ $( ".six" ).addClass("selected"); $(this).dequeue(); });
		/* E */ $(this).delay(500).queue(function(){ $( ".seven" ).addClass("selected"); $(this).dequeue(); });
		/* S */ $(this).delay(500).queue(function(){ $( ".eight" ).addClass("selected"); $(this).dequeue(); });
		/* S */ $(this).delay(500).queue(function(){ $( ".nine" ).addClass("selected"); $(this).dequeue(); });
		
		/* D */ $(this).delay(500).queue(function(){ $( ".ten" ).addClass("selected"); $(this).dequeue(); });
		/* E */ $(this).delay(500).queue(function(){ $( ".eleven" ).addClass("selected"); $(this).dequeue(); });
		/* N */ $(this).delay(500).queue(function(){ $( ".twelve" ).addClass("selected"); $(this).dequeue(); });
		/* I */ $(this).delay(500).queue(function(){ $( ".thirteen" ).addClass("selected"); $(this).dequeue(); });
		/* E */ $(this).delay(500).queue(function(){ $( ".fourteen" ).addClass("selected"); $(this).dequeue(); });
		/* D */ $(this).delay(500).queue(function(){ $( ".fifteen" ).addClass("selected"); $(this).dequeue(); });
		
		
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
		<li class="three">3</li>
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
		<li class="four">a</li>
		<li class="five">c</li>
		<li class="six">c</li>
		<li class="seven">e</li>
		<li class="eight">s</li>
		<li class="nine">s</li>
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
		<li class="ten">d</li>
		<li class="eleven">e</li>
		<li class="twelve">n</li>
		<li class="thirteen">i</li>
		<li class="fourteen">e</li>
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
		<h1>Access to this page is forbidden. Sorry.</h1>
		<p>Sorry, but access to this page is forbidden. Even if you have authentication, you are still not allowed to access this page. It's not meant for your eyes - ever! </p>
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