<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

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
			<header class="header" role="banner">
				<div class="navegacion">
					<div class="header__content">
						<!-- logo -->
						<a class="header__logo" onclick="ga('send', 'event', 'navegacion', 'logo header');" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img class="logo-img" src='<?php echo get_template_directory_uri(); ?>/img/logo-mtblosmolinos-blanco.svg' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
						<!-- /logo -->
						<!-- nav -->
						<nav class="header__nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->
						<!-- social links -->
						<ul class="header__social social__links">
							<li class="link__facebook"><a class="icon-facebook" href="https://www.facebook.com/mtblosmolinos" onclick="ga('send', 'event', 'rrss', 'facebook header');" target="_blank"></a></li>
							<li class="link__instagram"><a class="icon-instagram" href="https://www.instagram.com/mtblosmolinos/" onclick="ga('send', 'event', 'rrss', 'instagram header');" target="_blank"></a></li>
						</ul>
					</div> <!--.wrapper -->
				</div><!--.navegacion -->
				<!-- Si es una pagina interior mostrar pagina destacada -->
				<?php if(is_page())  { ?>
					<?php $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
					<?php $destacada = $destacada[0]; ?>
					<div class="page__img__destacada" style="background-image:url(<?php echo $destacada ?>);"></div>
				<?php } ?>
				<?php if(is_single() || is_category() || is_author())  { ?>
					<div class="single__bg__color" ></div>
				<?php } ?>
			</header>
			<!-- /header -->

			<!-- wrapper -->
			<div class="wrapper">
