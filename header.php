<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true);
    } else {
      bloginfo('name'); echo " - "; bloginfo('description');
    }
  ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

	<nav class="my-account-nav">
		<div class="my-account-links">
			<div class="login">
				<a href="http://atlantavacationclub.com/login">Log In</a>
			</div>
			<div class="my-account">
				<a href="">My Account</a>
			</div>
			<div class="register">
				<a href="http://atlantavacationclub.com/register">Register</a>
			</div>
		</div>
	</nav>

	<nav class="mobile-nav">
		<div class="mobile-nav-text" >
			<h1>Atlanta Vacation Club</h1>
		</div>
		<div class="hamburger">
			<div class="burger-bar"></div>
			<div class="burger-bar"></div>
			<div class="burger-bar"></div>
		</div>
		<div class="mobile-nav-inner">
			<ul>
				<li> <a href="http://atlantavacationclub.com/">Home</a></li>
				<li><a href="">Properties</a></li>
				<li><a href="http://atlantavacationclub.com/about">About</a></li>
				<li><a href="">Contact</a></li> 
			</ul>
		</div>
	</nav>

	
		

