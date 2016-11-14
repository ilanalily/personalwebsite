<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <script src="https://use.fontawesome.com/c8b1c0d14a.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:200,400,700" rel="stylesheet">
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="dist/hamburgers.css" rel="stylesheet">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <div class="preloader"></div>

<header>
  <div class="container">
    <!-- <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1> -->

   
  </div> <!-- /.container -->
</header><!--/.header-->

