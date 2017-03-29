<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-86215224-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
	<body <?php body_class(); ?>>
			<div class="animsition">
			<!-- header -->
			<header class="header clear" role="banner">
				<div class="navegacion clear">
						<div class="wrapper">
							<!-- logo -->
							<a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img class="logo-img" src='<?php echo esc_url( get_theme_mod( 'themeslug_logo', 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
							<!-- /logo -->
							<!-- nav -->
							<nav class="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
							<!-- /nav -->
						</div> <!--.wrapper -->

				</div><!--.navegacion -->


			<?php if(is_page() )  { ?>
				<?php $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
				<?php $destacada = $destacada[0]; ?>

				<div class="imagenFondo" style="background-image:url(<?php echo $destacada ?>);"></div>


			<?php } ?>


			</header>
			<!-- /header -->




			<!-- wrapper -->
			<div class="wrapper">
