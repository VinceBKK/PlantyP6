<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700&display=swap">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<a href="<?php echo home_url(); ?>">
<img src="http://localhost/planty/wp-content/uploads/2023/09/Logo.png" alt="Logo Planty" id="site-logo"> <!-- Ajout du logo -->
</a>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
</nav>
</header>
<div id="container">
<main id="content" role="main">