<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">


	<?php if ( is_home() ) {

	    $page_title = 'Home';
	} else if ( is_404() ) {
        $page_title = '404 Not Found';
    } else {

	    $page_title = $wp_query->post->post_title;
	}?>

	<title><?php echo $page_title ?> | Auckland Fence Company</title>

	<meta name="description" content="Welcome to The Auckland Fence Company where fences are our speciality. We are based in Auckland and have been fencing for over 23 years.">

	<meta name="keywords" content="fencing, pool fencing, fencing auckland, fencing new zealand, new zealand, retaining walls, auckland" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('assets/images/fence-favicon-16.png') ?>" sizes="16x16">  
	<link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('assets/images/fence-favicon-32.png') ?>" sizes="32x32">  
	<link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('assets/images/fence-favicon-96.png') ?>" sizes="96x96">  

	<?php wp_head(); ?>

</head>
<body>

	<button id="back-to-top" title="Go to top"><i class="fas fa-arrow-circle-up"></i></button>
	<div class="wrapper">
		<nav>
			<div class="logo">
				<a href="/">
					<span>The Auckland</span>
					<span>Fence Company</span>
				</a>
				
			</div>
			<div class="bars">
				<i class="fas fa-bars"></i>
			</div>
			<ul class="navigation">
				<li><a href="/" class="<?php if (is_home()) echo 'active'?>">Home</a></li>
				<li><a href="/about" class="<?php if (is_page('About'))echo 'active'?>">About</a></li>
				<li><a href="/gallery" class="<?php if (is_page('Gallery'))echo 'active'?>">Gallery</a></li>
				<li><a href="/guarantee" class="<?php if (is_page('Guarantee'))echo 'active'?>">Guarantee</a></li>
				<li><a href="/testimonials" class="<?php if (is_page('Testimonials'))echo 'active'?>">Testimonials</a></li>
				<li><a href="/contact" class="<?php if (is_page('Contact'))echo 'active'?>">Contact</a></li>
			</ul>
		</nav>