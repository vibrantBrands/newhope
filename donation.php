<?php require('elements/header.php'); ?>

<div class="donation-page content">
		
	<div class="image-row">
		<?php
			$a = new Area("4 Photo Row");
			$a->display();
		?>
	</div>

	<div class="bar large lt-blue">
		YOUR DONATIONS PUT SMILES ON ALL THESE FACES!
	</div>

	<div class="container">
		<section class="donation-text">
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/images/donation/top-profile.png" alt="donation image">
			</div>
			<div>
				<h1><span>DONATE TO</span>
				<br />NEW HOPE</h1>
				<p>For more than 40 years, New Hope Community has been driving a culture of independence, inclusion, and innovation for people with intellectual and developmental disabilities. Your tax-deductible donation will help transform lives and support life-changing services. Thank you for making New Hope Community and the people we serve a part of your life.</p>
				<div class="buttons">
					<a href="/support-us/donate-now"><div class="solid-btn">DONATE NOW</div></a>
					<a href="/support-us/donate-now"><div class="solid-btn gold">MAKE TRIBUTE</div></a>
					<div class="solid-btn green">EVENTS</div>
				</div>
			</div>
		</section>
		<div class="bar blue">What Can Your Donation Do?</div>

		<section class="donation-do">
			<div>
				<?php
					$a = new Area("Image and Text 1");
					$a->display();
				?>
			</div>
			<div>
				<?php
					$a = new Area("Image and Text 2");
					$a->display();
				?>
			</div>
			<div>
				<?php
					$a = new Area("Image and Text 3");
					$a->display();
				?>
			</div>
			<div>
				<?php
					$a = new Area("Image and Text 4");
					$a->display();
				?>
			</div>
		</section>
	</div>

	<div class="story-wrapper">
		<div class="container">
	
		<div class="bar red">Our Stories</div>
			<section class="our-stories">
				<div class="container">
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/images/donation/meet-george.png">
						<div class="title"><p>MEET GEORGE</p></div>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/images/donation/meet-casey-milton.png">
						<div class="title"><p>MEET CASEY & MILTON</p></div>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/images/donation/meet-randall.png">
						<div class="title"><p>MEET RANDALL</p></div>
					</div>
				</div>
			</section>

			<div class="quote">
				<img src="<?php echo $this->getThemePath(); ?>/images/donation/begin-quote.png" class="quote-mark left">
				"As you drive through, the grounds and buildings are impeccably maintained and makes us feel very fortunate that a beloved family member calls New Hope Community his home." <strong>– Alan I. Cohen</strong>
				<img src="<?php echo $this->getThemePath(); ?>/images/donation/end-quote.png" class="quote-mark right">
			</div>
	</div>
</div>

<section class="ways-to-participate">
	<h2>Ways to Participate</h2>
	<div class="container">
		<div class="blue">
			<img src="<?php echo $this->getThemePath(); ?>/images/donation/golf-outing.png">
			<div class="title"><p>GOLF OUTING</p></div>
		</div>
		<div class="blue">
			<img src="<?php echo $this->getThemePath(); ?>/images/donation/annual-gala.png">
			<div class="title"><p>ANNUAL GALA</p></div>
		</div>
		<div class="blue">
			<img src="<?php echo $this->getThemePath(); ?>/images/donation/family-bbq.png">
			<div class="title"><p>FAMILY BBQ</p></div>
		</div>
	</div>
</section>

<section class="hope-farm">
	<div class="support-cta">
		<div class="hope-farm-icon">
			<img src="<?php echo $this->getThemePath(); ?>/images/donation/hope-farm-icon.png">
		</div>
		<div class="hope-text">
			<p>SUPPORT<br /><span>HOPE FARM</span></p>
		</div>
	</div>
</section>

<?php require('elements/footer.php'); ?>
