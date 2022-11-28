<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->
	<title>
	<!--#echo var="title" -->
	</title>
	<meta name="description" content="Startup HTML template OptimizedHTML 5">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="icon" href="images/favicon.png">
	<meta property="og:image" content="images/dist/preview.jpg">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

	<?php
    	wp_head();
	?>
</head>

<header class="header">
	<div class="header__logo">
		<img src="<?= get_template_directory_uri(); ?>/app/images/dist/logo.svg">
	</div>
	<main id="panel">
		<header>
		  <button class="toggle-button">☰</button>
		  <h2>Panel</h2>
		</header>
	</main>
	<nav id="menu">
		<h2>Menu</h2>
		<p>da</p>
	</nav>
</header>




<style>
	body {
	  width: 100%;
	  height: 100%;
	}

	.slideout-menu {
	  position: fixed;
	  top: 0;
	  bottom: 0;
	  right: 0;
	  z-index: 0;
	  width: 256px;
	  overflow-y: scroll;
	  -webkit-overflow-scrolling: touch;
	  display: none;
	  background: #fff;
	  transition: 0.2s ease;
	}

	.slideout-panel {
	  position: relative;
	  z-index: 1;
	  will-change: transform;
	}

	.slideout-open,
	.slideout-open body,
	.slideout-open .slideout-panel {
	  overflow: hidden;
	}

	.slideout-open .slideout-menu {
	  display: block;
	}

	.slideout-menu-right {
		right: 0;
	}
</style>