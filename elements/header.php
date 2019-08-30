<!DOCTYPE html>

<html>

	<head>

	    <?php
	    	$this->inc('app/page_settings.php');
	    	$po = new PageOptions();

	    ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/_css/style.css">
			<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/_css/responsive.css">
			<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/_css/typography.css">


			<?php Loader::element('header_required'); ?> <!-- must be last in load order -->

	</head>

<div class="<?php echo $c->getPageWrapperClass(); ?>"> <!-- sets C5 body class -->
	<body class="<?php if ($po->isHome()) { echo "home_wrapper"; } else {echo "internal_wrapper"; }  ?>">
		<body class="vibrant">
  <div class="<?php echo $c->getPageWrapperClass()?>">
  <header>
    <div class="topbar">
      <div><i class="fa fa-phone"></i><a href="tel:8454348300">(845) 434-8300</a></div>
      <div>
        <div class="social">
          <a href="/"><i class="fa fa-instagram"></i></a>
          <a href="/"><i class="fa fa-linkedin"></i></a>
          <a href="/"><i class="fa fa-facebook"></i></a>
          <a href="/"><i class="fa fa-youtube"></i></a>
          <a href="/"><i class="fa fa-twitter"></i></a>
        </div>
        <a class="donate-btn">DONATE</a>
      </div>
    </div>
    <div class="navigation">
      <div class="toggle-wrapper">
        <div class="menu-toggle inactive">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <span class="bg"></span>
        </div>
        <p>MENU</p>
     </div>
     <div class="logo">
       <a href="/"><img src="<?php echo $this->getThemePath(); ?>/images/nh-logo-blue.png" alt="New Hope Logo"></a>
     </div>
      <nav class="nav">
        <ul>
          <li>
            <a href="/">Our Services</a>
          </li>
          <li>
              <a href="/about">Who We Are</a>
          </li>
          <li>
            <a href="/contact">Support Us</a>
           </li>
        </ul>
      </nav>
    </div>
  </header>

		<!-- PLEASE REMOVE THIS SECTION BEFORE LAUNCH -- Just placeholder for some useful C5 elements
		--------------
		<?php
			$a = new Area("Some Name");
			$a->display();
	    ?>
	    -----------
	    
	    -----------
		<?php
			$a = new GlobalArea("Some Name");
			$a->display();
	    ?>
	    -----------

		--------NOTE THAT YOU MUST USE echo $this->getThemePath(); ?> FOR ALL ELEMENTS IN THEME IMAGES/JS/CSS etc. ------
	    <img class="logo" alt="Center for Disability Services Logo" src="<?php echo $this->getThemePath(); ?>/images/cfds-logo-full-color-rgb.jpg"> 
	    -------------

		--------FOR IF YOU ARE USING c5 BUILT IN SLIDESHOW FOR HOMEPAGE SLIDE-----------
	    <?php
		  $a = new Area("Some name");
		  $blocks = $a->getTotalBlocksInArea($c);

		  if ($blocks == 0 && !$c->isEditMode()) { echo "<img src=".$this->getThemePath().".defaultImage.jpg>"; } // Default Header
		  else { $a->display($c); } // Custom header
		?>
		-->