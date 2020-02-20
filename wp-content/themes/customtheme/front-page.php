<?php get_header();?>

<section class="page-wrap">
	<div class="container hero-container">
		<div class="row">
			<div class="hero-content mt-4 mb-4">
				<div class="col-7">
					<p class="opening_quote">
						<?php the_field('opening');?>
					</p>
					<p class="opening-name">
						<?php the_field('opening_name');?>
					</p>
					<div class="socials">
						<a class="linkedin" target="blank" href="https://www.linkedin.com/in/stevenjbabcock/">LinkedIn</a>
						<a class="github" target="blank" href="https://github.com/Quarterican-KJ">GitHub</a>
					</div>
				</div>
				<div class="col-5">
					<div class="hero-img-container">
						<img src="/wp-content/themes/customtheme/images/casual_stroll.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="divider">
			<div class="row justify-content-center">
				<div class="col-6 p-0 m-0">
					<div class="divider-left">
						<p class="divider-title">
							<?php the_field('divider_title');?>
						</p>
						<p class="divider-content">
							<?php the_field('divider');?>
						</p>
					</div>
				</div>
				<div class="col-6 p-0 m-0">
					<div class="divider-img-container"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container languages-container">
		<div class="row">
			<div class="languages-section">
				<div class="col">
					<p>
						<?php the_field('pitch');?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>