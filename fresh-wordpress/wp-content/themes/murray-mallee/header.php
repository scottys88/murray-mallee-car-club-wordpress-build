<html lang="en">
<head>

  <!-- Basic Page Needs
  ––––––––––––––––––––––––––––––––––––––––––––––––––-->
  <meta charset="utf-8">
  <title><?php bloginfo('title')?> - <?php the_title() ?></title>


  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css">


	<?php wp_head(); ?>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon//apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon//apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon//apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon//apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon//apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon//apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon//apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon//apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon//android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon//favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon//favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon//favicon-16x16.png">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">


	
	
</head>
<body>

<container class="main">
	
<!--	  <nav>
		<div class="nav-bar">
		  <a href="index.html"><img src="images/logo_white.png" id="header-image"></a>
			<ul id="nav">
			  <a href="news-listing.html"><li>Club News</li></a>
			  <a href="events-listing.html"><li>Events</li></a>
			  <a href="membership.html"><li>Membership</li></a>
			  <a href="conditional-membership.html"><li>Conditional Registration</li></a>
			  <a href="contact.html" id="phone-icon"><li><i class="ion-ios-telephone"></i></li></a>
			</ul>
			  <a class="mobile-nav-icon"><i class="ion-navicon-round mobile-nav"></i></a>
		  </div>
		</nav>-->
		
	<header class="header-fixed header-menu">

	<div class="header-limiter">
		

		<h1><a href="/fresh-wordpress/home"><img src="<?php the_field('header_logo', 8); ?>" id="header-image"></a></h1>

	
		<nav>
			<a href="news">Club News</a>
			<a href="events">Events</a>
			<a href="membership">Membership</a>
			<a href="conditional-registration">Conditional Registration</a>
			<a href="contact" id="phone-icon"><i class="ion-ios-telephone"></i></a>
		</nav>

	</div>

</header>	
	

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>
	
