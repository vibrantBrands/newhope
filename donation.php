<?php require('elements/header_foundation.php'); ?>

<div class="donation-page content">
		
	<div>
		<?php
			$a = new Area("4 Photo Image");
			$a->display();
		?>
	</div>

	<div class="bar large lt-blue">
		YOUR DONATIONS PUT SMILES ON ALL THESE FACES!
	</div>

	<div class="container">
		<section class="donation-text">
			<div>
				<?php
					$a = new Area("Donate Top Image");
					$a->display();
				?>
			</div>
			<div>
				<?php
					$a = new Area("Donate Text");
					$a->display();
				?>
				<div class="buttons">
					<a href="/support-us"><div class="solid-btn green">DONATE NOW</div></a>
					<a href="/who-we-are/news-events"><div class="solid-btn gold">EVENTS</div></a>
				</div>
			</div>
		</section>
		<div class="bar blue">What Can Your Donation Do?</div>

		<section class="donation-do">
			<div>
				<?php
					$a = new Area("Donation Use 1");
					$a->display();
				?>
			</div>
			<div>
				<?php
					$a = new Area("Donation Use 2");
					$a->display();
				?>
			</div>
			<div>
				<?php
					$a = new Area("Donation Use 3");
					$a->display();
				?>
			</div>
			<div>
				<?php
					$a = new Area("Donation Use 4");
					$a->display();
				?>
			</div>
		</section>
	</div>

	<div class="story-wrapper">
		<div class="container">
	
		<!-- <div class="bar red">Our Stories</div>
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
			</section>  -->

			<div class="quote">
				<img src="<?php echo $this->getThemePath(); ?>/images/donation/begin-quote.png" class="quote-mark left">
				"As you drive through, the grounds and buildings are impeccably maintained and makes us feel very fortunate that a beloved family member calls New Hope Community his home." <strong>– Alan I. Cohen</strong>
				<img src="<?php echo $this->getThemePath(); ?>/images/donation/end-quote.png" class="quote-mark right">
			</div>
	</div>
</div>



<section class="ctas">
	<div class="container">
		<div>
			<?php
				$a = new Area("Donation Button 1");
				$a->display();
			?>
		</div>
		<div>
			<?php
				$a = new Area("Donation Button 2");
				$a->display();
			?>
		</div>
		<div>
			<?php
				$a = new Area("Donation Button 3");
				$a->display();
			?>
		</div>
		<div>
			<?php
				$a = new Area("Donation Button 4");
				$a->display();
			?>
		</div>
	</div>
</section>

<div class="container additional-info">
	<?php
		$a = new Area("Contact Info");
		$a->display();
	?>
	

</div>


<!-- <section class="hope-farm">
	<div class="support-cta">
		<div class="hope-farm-icon">
			<img src="<?php echo $this->getThemePath(); ?>/images/donation/hope-farm-icon.jpg">
		</div>
		<div class="hope-text">
			<p>SUPPORT<br /><span>HOPE FARM</span></p>
		</div>
	</div>
</section> -->

<?php require('elements/footer.php'); ?>
